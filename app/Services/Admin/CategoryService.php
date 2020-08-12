<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Category;

class CategoryService
{
    use WebResponseTrait;

    public function index($request)
    {
        $builder = Category::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('id', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::category.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        return view('admin::category.create');
    }

    public function store($request)
    {
        $data = request()->all();
        $category = Category::create($data);
        return $this->returnSuccessWithRoute('admin.chuyen-muc.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        $data = Category::find($id);
        return view(
            'admin::category.edit',
            [
                'data' => $data,
            ]
        );
    }

    public function update($request, $id)
    {
        $category = Category::find($id);
        if(empty($category)) {
            return $this->returnFailedWithRoute('admin.chuyen-muc.index', __('messages.data_update_failed'));
        } else {
            $category->update($request->all());
            return $this->returnSuccessWithRoute('admin.chuyen-muc.index', __('messages.data_update_success'));
        }
    }
}

