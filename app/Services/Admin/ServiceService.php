<?php
namespace App\Services\Admin;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Str;

class ServiceService
{
    public function index($request)
    {
        $builder = Service::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());
        foreach ($data as $item) {
            $item->images= json_decode($item->images);
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
        $data = request()->all();
        $array = [];
        foreach ($data['arrayImages'] as $image) {
            $img = $image->store('service', 'public');
            array_push($array, $img);
        }
        $data['images'] = json_encode($array);
        unset($data['arrayImages']);
        $customer = Service::create($data);

        return redirect()->route('admin.dich-vu.index')->with('success', "Thêm dịch vụ thành công");
    }

    public function show($id)
    {
        $data = Service::find($id);
        if (empty($data)) {
            return redirect()->route('admin.dich-vu.index')->with('error',"Dịch vụ không tồn tại");
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
        $array = [];
        if (empty($service)) {
            return redirect()->route('admin.dich-vu.index')->with('error', "dịch vụ không tồn tại");
        } else {
            if (empty($request->file())) {
                $data['images'] = $service->images;
            }
            else{
                foreach ($data['arrayImages'] as $image) {
                    $img = $image->store('service', 'public');
                    array_push($array, $img);
                    $data['images'] = json_encode($array);
                    unset($data['arrayImages']);
                }
            }
            $service->update($data);
            return redirect()->route('admin.dich-vu.show', $id)->with('success', "Sửa dịch vụ thành công");
        }

    }

    public function delete($id)
    {
        Service::destroy($id);
        return redirect()->route('admin.dich-vu.index')->with('success', 'Xóa dịch vụ thành công');
    }
}
