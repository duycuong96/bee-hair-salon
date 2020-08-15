<?php
namespace App\Services\Admin;

use App\Models\Admin;
use App\Traits\WebResponseTrait;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AccountService
{
    use WebResponseTrait;

    public function index($request)
    {
        $builder = Admin::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::account.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        $roles = Role::get()->pluck('name', 'name');
        return view(
            'admin::account.create',
            compact('roles'),
        );
    }

    public function store($request)
    {
        $data = request()->all();
        $data['password'] = Hash::make($request->password);
        $account = Admin::create($data);
        $roles = $request->input('roles') ? $request->input('roles') : [];
        $account->assignRole($roles);
        return $this->returnSuccessWithRoute('admin.tai-khoan.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        $data = Admin::find($id);
        $roles = Role::get()->pluck('name', 'name');
        return view(
            'admin::account.edit',
            [
                'data' => $data,
                'roles' => $roles,
            ],
        );
    }

    public function update($request, $id)
    {
        $data = $request->only(
            'name',
            'email',
        );
        if($request->password){
            $data['password'] = Hash::make($request->password);
        }

        try {
            $account = Admin::find($id);
            if(!$account) return $this->returnIfDataNotFound();

            $account->update($data);
            $roles = $request->input('roles') ? $request->input('roles') : [];
            $account->syncRoles($roles);

            return $this->returnSuccessWithRoute('admin.tai-khoan.index', __('messages.data_update_success'));
        } catch (\Exception $ex) {
            Log::error($ex);
            $this->returnFailedWithRoute('admin.tai-khoan.index', __('messages.data_update_failed'));
        }

    }

    public function formSettingAccount()
    {
        $account = Auth::user();
        return view('admin::account.setting_account', ['account' => $account]);
    }

    public function settingAccount($request)
    {
        $data = $request->only(
            'name',
            'avatar',
            'address',
            'phone',
            'dob',
        );
        // dd($data); die;
        try {
            Auth::user()->update($data);
            return $this->returnSuccessWithRoute('admin.submit.setting.account', __('messages.data_update_success'));
        }catch (\Exception $ex) {
            Log::error($ex);
            return $this->returnFailedWithRoute('admin.submit.setting.account', __('messages.data_update_failed'));
        }
    }

    public function formChangePassword()
    {
        $account = Auth::user();
        return view('admin::account.change_password', ['account' => $account]);
    }

    public function changePassword()
    {

    }

    protected function returnIfDataNotFound() {
        return $this->returnFailedWithRoute('admin.tai-khoan.index', __('messages.data_not_found'));
    }
}
