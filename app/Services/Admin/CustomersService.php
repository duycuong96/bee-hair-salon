<?php
namespace App\Services\Admin;

use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Mail\MailCreateCustomer;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class CustomersService
{
    public function index($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $builder = Customer::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->get();

        // $data->appends(request()->query());

        return view(
            'admin::customer.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        return view('admin::customer.create');
    }

    public function store($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = request()->all();
        $email = $request->email;
        $data['registration_token'] = Str::random(60);
        $data['send_email_at'] = Carbon::now();
        $data['status'] = STATUS_ACCOUNT_CUSTOMER_REGISTER;
        $data['password'] = null;
        Customer::create($data);
        // dd($customer);
        Mail::to($email)->send(new MailCreateCustomer( $data['registration_token']));
        return redirect()->route('admin.khach-hang.index');
    }

    public function show($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Customer::find($id);
        return view(
            'admin::customer.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $customer = Customer::find($id);
        if (empty($customer)) {
            return redirect()->route('admin.khach-hang.index');
        } else {
            $customer->update($request->all());
            return redirect()->route('admin.khach-hang.index');
        }

    }

}
