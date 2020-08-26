<?php
namespace App\Services\Admin;

use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Mail\MailCreateCustomer;
use App\Models\Order;
use App\Models\OrderService;
use Carbon\Carbon;
use DB;
use Hash;
use Illuminate\Support\Str;

class StatisticService
{
    public function customer()
    {

        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $totalCustomer = Customer::count();
        $countCustomer = Customer::all()->count();
        $totalCustomerMonth = DB::table('customers')
                            ->whereMonth('created_at',  $now)
                            ->count();
        $users = DB::select('SELECT month(created_at) month_date, COUNT(DISTINCT id) month_customer FROM customers WHERE year(created_at) = 2020 GROUP BY month(created_at)');
        // dd($totalCustomerMonth);
        return view(
            'admin::statistic.index',
            [
                'users'=> $users,
                'now' => $now,
                'totalCustomer' => $totalCustomer,
                'totalCustomerMonth' => $totalCustomerMonth,
            ]
        );
    }

    public function revenue()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $totalOrders = Order::count();
        $totalOrderMonth = DB::table('orders')
                            ->whereMonth('created_at',  $now)
                            ->count();
        $orders = DB::select('SELECT month(created_at) month_date, COUNT(DISTINCT id) month_order, sum(price) total_price FROM orders WHERE year(created_at) = 2020 GROUP BY month(created_at)');
        return view(
            'admin::statistic.revenue',
            [
                'orders'=> $orders,
                'now' => $now,
                'totalOrders' => $totalOrders,
                'totalOrderMonth' => $totalOrderMonth,
            ]
        );
    }

    public function service()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $totalOrderService = OrderService::count();
        $totalOrderServiceMonth = DB::table('order_service')
                            ->whereMonth('created_at',  $now)
                            ->count();
        $orderServices = DB::select('SELECT month(created_at) month_date, COUNT(DISTINCT id) month_order_service FROM order_service WHERE year(created_at) = 2020 GROUP BY month(created_at)');
        return view(
            'admin::statistic.service',
            [
                'orderServices'=> $orderServices,
                'now' => $now,
                'totalCustomer' => $totalOrderService,
                'totalCustomerMonth' => $totalOrderServiceMonth,
            ]
        );
    }


}
