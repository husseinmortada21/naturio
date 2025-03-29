<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class SupportController extends Controller
{
    public function index()
    {
        $appointments = Appointment::latest()->get();
        return view('admin.support.index', compact('appointments'));
    }
}
