<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Review;

class ReviewService
{
    use WebResponseTrait;
    public function index($request)
    {
        $builder = Review::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::review.index',
            ['data' => $data]
        );
    }

    public function show($id)
    {
        $data = Review::find($id);
        if (empty($data)) {
            return $this->returnSuccessWithRoute('admin.danh-gia.index', __('messages.data_not_found'));
        }
        return view(
            'admin::review.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        $review = Review::find($id);

        if (empty($review)) {
        return $this->returnSuccessWithRoute('admin.danh-gia.index', __('messages.data_update_failed'));
        } else {
            $review->update($request->input());
            return $this->returnSuccessWithRoute('admin.danh-gia.index', __('messages.data_update_success'));
        }

    }

}
