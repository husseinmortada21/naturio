<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Service;
use App\Models\Appointment;
use App\Models\Feedback;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        
        $productsCount = Product::count();
        $servicesCount = Service::count();
        $appointmentsCount = Appointment::count();
        $feedbacksCount = Feedback::count();
        $ordersCount = Order::count();


        return view('admin.dashboard', compact('productsCount','ordersCount', 'servicesCount', 'appointmentsCount', 'feedbacksCount'));
    }
}
