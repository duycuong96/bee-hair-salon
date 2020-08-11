<?php
namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Review;
use App\Models\Service;

class ServiceService
{
    public function index()
    {
        $services = Service::paginate(6);
        return view(
            'customer::service.index',
            [
                'services' => $services,
            ]
        );
    }


}
