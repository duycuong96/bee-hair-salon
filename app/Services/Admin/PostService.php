<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Post;

class PostService
{
    use WebResponseTrait;

    public function index($request)
    {
        $builder = Post::where(function ($query) use ($request) {
            if ($request->name) $query->where('title', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('id', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::post.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        return view('admin::post.create');
    }

    public function store($request)
    {
        $data = request()->all();
        $post = Post::create($data);
        return $this->returnSuccessWithRoute('admin.bai-viet.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        $data = Post::find($id);
        return view(
            'admin::post.edit',
            [
                'data' => $data,
            ]
        );
    }

    public function update($request, $id)
    {
        $post = Post::find($id);
        if(empty($post)) {
            return $this->returnFailedWithRoute('admin.bai-viet.index', __('messages.data_update_failed'));
        } else {
            $post->update($request->all());
            return $this->returnSuccessWithRoute('admin.bai-viet.index', __('messages.data_update_success'));
        }
    }
}
