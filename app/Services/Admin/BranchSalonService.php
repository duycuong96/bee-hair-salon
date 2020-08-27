<?php
namespace App\Services\Admin;

use App\Models\BranchSalon;
use App\Models\Order;
use App\Models\Province;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Str;
use App\Traits\WebResponseTrait;
use Illuminate\Support\Facades\Gate;

class BranchSalonService
{
    use WebResponseTrait;
    public function index($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $builder = BranchSalon::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->get();

        // $data->appends(request()->query());

        return view(
            'admin::branch_salon.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        return view('admin::branch_salon.create');
    }
    public function store($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = request()->except('start','end', '_token');
        $work_time = [
            'start' => $request->start,
            'end' => $request->end,
        ];
        $data['work_time'] = json_encode($work_time);
        $data['image'] = $request->file('image')->store('branch_salon', 'public');

        $branchSalon = BranchSalon::create($data);
        return $this->returnSuccessWithRoute('admin.salon.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = BranchSalon::find($id);
        if (empty($data)) {
            return $this->returnFailedWithRoute('admin.salon.index', __('messages.data_not_found'));
        }
        $data->work_time = json_decode($data->work_time);
        // dd($data->work_time->start);
        return view(
            'admin::branch_salon.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $branchSalon = BranchSalon::find($id);
        if (empty($branchSalon)) {
            return $this->returnFailedWithRoute('admin.salon.index', __('messages.data_update_failed'));
        } else {
            $data = $request->except('start','end', '_token');
            $work_time = [
                'start' => $request->start,
                'end' => $request->end,
            ];
            $data['work_time'] = json_encode($work_time);
            // dd($data);
            if (empty($request->file())) {
                $data['image'] = $branchSalon->image;
            }else {
                $data['image'] = $request->file('image')->store('branch_salon', 'public');
            }
            $branchSalon->update($request->all());
            return $this->returnSuccessWithRoute('admin.salon.index', __('messages.data_update_success'));
        }

    }

    public function delete($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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

    public function salonListReview($id)
    {
        $data = Review::where('salon_id', $id)->get();

        return view(
            'admin::branch_salon.branch_salon_review',
            ['data' => $data]
        );
    }
}
