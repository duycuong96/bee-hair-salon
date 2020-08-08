<?php
namespace App\Services\Admin;

use App\Models\BranchSalon;
use Illuminate\Support\Facades\Mail;

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
}