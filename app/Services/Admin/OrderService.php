<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Post;

class OrderService
{
    use WebResponseTrait;

    public function confirmOrder($request)
    {
        $builder = Post::where(function ($query) use ($request) {
            if ($request->name) $query->where('title', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('id', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());
        return view(
            'admin::order.confirm_order',
            ['data' => $data]
        );
    }
}
