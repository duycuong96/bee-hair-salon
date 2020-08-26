<?php
namespace App\Services\Admin;

use App\Mail\MailFinishOrder;
use App\Models\BranchSalon;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderService as ModelsOrderService;
use App\Traits\WebResponseTrait;
use App\Models\Post;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Mail;

class OrderService
{
    use WebResponseTrait;

    public function confirmOrder()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Order::where('status', STATUS_ACCOUNT_CUSTOMER_REGISTER)->get();
        return view(
            'admin::order.index',
            ['data' => $data]
        );
    }
    public function history()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Order::where('status', STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE)->get();
        return view(
            'admin::order.index',
            ['data' => $data]
        );
    }

    public function index()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Order::all();
        return view(
            'admin::order.index',
            ['data' => $data]
        );
    }

    public function store($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $salon = BranchSalon::find($order->salon_id);
        $listServiceOrders = ModelsOrderService::where('order_id', $order->id)->get();
        $services = Service::all();
        $now = Carbon::now('Asia/Ho_Chi_Minh');

        return view(
            'admin::order.show',
            [
                'order' => $order,
                'customer' => $customer,
                'salon' => $salon,
                'listServiceOrders' => $listServiceOrders,
                'services' => $services,
                'now' => $now,
            ]
        );
    }
    public function delete($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        ModelsOrderService::where('id', $id)->delete();
        // return $this->returnSuccessWithRoute('admin.don-hang.show', __('messages.data_delete_success'));
        return redirect()->back()->with('delete', "Xóa dịch vụ khỏi đơn hàng thành công");
    }

    public function listSoftDelete($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = ModelsOrderService::where('order_id', $id)->onlyTrashed()->get();
        return view('admin::order.listSoftDelete', ['data' => $data]);
    }
    public function restore($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        ModelsOrderService::withTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('success', "Khôi phục dịch vụ khỏi đơn hàng thành công");
        // return $this->returnSuccessWithRoute('admin.don-hang.listSoftDelete', __('messages.data_delete_success'));
    }

    public function updateStatus($request)
    {
        $data = $request->all();
        $order = Order::find($data['order_id']);
        if ($data['status'] == 3 ) {
            $listServiceOrders = ModelsOrderService::where('order_id', $data['order_id'])->get();
            Mail::to($order->customer->email)->send(new MailFinishOrder($order, $listServiceOrders));
        }
        $order->update(['status' => $data['status']]);


        return response()->json([
            'status' => 'success',
            'message' => 'Cập nhật trạng thái đơn hàng thành công',
        ]);
    }
}
