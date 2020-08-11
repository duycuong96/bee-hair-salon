<?php
namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Review;
use App\Models\Service;
use App\Traits\WebResponseTrait;

class BranchSalonService
{
    use WebResponseTrait;
    public function show($id)
    {
        $salon = BranchSalon::find($id);
        if (empty($salon)) {
            return $this->returnSuccessWithRoute('customer.home', __('messages.data_not_found'));
        }
        $reviews = Review::where('salon_id', $id)->paginate(5);
        return view(
            'customer::branch_salon.show',
            [
                'salon' => $salon,
                'reviews' => $reviews,
            ]
        );
    }


}
