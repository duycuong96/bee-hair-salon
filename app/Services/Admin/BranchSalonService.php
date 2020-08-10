<?php
namespace App\Services\Admin;

use App\Models\BranchSalon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Str;

class BranchSalonService
{
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

        return redirect()->route('admin.salon.index');
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
            return redirect()->route('admin.salon.index')->with('error', "Salon không tồn tại");
        } else {
            $branchSalon->update($request->all());
            return redirect()->route('admin.salon.index')->with('success', "Sửa salon thành công");
        }

    }

    public function delete($id)
    {
        BranchSalon::destroy($id);
        return redirect()->route('admin.salon.index')->with('success', 'Xóa Salon thành công');
    }
}
