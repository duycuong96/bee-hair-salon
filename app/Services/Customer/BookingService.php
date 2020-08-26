<?php
namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Order;
use App\Models\OrderService;
use App\Models\Service;
use App\Models\TimeSchedule;
use App\Traits\WebResponseTrait;
use Carbon\Carbon;

class BookingService
{
    use WebResponseTrait;
    public function booking()
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $tomorrow = Carbon::tomorrow('Asia/Ho_Chi_Minh');
        $dataSalon = BranchSalon::all();
        $dataService = Service::all();
        // dd($now->toTimeString());
        $dataTime = TimeSchedule::where('time_start', '>=', $now->toTimeString())->get();

        $dataTimeTomorrow = TimeSchedule::all();

        // dd($dataTime);

        // dd($now->day);
        $attributes = [
            'radio' => 1,
        ];
        return view(
            'customer::booking.index',
            [
                'dataSalon' => $dataSalon,
                'dataService' => $dataService,
                'dataTime' => $dataTime,
                'now' => $now,
                'tomorrow' => $tomorrow,
                'dataTimeTomorrow' => $dataTimeTomorrow,
            ],
            $attributes,
        );
    }

    public function bookingSchedule($request)
    {
        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $tomorrow = Carbon::tomorrow('Asia/Ho_Chi_Minh');

        // $data = $request->all();
        // dd($data);
        $dataOrder = $request->only(
            'salon_id',
        );
        $dataOrder['customer_id'] = auth()->user()->id;
        $time_schedule_id = $request->time_schedule_id;
        $time_schedule = TimeSchedule::find($time_schedule_id);
        $service_id = $request->service_id;
        $service = Service::find($service_id);
        // dd($time_schedule->time_start);
        if ($request->day == 1) {
            $dataOrder['time_start'] = $now->toDateString() . " " . $time_schedule->time_start;
            $dataOrder['time_end'] =  $now->toDateString() . " " . $time_schedule->time_end;
        } elseif ($request->day == 2) {
            $dataOrder['time_start'] =  $tomorrow->toDateString() . " " . $time_schedule->time_start;
            $dataOrder['time_end'] =  $tomorrow->toDateString() . " " . $time_schedule->time_end;
        }
        $dataOrder['price'] = $service->price;
        $dataOrder['status'] = 0;

        $lastIdOrder = Order::create($dataOrder)->id;

        $dataService = $request->only(
            'service_id',
        );
        $dataService['order_id'] = $lastIdOrder;
        $orderService = OrderService::create($dataService);
        return $this->returnSuccessWithRoute('customer.booking', __('messages.data_create_success'));
    }


}
