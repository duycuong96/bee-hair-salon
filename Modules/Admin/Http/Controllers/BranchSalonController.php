<?php

namespace Modules\Admin\Http\Controllers;

use App\Services\Admin\BranchSalonService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\BranchSalonRequest;

class BranchSalonController extends AdminBaseController
{
    protected $branchSalonService;
    public function __construct(BranchSalonService $branchSalonService)
    {
        $this->branchSalonService = $branchSalonService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        return $this->branchSalonService->index($request);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return $this->branchSalonService->create();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(BranchSalonRequest $request)
    {

        return $this->branchSalonService->store($request);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return $this->branchSalonService->show($id);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        return $this->branchSalonService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        return $this->branchSalonService->delete($id);
    }
}
