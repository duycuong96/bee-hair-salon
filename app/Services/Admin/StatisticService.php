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

        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $users = DB::select('SELECT month(created_at) month_date, COUNT(DISTINCT id) month_customer FROM customers WHERE year(created_at) = 2020 GROUP BY month(created_at)');
        // dd($users);
        return view(
            'admin::statistic.index',
            [
                'users'=> $users,
                'now' => $now,
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
