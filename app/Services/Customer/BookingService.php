<?php
namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Order;
use App\Models\OrderService;
use App\Models\Service;
use App\Models\TimeSchedule;
use App\Traits\WebResponseTrait;

class BookingService
{
    use WebResponseTrait;
    public function booking()
    {
        $dataSalon = BranchSalon::all();
        $dataService = Service::all();
        $dataTime = TimeSchedule::all();
        return view(
            'customer::booking.index',
            [
                'dataSalon' => $dataSalon,
                'dataService' => $dataService,
                'dataTime' => $dataTime,
            ]
        );
    }

    public function bookingSchedule($request)
    {
        $dataOrder = $request->only(
            'salon_id',
        );
        $dataOrder['customer_id'] = auth()->user()->id;
        $time_schedule_id = $request->time_schedule_id;
        $time_schedule = TimeSchedule::find($time_schedule_id);
        // dd($time_schedule->time_start);
        $dataOrder['time_start'] = $time_schedule->time_start;
        $dataOrder['time_end'] =  $time_schedule->time_end;
        $lastIdOrder = Order::create($dataOrder)->id;

        $dataService = $request->only(
            'service_id',
        );
        $dataService['order_id'] = $lastIdOrder;
        $orderService = OrderService::create($dataService);
        return $this->returnSuccessWithRoute('customer.booking', __('messages.data_create_success'));
    }


}
