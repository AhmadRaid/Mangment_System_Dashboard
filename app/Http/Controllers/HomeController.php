<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $order = Order::getCountry()->orderBy('created_at')->count();

        $sold = Order::getCountry()->where('status_id', '1')->count();

        $delivered = Order::getCountry()->where('status_id', '2')->count();

        $canceled = Order::getCountry()->where('status_id', '3')->count();

        $employee = User::getCountry()->where('roles_name', ['employee'])->count();

        $product = Product::getCountry()->count();

        return view('main', compact(['order', 'sold', 'delivered', 'canceled', 'employee', 'product']));
    }
}
