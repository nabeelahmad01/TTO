<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:visit,call',
            'staff_member' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company_name' => 'nullable|string|max:255',
        ]);

        Booking::create($request->all());

        return redirect()->back()->with('success', 'Booking created successfully!');
    }
}
