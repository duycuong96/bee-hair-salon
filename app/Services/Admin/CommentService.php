<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Comment;

class CommentService
{
    use WebResponseTrait;

    public function index($request)
    {
        $builder = Comment::where(function ($query) use ($request) {
            if ($request->name) $query->where('title', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('id', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::comment.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        return view('admin::comment.create');
    }

    public function store($request)
    {
        $data = request()->all();
        $comment = Comment::create($data);
        return $this->returnSuccessWithRoute('admin.binh-luan.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
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
        $comment = Comment::find($id);
        if(empty($comment)) {
            return $this->returnFailedWithRoute('admin.binh-luan.index', __('messages.data_update_failed'));
        } else {
            $comment->update($request->all());
            return $this->returnSuccessWithRoute('admin.binh-luan.index', __('messages.data_update_success'));
        }
    }
}
