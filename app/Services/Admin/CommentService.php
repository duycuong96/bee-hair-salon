<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Comment;
use Illuminate\Support\Facades\Gate;

class CommentService
{
    use WebResponseTrait;

    public function index($request)
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        $builder = Comment::where(function ($query) use ($request) {
            if ($request->name) $query->where('title', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->get();

        // $data->appends(request()->query());
        return view(
            'admin::comment.index',
            ['data' => $data]
        );
    }

    public function show($id)
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        $data = Comment::find($id);
        return view(
            'admin::comment.edit',
            [
                'data' => $data,
            ]
        );
    }

    public function update($request, $id)
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        $comment = Comment::find($id);
        $data = $request->only(
            'status',
        );
        if(empty($comment)) {
            return $this->returnFailedWithRoute('admin.binh-luan.index', __('messages.data_update_failed'));
        } else {
            $comment->update($data);
            return $this->returnSuccessWithRoute('admin.binh-luan.index', __('messages.data_update_success'));
        }
    }

    public function delete($id)
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        Comment::where('id', $id)->delete();
        return $this->returnSuccessWithRoute('admin.binh-luan.index', __('messages.data_delete_success'));
    }

    public function listSoftDelete()
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        $data = Comment::onlyTrashed()->get();
        return view(
            'admin::comment.list_soft_delete',
            [
                'data' => $data
            ]
        );
    }

    public function restore($id)
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        Comment::withTrashed()->where('id', $id)->restore();
        return $this->returnSuccessWithRoute('admin.binh-luan.listSoftDelete', __('messages.data_restore_success'));
    }
}
