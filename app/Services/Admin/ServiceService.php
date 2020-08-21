<?php

namespace App\Services\Admin;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Str;
use App\Traits\WebResponseTrait;

class ServiceService
{
    use WebResponseTrait;
    public function index($request)
    {
        $builder = Service::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%' . $request->name . '%');
        });

        $data = $builder->orderBy('created_at', 'desc')
            ->paginate(10);

        $data->appends(request()->query());
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
        return view('admin::service.create');
    }
    public function store($request)
    {
        $data = $request->all();
        $data['estimate'] = $data['estimate'] . ':00';
        $data['slugs'] = Str::slug($data['name'], '-');
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
        $data = Service::find($id);
        if (empty($data)) {
            return $this->returnFailedWithRoute('admin.dich-vu.index', __('messages.data_update_failed'));
        }
        Service::destroy($id);
        return $this->returnSuccessWithRoute('admin.dich-vu.index', __('messages.data_delete_success'));
    }

    public function listSoftDelete(){
        $data = Service::onlyTrashed()->get();
        return view(
            'admin::service.listSoftDelete',
            ['data' => $data]
        );
    }
    public function restore($id)
    {
        Service::withTrashed()->where('id', $id)->restore();
        return $this->returnSuccessWithRoute('admin.dich-vu.listSoftDelete', __('messages.data_create_success'));
    }
}
