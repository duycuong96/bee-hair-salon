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
use Illuminate\Support\Facades\Gate;

class SalonServiceService
{
    use WebResponseTrait;
    public function index($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $builder = Customer::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%' . $request->name . '%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->get();

        // $data->appends(request()->query());

        return view(
            'admin::customer.index',
            ['data' => $data]
        );
    }


    public function store($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = $request->all();
        $salon = BranchSalon::find($data['salon_id']);
        $service = Service::find($data['service_id']);

        $result = SalonService::where('salon_id', $data['salon_id'])
                        ->where('service_id', $data['service_id'])
                        ->first();

        if ($salon == null || $service == null) {
            // return $this->returnFailedWithRoute('/admin/dich-vu-salon/dang-ky/'. $data['salon_id'], __('messages.data_not_found'));
            return redirect()->route('admin.dich-vu-salon.registerService', $data['salon_id'])->with('error', 'Lỗi dữ liệu');
        }
        if ($result) {
            return redirect()->route('admin.dich-vu-salon.registerService', $data['salon_id'])->with('error', 'Dịch vụ đã được đăng ký');
        }
        SalonService::create($data);
        return redirect()->route('admin.dich-vu-salon.registerService', $data['salon_id'])->with('success', 'Đăng ký dịch vụ thành công');
    }

    public function show($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $customer = Customer::find($id);
        if (empty($customer)) {
            return $this->returnSuccessWithRoute('admin.dashboard', __('messages.data_not_found'));
        } else {
            $customer->update($request->all());
            return $this->returnSuccessWithRoute('admin.dashboard', __('messages.data_update_success'));
        }
    }

    public function registerService($id)
    {
        $salon = BranchSalon::find($id);
        $services = Service::all();
        return view(
            'admin::salon_service.create',
            [
                'salon' => $salon,
                'services' => $services,
            ]
        );
    }

    public function updateSalon($id)
    {
        $data = BranchSalon::find($id);
        return view(
            'admin::salon_service.update_salon',
            ['data' => $data],
        );
    }

    public function putUpdateSalon($request, $id)
    {
        $branchSalon = BranchSalon::find($id);
        if (empty($branchSalon)) {
            return $this->returnFailedWithRoute('admin.tai-khoan.salonListOfMe', __('messages.data_update_failed'));
        } else {
            $branchSalon->update($request->all());
            return $this->returnSuccessWithRoute('admin.tai-khoan.salonListOfMe', __('messages.data_update_success'));
        }
    }
}
