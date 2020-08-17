<?php

namespace Modules\Admin\Http\Controllers;

use App\Services\Admin\StatisticService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StatisticController extends Controller
{
    protected $statisticService;
    public function __construct(StatisticService $statisticService)
    {
        $this->statisticService = $statisticService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function customer()
    {
        return $this->statisticService->customer();
    }

    public function revenue(){
        return $this->statisticService->revenue();
    }
    public function service(){
        return $this->statisticService->service();
    }
}
