<?php
namespace App\Services\Admin;

use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;

class PermissionService
{
    public function index($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $builder = Permission::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('created_at', 'desc')
                        ->get();

        // $data->appends(request()->query());

        return view(
            'admin::permission.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        return view('admin::permission.create');
    }

    public function store($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = request()->all();
        $permission = Permission::create($data);
        return redirect()->route('admin.phan-quyen.index');
    }

    public function show($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = Permission::find($id);
        return view(
            'admin::permission.edit',
            ['data' => $data],
        );
    }

    public function update($request, $id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $customer = Permission::find($id);
        if (empty($customer)) {
            return redirect()->route('admin.phan-quyen.index');
        } else {
            $customer->update($request->all());
            return redirect()->route('admin.phan-quyen.index');
        }
    }

    public function delete($id)
    {

    }

    public function restore()
    {

    }
}
