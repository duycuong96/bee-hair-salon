<?php
namespace App\Services\Admin;

use App\Models\BranchSalon;
use App\Models\Order;
use App\Models\Province;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Str;
use App\Traits\WebResponseTrait;

class BranchSalonService
{
    use WebResponseTrait;
    public function index($request)
    {
        $builder = BranchSalon::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::branch_salon.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        $provinces = Province::all();
        $districts = array();
        $wards = array();
        return view('admin::branch_salon.create',
            [
                'provinces'=> $provinces,
                'districts' => $districts,
                'wards' => $wards,
            ]);
    }
    public function store($request)
    {
        $data = request()->all();
        $data['image'] = $request->file('image')->store('branch_salon', 'public');

        $customer = BranchSalon::create($data);
        return $this->returnSuccessWithRoute('admin.salon.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        $data = BranchSalon::find($id);
        return view(
            'admin::branch_salon.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        $branchSalon = BranchSalon::find($id);
        if (empty($branchSalon)) {
            return $this->returnFailedWithRoute('admin.salon.index', __('messages.data_update_failed'));
        } else {
            $branchSalon->update($request->all());
            return $this->returnSuccessWithRoute('admin.salon.index', __('messages.data_update_success'));
        }

    }

    public function delete($id)
    {
        $branchSalon =  BranchSalon::find($id);
        if (empty($branchSalon)) {
            return $this->returnFailedWithRoute('admin.salon.index', __('messages.data_delete_failed'));
        } else {
            $branchSalon->delete();
            return $this->returnSuccessWithRoute('admin.salon.index', __('messages.data_delete_success'));
        }
    }
    public function salonListCustomer($id)
    {
        $data = Order::join('customers', 'orders.customer_id', 'customers.id')
                    ->where('orders.salon_id', $id)->get();

        return view(
            'admin::branch_salon.customer_list',
            ['data' => $data]
        );

    }

    public function customerHisstory($id)
    {
        $data = Order::where('customer_id', $id)->get();
        return view(
            'admin::branch_salon.order_history',
            ['data' => $data]
        );
    }
}
