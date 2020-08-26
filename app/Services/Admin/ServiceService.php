<?php

namespace App\Services\Admin;

use App\Models\BranchSalon;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Str;
use App\Traits\WebResponseTrait;
use Illuminate\Support\Facades\Gate;

class ServiceService
{
    use WebResponseTrait;

    public function index($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $builder = Service::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%' . $request->name . '%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->get();

        // $data->appends(request()->query());

        foreach ($data as $item) {
            $item->images = json_decode($item->images);
        }
        return view(
            'admin::service.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        return view('admin::service.create');
    }
    public function store($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = $request->all();
        $data['estimate'] = $data['estimate'] . ':00';
        $data['slugs'] = Str::slug($data['name'], '-');
        $data['status'] = STATUS_POST_DRAFT;
        $array = [];
        foreach ($data['arrayImages'] as $image) {
            $img = $image->store('service', 'public');
            array_push($array, $img);
        }
        $data['images'] = json_encode($array);
        unset($data['arrayImages']);
        Service::create($data);

        return $this->returnSuccessWithRoute('admin.dich-vu.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Service::find($id);
        if (empty($data)) {
            return $this->returnFailedWithRoute('admin.dich-vu.index', __('messages.data_update_failed'));
        }
        $data['images'] = json_decode($data['images']);
        return view(
            'admin::service.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = request()->all();
        $service = Service::find($id);
        $data['slugs'] = Str::slug($data['name'], '-');
        $array = [];
        if (empty($service)) {
            return $this->returnFailedWithRoute('admin.dich-vu.index', __('messages.data_update_failed'));
        } else {
            if (empty($request->file())) {
                $data['images'] = $service->images;
            } else {
                foreach ($data['arrayImages'] as $image) {
                    $img = $image->store('service', 'public');
                    array_push($array, $img);
                    $data['images'] = json_encode($array);
                    unset($data['arrayImages']);
                }
            }
            $service->update($data);
            return $this->returnSuccessWithRoute('admin.dich-vu.index', __('messages.data_update_success'));
        }
    }

    public function delete($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Service::find($id);
        if (empty($data)) {
            return $this->returnFailedWithRoute('admin.dich-vu.index', __('messages.data_update_failed'));
        }
        Service::destroy($id);
        return $this->returnSuccessWithRoute('admin.dich-vu.index', __('messages.data_delete_success'));
    }

    public function listSoftDelete()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Service::onlyTrashed()->get();
        return view(
            'admin::service.listSoftDelete',
            ['data' => $data]
        );
    }
    public function restore($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        Service::withTrashed()->where('id', $id)->restore();
        return $this->returnSuccessWithRoute('admin.dich-vu.listSoftDelete', __('messages.data_create_success'));
    }
}
