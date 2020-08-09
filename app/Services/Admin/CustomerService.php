<?php
namespace App\Services\Admin;

use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Mail\MailCreateCustomer;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CustomerService
{
    public function index($request)
    {
        $builder = Customer::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::customer.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        return view('admin::customer.create');
    }

    public function store($request)
    {
        $data = request()->all();
        $email = $request->email;
        $data['registration_token'] = Str::random(60);
        $data['send_email_at'] = Carbon::now();
        $data['status'] = STATUS_ACCOUNT_CUSTOMER_REGISTER;
        $data['password'] = null;
        $customer = Customer::create($data);
        Mail::to($email)->send(new MailCreateCustomer( $data['registration_token']));
        return redirect()->route('admin.khach-hang.index');
    }

    public function show($id)
    {
        $data = Customer::find($id);
        return view(
            'admin::customer.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        $customer = Customer::find($id);
        if (empty($customer)) {
            return redirect()->route('admin.khach-hang.index');
        } else {
            $customer->update($request->all());
            return redirect()->route('admin.khach-hang.index');
        }

    }

}
