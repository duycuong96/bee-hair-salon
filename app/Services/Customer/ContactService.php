<?php

namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Review;
use App\Traits\WebResponseTrait;
use App\Models\Service;

class ContactService
{
    use WebResponseTrait;
    public function index()
    {
        return view('customer::contact.index',);
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
}
