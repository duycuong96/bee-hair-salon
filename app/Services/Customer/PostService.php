<?php
namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\OrderService;
use App\Models\Service;
use App\Models\TimeSchedule;
use App\Traits\WebResponseTrait;
use App\Models\Post;
use Auth;

class PostService
{
    use WebResponseTrait;

    public function listPost($request)
    {
        $builder = Post::where(function ($query) use ($request) {
            if ($request->title) $query->where('title', 'like', '%'.$request->title.'%');
            if ($request->category_id) $query->where('category_id', 'like', '%'.$request->category_id.'%');
        });

        $dataPosts = $builder->where('status', STATUS_POST_PUBLIC)
                        ->orderBy('id', 'desc')
                        ->paginate(5);

        $dataPosts->appends(request()->query());

        $dataCategories = Category::all();
        $dataPostHots = Post::all()->sortByDesc('created_at')->take(6);

        return view(
            'customer::post.index',
            [
                'dataPosts' => $dataPosts,
                'dataCategories' => $dataCategories,
                'dataPostHots' => $dataPostHots,
            ],
        );
    }

    public function detailPost($slug)
    {
        
        $data = Post::where('slug', $slug)->where('status', STATUS_POST_PUBLIC )->first();
        if (!$data) {
            abort(404);
        }
        $dataComments = Comment::where('post_id', $data->id)->where('status', STATUS_POST_PUBLIC)->get();
        return view(
            'customer::post.show',
            [
                'data' => $data,
                'dataComments' => $dataComments,
            ]
        );
    }

    public function sendComment($request, $slug)
    {
        $data = $request->only(
            'content',
        );
        $post = Post::where('slug', $slug)->first();
        $data['status'] = STATUS_COMMENT_APPROVE;
        $data['post_id'] = $post->id;
        // $data['customer_id'] = auth()->user()->id;
        Comment::create($data);
        return redirect()->route('customer.post.detail', $post->slug)->with('status', 'Bình luận thành công');
    }


}
