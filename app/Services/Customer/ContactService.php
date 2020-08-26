<?php

namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Contact;
use App\Models\Customer;
use App\Models\Review;
use App\Traits\WebResponseTrait;
use App\Models\Service;
use Auth;

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
        $data['status'] = 1;

        Contact::create($data);
        return redirect()->route('customer.lien-he.index')->with('success', 'Gửi liên hệ thành công');
    }
}
