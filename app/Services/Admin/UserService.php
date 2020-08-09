<?php
namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Mail\MailCreateUser;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserService
{
    public function index($request)
    {
        $builder = User::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::user.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        return view('admin::user.create');
    }

    public function store($request)
    {
        $data = request()->all();
        $email = $request->email;
        $data['registration_token'] = Str::random(60);
        $data['send_email_at'] = Carbon::now();
        $data['status'] = STATUS_ACCOUNT_USER_REGISTER;
        $data['password'] = null;
        $user = User::create($data);
        Mail::to($email)->send(new MailCreateUser( $data['registration_token']));
        return redirect()->route('admin.khach-hang.index');
    }

    public function show($id)
    {
        $data = User::find($id);
        return view(
            'admin::user.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        $user = User::find($id);
        if (empty($user)) {
            return redirect()->route('admin.khach-hang.show');
        } else {
            $user->update($request->all());
            return redirect()->route('admin.khach-hang.index');
        }

    }

}
