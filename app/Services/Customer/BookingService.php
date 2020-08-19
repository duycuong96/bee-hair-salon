<?php
namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Order;
use App\Models\OrderService;
use App\Models\Service;
use App\Traits\WebResponseTrait;

class BookingService
{
    use WebResponseTrait;
    public function booking()
    {
        $dataSalon = BranchSalon::all();
        $dataService = Service::all();
        return view(
            'customer::booking.index',
            [
                'dataSalon' => $dataSalon,
                'dataService' => $dataService,
            ]
        );
    }

    public function bookingSchedule($request)
    {
        $dataOrder = $request->only(
            'salon_id',
        );

        // dd($data);
        $lastIdOrder = Order::create($dataOrder)->id;
        // $lastInsertId = Order::latest()->get();

        $dataService = $request->only(
            'service_id',
        );
        $dataService['order_id'] = $lastIdOrder;
        $orderService = OrderService::create($dataService);
        return $this->returnSuccessWithRoute('customer.booking', __('messages.data_create_success'));
    }


}
