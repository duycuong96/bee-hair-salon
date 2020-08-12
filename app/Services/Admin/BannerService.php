<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Banner;

class BannerService
{
    use WebResponseTrait;

    public function index($request)
    {
        $builder = Banner::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('id', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::banner.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        return view('admin::banner.create');
    }

    public function store($request)
    {
        $data = request()->all();
        $banner = Banner::create($data);
        return $this->returnSuccessWithRoute('admin.banner.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        $data = Banner::find($id);
        return view(
            'admin::banner.edit',
            [
                'data' => $data,
            ]
        );
    }

    public function update($request, $id)
    {
        $banner = Banner::find($id);
        if(empty($banner)) {
            return $this->returnFailedWithRoute('admin.banner.index', __('messages.data_update_failed'));
        } else {
            $banner->update($request->all());
            return $this->returnSuccessWithRoute('admin.banner.index', __('messages.data_update_success'));
        }
    }
}
