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
use Illuminate\Support\Facades\Gate;

class StatisticService
{
    public function customer()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $totalOrders = Order::count();
        $totalOrderMonth = DB::table('orders')
                            ->whereMonth('created_at',  $now)
                            ->count();
        $orders = DB::select('SELECT month(created_at) month_date, COUNT(DISTINCT id) month_order, sum(price) total_price FROM orders WHERE year(created_at) = ' .$now->year. ' GROUP BY month(created_at)');
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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $totalOrderService = OrderService::count();
        $totalOrderServiceMonth = DB::table('order_service')
                            ->whereMonth('created_at',  $now)
                            ->count();
        $orderServices = DB::select('SELECT month(created_at) month_date, COUNT(DISTINCT id) month_order_service FROM order_service WHERE year(created_at) = ' .$now->year. ' GROUP BY month(created_at)');
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
    public function order()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $totalOrder = Order::count();
        $totalOrderMonth = DB::table('orders')
                            ->whereMonth('created_at',  $now)
                            ->whereYear('created_at',  $now)
                            ->count();

        $orders = DB::select('SELECT month(created_at) month_date, COUNT(DISTINCT id) month_order FROM orders WHERE year(created_at) = ' .$now->year. ' GROUP BY month(created_at)');

        return view(
            'admin::statistic.order',
            [
                'totalOrder'=> $totalOrder,
                'now' => $now,
                'totalOrderMonth' => $totalOrderMonth,
                'orders' => $orders,
            ]
        );
    }

    public function revenueSalon($id)
    {
        if (! Gate::allows('Quản lý chi nhánh salon')) {
            return abort(401);
        }
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $totalOrders = Order::where('salon_id', $id)->count();
        $totalOrderMonth = DB::table('orders')
                            ->where('salon_id', $id)
                            ->whereMonth('created_at',  $now)
                            ->count();
        $query = 'SELECT month(created_at) month_date, COUNT(DISTINCT id) month_order, sum(price) total_price FROM orders WHERE year(created_at) = ' .$now->year. ' AND salon_id =' .$id. ' GROUP BY month(created_at)';

        $orders = DB::select($query);
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


}
