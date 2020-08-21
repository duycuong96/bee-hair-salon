<?php
namespace App\Services\Admin;

use App\Models\BranchSalon;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderService as ModelsOrderService;
use App\Traits\WebResponseTrait;
use App\Models\Post;
use App\Models\Service;

class OrderService
{
    use WebResponseTrait;

    public function confirmOrder($request)
    {
        $builder = Post::where(function ($query) use ($request) {
            if ($request->name) $query->where('title', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('id', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());
        return view(
            'admin::order.confirm_order',
            ['data' => $data]
        );
    }

    public function index()
    {
        $data = Order::all();
        return view(
            'admin::order.index',
            ['data' => $data]
        );
    }

    public function store($request)
    {
        $data = $request->all();
        $data['price'] = Service::find($data['service_id'])->sale_price;
        $service = ModelsOrderService::where('order_id', $data['order_id'])->where('service_id', $data['service_id'])->first();
        if (isset($service)) {
            return redirect()->back()->with('error', 'Dịch vụ này đã có trong đơn hàng');
        }
        ModelsOrderService::create($data);
        return redirect()->back()->with('success', 'Đã thêm dịch vụ thành công');
    }

    public function show($id)
    {
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $salon = BranchSalon::find($order->salon_id);
        $listServiceOrders = ModelsOrderService::where('order_id', $order->id)->get();
        $services = Service::all();

        return view(
            'admin::order.show',
            [
                'order' => $order,
                'customer' => $customer,
                'salon' => $salon,
                'listServiceOrders' => $listServiceOrders,
                'services' => $services,
            ]
        );
    }
    public function delete($id)
    {
        ModelsOrderService::where('id', $id)->delete();
        // return $this->returnSuccessWithRoute('admin.don-hang.show', __('messages.data_delete_success'));
        return redirect()->back()->with('delete', "Xóa dịch vụ khỏi đơn hàng thành công");
    }

    public function listSoftDelete($id)
    {
        $data = ModelsOrderService::where('order_id', $id)->onlyTrashed()->get();
        return view('admin::order.listSoftDelete', ['data' => $data]);
    }
    public function restore($id)
    {
        ModelsOrderService::withTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('success', "Khôi phục dịch vụ khỏi đơn hàng thành công");
        // return $this->returnSuccessWithRoute('admin.don-hang.listSoftDelete', __('messages.data_delete_success'));
    }
}
