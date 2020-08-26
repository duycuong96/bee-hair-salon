<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Review;
use Illuminate\Support\Facades\Gate;

class ReviewService
{
    use WebResponseTrait;

    public function index($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $builder = Review::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->get();

        // $data->appends(request()->query());

        return view(
            'admin::review.index',
            ['data' => $data]
        );
    }

    public function show($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $review = Review::find($id);

        if (empty($review)) {
        return $this->returnSuccessWithRoute('admin.danh-gia.index', __('messages.data_update_failed'));
        } else {
            $review->update($request->input());
            return $this->returnSuccessWithRoute('admin.danh-gia.index', __('messages.data_update_success'));
        }

    }

    public function delete($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        Review::where('id', $id)->delete();
        return $this->returnSuccessWithRoute('admin.danh-gia.index', __('messages.data_delete_success'));
    }

    public function listSoftDelete()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Review::onlyTrashed()->get();
        return view(
            'admin::review.listSoftDelete',
            ['data' => $data]
        );
    }
    public function restore($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        Review::withTrashed()->where('id', $id)->restore();
        return $this->returnSuccessWithRoute('admin.danh-gia.listSoftDelete', __('messages.data_create_success'));
    }

}
