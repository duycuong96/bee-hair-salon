<?php

namespace Modules\Admin\Http\Controllers;

use App\Services\Admin\OrderService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Http\Requests\OrderServiceRequest;

class OrderController extends AdminBaseController
{
    protected $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return $this->orderService->index();
    }
    public function store(OrderServiceRequest $request)
    {
        return $this->orderService->store($request);
    }
    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return $this->orderService->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        return $this->orderService->delete($id);
    }

    public function confirmOrder()
    {
        return $this->orderService->confirmOrder();
    }

    public function history()
    {
        return $this->orderService->history();
    }

    public function listSoftDelete($id)
    {
        return $this->orderService->listSoftDelete($id);
    }
    public function restore($id)
    {
        return $this->orderService->restore($id);
    }

    public function updateStatus(Request $request)
    {
        return $this->orderService->updateStatus($request);
    }
}
