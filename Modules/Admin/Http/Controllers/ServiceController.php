<?php

namespace Modules\Admin\Http\Controllers;

use App\Services\Admin\SalonServiceService;
use App\Services\Admin\ServiceService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\ServiceRequest;

class ServiceController extends AdminBaseController
{
    protected $serviceService;
    protected $salonServiceService;
    public function __construct(
        ServiceService $serviceService,
        SalonServiceService $salonServiceService
        )
    {
        $this->serviceService = $serviceService;
        $this->salonServiceService = $salonServiceService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        return $this->serviceService->index($request);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return $this->serviceService->create();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ServiceRequest $request)
    {
        return $this->serviceService->store($request);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return $this->serviceService->show($id);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(ServiceRequest $request, $id)
    {
        return $this->serviceService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        return $this->serviceService->delete($id);
    }

    public function listSoftDelete()
    {
        return $this->serviceService->listSoftDelete();
    }
    public function restore($id)
    {
        return $this->serviceService->restore($id);
    }

}
