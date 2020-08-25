<?php
namespace App\Services\Admin;

use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Mail\MailCreateCustomer;
use App\Models\Order;
use Carbon\Carbon;
use DB;
use Hash;
use Illuminate\Support\Str;

class StatisticService
{
    public function customer()
    {
        $countCustomer = Customer::all()->count();
        $now = Carbon::now('Asia/Ho_Chi_Minh');

        $totalCustomer = Customer::count();


        $totalCustomerMonth = array();
        for ($i = 1; $i < 13; $i ++){
            $total = Customer::
                        whereMonth('updated_at', $i)
                        ->whereYear('updated_at', $now->year)
                        ->count();
            array_push($totalCustomerMonth, $total);
        }
        return view(
            'admin::statistic.index',
            [
                'now'=> $now,
                'totalCustomer' => $totalCustomer,
                'totalCustomerMonth' => $totalCustomerMonth,
            ]
        );
    }

    public function revenue(){
        return view(
            'admin::statistic.revenue',
        );
    }
    public function service(){
        return view(
            'admin::statistic.service',
        );
    }


}
