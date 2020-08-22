<?php
namespace App\Services\Customer;

use App\Models\BranchSalon;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderService;
use App\Models\Service;
use App\Models\TimeSchedule;
use App\Traits\WebResponseTrait;
use App\Models\Post;

class PostService
{
    use WebResponseTrait;

    public function listPost($request)
    {
        $builder = Post::where(function ($query) use ($request) {
            if ($request->title) $query->where('title', 'like', '%'.$request->title.'%');
            if ($request->category_id) $query->where('category_id', 'like', '%'.$request->category_id.'%');
        });

        $dataPosts = $builder->orderBy('id', 'desc')
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
        return view('customer::post.show');
    }

    // public function categoryPost($id)
    // {
    //     $dataCategories = Category::all();
    //     $dataPosts = Post::where('category_id', $id)
    //                     ->orderBy('id', 'desc')
    //                     ->paginate(10);;
    //     return view(
    //         'customer::post.index',
    //         [
    //             'dataPosts' => $dataPosts,
    //             'dataCategories' => $dataCategories,
    //         ],
    //     );
    // }

}
