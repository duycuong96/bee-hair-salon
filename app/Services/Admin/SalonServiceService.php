<?php
namespace App\Services\Admin;

use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Mail\MailCreateCustomer;
use App\Models\BranchSalon;
use App\Models\SalonService;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Traits\WebResponseTrait;

class SalonServiceService
{
    use WebResponseTrait;
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

    public function create($salon_id, $service_id)
    {
        $salons = BranchSalon::all();
        $services = Service::all();
        return view(
            'admin::salon_service.create',
            [
                'salons' => $salons,
                'services' => $services,
                'salon_id' => $salon_id,
                'service_id' => $service_id,
            ]);
    }

    public function store($request)
    {
        $data =$request->all();
        $salon = BranchSalon::find($data['salon_id']);
        $service = Service::find($data['service_id']);
        if($salon == null || $service == null){
            return $this->returnSuccessWithRoute('admin.dashboard', __('messages.data_not_found'));
        }
        SalonService::create($data);
        return $this->returnSuccessWithRoute('admin.dashboard', __('messages.data_create_success'));
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
