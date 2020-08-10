<?php
namespace App\Services\Admin;

use App\Models\BranchSalon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Str;
use App\Traits\WebResponseTrait;

class BranchSalonService
{
    use WebResponseTrait;
    public function index($request)
    {
        $builder = BranchSalon::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->paginate(10);

        $data->appends(request()->query());

        return view(
            'admin::branch_salon.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        return view('admin::branch_salon.create');
    }
    public function store($request)
    {
        $data = request()->all();
        $data['thumb_img'] = $request->file('thumb_img')->store('branch_salon', 'public');

        $customer = BranchSalon::create($data);
        return $this->returnSuccessWithRoute('admin.salon.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        $data = BranchSalon::find($id);
        return view(
            'admin::branch_salon.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        $branchSalon = BranchSalon::find($id);
        dd($branchSalon);
        if (empty($branchSalon)) {
            return $this->returnFailedWithRoute('admin.salon.index', __('messages.data_update_failed'));
        } else {
            $branchSalon->update($request->all());
            return $this->returnSuccessWithRoute('admin.salon.index', __('messages.data_update_success'));
        }

    }

    public function delete($id)
    {
        $branchSalon =  BranchSalon::find($id);
        if (empty($branchSalon)) {
            return $this->returnFailedWithRoute('admin.salon.index', __('messages.data_delete_failed'));
        } else {
            $branchSalon->delete();
            return $this->returnSuccessWithRoute('admin.salon.index', __('messages.data_delete_success'));
        }
    }
}
