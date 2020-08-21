<?php

namespace Modules\Admin\Http\Controllers;

use App\Services\Admin\ReviewService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class ReviewController extends AdminBaseController
{
    protected $reviewService;
    public function __construct(ReviewService $reviewService)
    {
        $this->reviewService = $reviewService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        return $this->reviewService->index($request);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return $this->reviewService->show($id);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        return $this->reviewService->update($request, $id);
    }
    public function destroy($id)
    {
        return $this->reviewService->delete($id);
    }

    public function listSoftDelete()
    {
        return $this->reviewService->listSoftDelete();
    }
    public function restore($id)
    {
        return $this->reviewService->restore($id);
    }
}
