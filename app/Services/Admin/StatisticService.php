<?php
namespace App\Services\Admin;

use App\Models\Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use App\Mail\MailCreateCustomer;
use Carbon\Carbon;
use Hash;
use Illuminate\Support\Str;

class StatisticService
{
    public function customer()
    {
        return view(
            'admin::statistic.index',
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
