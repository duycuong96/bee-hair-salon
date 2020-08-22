<?php

namespace App\Services\Admin;

use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Mail\MailCreateCustomer;
use App\Models\AdminSalon;
use App\Models\BranchSalon;
use App\Models\SalonService;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Traits\WebResponseTrait;
use Auth;

class SalonServiceService
{
    use WebResponseTrait;
    public function index($request)
    {
        $builder = Customer::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%' . $request->name . '%');
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
        $salons = AdminSalon::
            join(
                    'branch_salons',
                    'admin_salons.salon_id',
                    '=',
                    'branch_salons.id'
                )
            ->where('admin_salons.salon_id', Auth::user()->id)
            ->get();
        $services = Service::all();
        return view(
            'admin::salon_service.create',
            [
                'salons' => $salons,
                'services' => $services,
            ]
        );
    }

    public function store($request)
    {
        $data = $request->all();
        $salon = BranchSalon::find($data['salon_id']);
        $service = Service::find($data['service_id']);

        $result = SalonService::where('salon_id', $data['salon_id'])
                        ->where('service_id', $data['service_id'])
                        ->first();

        if ($salon == null || $service == null) {
            return $this->returnFailedWithRoute('admin.dich-vu-salon.create', __('messages.data_not_found'));
        }
        if ($result) {
            return $this->returnFailedWithRoute('admin.dich-vu-salon.create', __('messages.data_exist_failed'));
        }
        SalonService::create($data);
        return $this->returnSuccessWithRoute('admin.dich-vu-salon.create', __('messages.data_create_success'));
    }

    public function show($id)
    {
        $data = Customer::find($id);
        if (empty($data)) {
            return $this->returnFailedWithRoute('admin.khach-hang.index', __('messages.data_not_found'));
        }
        return view(
            'admin::customer.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        $customer = Customer::find($id);
        if (empty($customer)) {
            return $this->returnSuccessWithRoute('admin.dashboard', __('messages.data_not_found'));
        } else {
            $customer->update($request->all());
            return $this->returnSuccessWithRoute('admin.dashboard', __('messages.data_update_success'));
        }
    }
}
