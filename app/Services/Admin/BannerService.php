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
        $data['image'] = $request->file('image')->store('banner', 'public');
        $data['active'] = STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE;

        Banner::create($data);
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
        $data=$request->all();
        $banner = Banner::find($id);
        if(empty($banner)) {
            return $this->returnFailedWithRoute('admin.banner.index', __('messages.data_update_failed'));
        } else {
            if (empty($request->file())) {
                $data['image'] = $banner->image;
            }else {
                $data['image'] = $request->file('image')->store('banner', 'public');
            }
            $banner->update($data);
            return $this->returnSuccessWithRoute('admin.banner.index', __('messages.data_update_success'));
        }
    }
    public function delete($id)
    {
        Banner::where('id', $id)->delete();
        return $this->returnSuccessWithRoute('admin.banner.index', __('messages.data_delete_success'));
    }
    public function listSoftDelete(){
        $data = Banner::onlyTrashed()->get();
        return view(
            'admin::banner.listSoftDelete',
            ['data' => $data]
        );
    }
    public function restore($id)
    {
        Banner::withTrashed()->where('id', $id)->restore();
        return $this->returnSuccessWithRoute('admin.banner.listSoftDelete', __('messages.data_create_success'));
    }
}
