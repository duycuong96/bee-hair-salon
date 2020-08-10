<?php
namespace App\Services\Admin;

use App\Models\Review;

class ReviewService
{
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
        return view(
            'admin::review.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        $review = Review::find($id);

        if (empty($review)) {
            return redirect()->route('admin.danh-gia.index')->with('error', "Đánh giá không tồn tại");
        } else {
            $review->update($request->input());
            return redirect()->route('admin.danh-gia.index')->with('success', "Cập nhật đánh giá thành công");
        }

    }

}
