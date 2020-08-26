<?php
namespace App\Services\Admin;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderService;
use App\Models\Service;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Gate;

class DashboardService
{
    public function index()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $totalCustomer = Customer::count();
        $totalOrder = Order::count();
        $totalService = Service::count();
        $totalRevenue = Order::sum('price');
        $orders = DB::select('SELECT month(created_at) month_date, COUNT(DISTINCT id) month_order, sum(price) total_price FROM orders WHERE year(created_at) = ' .$now->year. ' GROUP BY month(created_at)');

        return view(
            'admin::dashboard.index',
            [
                'now' => $now,
                'totalCustomer' => $totalCustomer,
                'totalOrder' => $totalOrder,
                'totalService' => $totalService,
                'totalRevenue' => $totalRevenue,
                'orders' =>$orders,
            ]
        );
    }

}
