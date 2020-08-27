<?php

namespace Modules\Customer\Http\Controllers;

use App\Models\Order;
use App\Models\Review;
use App\Services\Customer\ProfileService;
use Auth;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProfileController extends Controller
{
    protected $profileService;
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return $this->profileService->index();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('customer::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('customer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('customer::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        return $this->profileService->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function changePassword(){
        return view('customer::profile.forgot_password');
    }

    public function history()
    {
        $data = Order::where('orders.customer_id', Auth::user()->id)
        ->paginate(4);

        return view('customer::profile.history',['data' => $data]);
    }
}
