<?php
namespace App\Services\Admin;

use App\Traits\WebResponseTrait;
use App\Models\TimeSchedule;
use Illuminate\Support\Facades\Gate;

class TimeScheduleService
{
    use WebResponseTrait;

    public function index($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $builder = TimeSchedule::where(function ($query) use ($request) {
            if ($request->name) $query->where('name', 'like', '%'.$request->name.'%');
        });

        $data = $builder->orderBy('id', 'desc')
                        ->get();

        // $data->appends(request()->query());

        return view(
            'admin::time_schedule.index',
            ['data' => $data]
        );
    }

    public function create()
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        return view('admin::time_schedule.create');
    }

    public function store($request)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = request()->all();
        $timeSchedule = TimeSchedule::create($data);
        return $this->returnSuccessWithRoute('admin.thoi-gian-bieu.index', __('messages.data_create_success'));
    }

    public function show($id)
    {
        if (! Gate::allows('Quản trị viên')) {
            return abort(401);
        }

        $data = TimeSchedule::find($id);
        return view(
            'admin::time_schedule.edit',
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

        $timeSchedule = TimeSchedule::find($id);
        if(empty($timeSchedule)) {
            return $this->returnFailedWithRoute('admin.thoi-gian-bieu.index', __('messages.data_update_failed'));
        } else {
            $timeSchedule->update($request->all());
            return $this->returnSuccessWithRoute('admin.thoi-gian-bieu.index', __('messages.data_update_success'));
        }
    }
}
