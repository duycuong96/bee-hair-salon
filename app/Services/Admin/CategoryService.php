<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class CategoryService
{
    use WebResponseTrait;

    public function index($request)
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        $builder = Category::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')->get();

        // $data->appends(request()->query());

        return view(
            'admin::category.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        return view('admin::category.create');
    }

    public function store($request)
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        $data = request()->all();
        $data['slug'] = Str::slug($request->name, '-');
        $data['image'] = $request->file('image')->store('category', 'public');
        $category = Category::create($data);
        return $this->returnSuccessWithRoute('admin.chuyen-muc.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        $category = Category::find($id);
        $data = $request->all();
        if(empty($category)) {
            return $this->returnFailedWithRoute('admin.chuyen-muc.index', __('messages.data_update_failed'));
        } else {
            if (empty($request->file())) {
                $data['image'] = $category->image;
            }else {
                $data['image'] = $request->file('image')->store('category', 'public');
            }
            $category->update($data);
            return $this->returnSuccessWithRoute('admin.chuyen-muc.index', __('messages.data_update_success'));
        }
    }

    public function delete($id)
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        Category::where('id', $id)->delete();
        return $this->returnSuccessWithRoute('admin.chuyen-muc.index', __('messages.data_delete_success'));
    }

    public function listSoftDelete()
    {
        if (! Gate::allows('Biên tập viên')) {
            return abort(401);
        }

        $data = Category::onlyTrashed()->get();
        return view(
            'admin::category.list_soft_delete',
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

        Category::withTrashed()->where('id', $id)->restore();
        return $this->returnSuccessWithRoute('admin.chuyen-muc.listSoftDelete', __('messages.data_restore_success'));
    }
}

