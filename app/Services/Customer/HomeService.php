<?php
namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Review;
use App\Models\Service;

class HomeService
{
    public function index()
    {
        $servicesT = Service::all()->sortByDesc('price')->take(2);
        $servicesB = Service::all()->sortBy('price')->take(4);
        $salons = BranchSalon::all()->take(4);
        $reviews = Review::where('rating_stars', 5)->get()->take(3);
        dd($salons);
        return view(
            'customer::home.index',
            [
                'servicesT' => $servicesT,
                'servicesB' => $servicesB,
                'salons' => $salons,
                'reviews' => $reviews,
            ]
        );
    }


}
