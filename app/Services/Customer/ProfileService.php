<?php

namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Review;
use App\Traits\WebResponseTrait;
use App\Models\Service;
use Auth;
use Hash;

class ProfileService
{
    use WebResponseTrait;
    public function index()
    {
        return view('customer::profile.index',);
    }
    public function create($request)
    {
        $data = $request->all();
        if (!empty($data['customer_id'])) {
            $customer = Customer::find($data['customer_id']);
            if (empty($customer)) {
                return $this->returnSuccessWithRoute('customer.home', __('messages.data_not_found'));
            }
        }
        Contact::create($data);
        return $this->returnSuccessWithRoute('customer.home', __('messages.data_create_success'));
    }

    public function update($request, $id)
    {
        $data = $request->all();
        // dd($data);
        $customer = Customer::find($id);
        if(empty($customer))
        {
            return $this->returnSuccessWithRoute('customer.tai-khoan.index', __('messages.data_not_found'));
        }
        if (isset($data['avatar'])) {
            $data['avatar'] = $data['avatar']->store('customer', 'public');
        }
        // dd(Auth::user()->password);
        if (isset($data['password']) && password_verify($data['password'], Auth::user()->password)) {
            $data['password'] = Hash::make($data['newPassword']);
        }
        $customer->update($data);
        return $this->returnSuccessWithRoute('customer.tai-khoan.index', __('messages.data_create_success'));

    }
}
