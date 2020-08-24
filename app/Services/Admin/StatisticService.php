<?php
namespace App\Services\Admin;

use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Mail\MailCreateCustomer;
use App\Models\Order;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;

class StatisticService
{
    public function customer()
    {
        $countCustomer = Customer::all()->count();
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $countCustomerMonth = Customer::
            whereMonth('created_at', $now->month)
            ->whereYear('created_at', $now->year)
            ->count();
        // $familiarCustomers = Order:: ;

        return view(
            'admin::statistic.index',
            [
                'countCustomer' => $countCustomer,
                'countCustomerMonth' => $countCustomerMonth,
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
