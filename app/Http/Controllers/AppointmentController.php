<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'services' => 'required|array',
            'services.*' => 'string',
            'message' => 'nullable|string|max:1000',
        ]);
    
        $data['services'] = json_encode($request->services);
    
        Appointment::create($data);
    
        return redirect()->back()->with('success', 'Appointment request sent successfully!');
    }
}
