<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\Banner;
use Illuminate\Support\Facades\Gate;

class BannerService
{
    use WebResponseTrait;

    public function index($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $builder = Banner::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('id', 'desc')
                        ->get();

        // $data->appends(request()->query());

        return view(
            'admin::banner.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        return view('admin::banner.create');
    }

    public function store($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = request()->all();
        // dd($request->hasFile('image'));
        if ($request->hasFile('image')  == false) {
            return redirect()->route('admin.banner.create')->with('error', 'Bạn phải thêm ảnh')->withInput();
        }
        $data['image'] = $request->file('image')->store('banner', 'public');
        $data['active'] = STATUS_ACCOUNT_CUSTOMER_NOT_ACTIVE;

        Banner::create($data);
        return $this->returnSuccessWithRoute('admin.banner.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

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
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        Banner::where('id', $id)->delete();
        return $this->returnSuccessWithRoute('admin.banner.index', __('messages.data_delete_success'));
    }
    public function listSoftDelete(){

        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Banner::onlyTrashed()->get();
        return view(
            'admin::banner.listSoftDelete',
            ['data' => $data]
        );
    }
    public function restore($id)
    {

        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        Banner::withTrashed()->where('id', $id)->restore();
        return $this->returnSuccessWithRoute('admin.banner.listSoftDelete', __('messages.data_create_success'));
    }
}
