<?php

namespace Modules\Customer\Http\Controllers;

use App\Services\Customer\BookingService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookingController extends Controller
{
    protected $bookingService;
    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }

    public function booking()
    {
        return $this->bookingService->booking();
    }

    public function bookingSchedule(Request $request)
    {
        return $this->bookingService->bookingSchedule($request);
    }

}
