<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookingsController extends Controller
{
    public function show(Request $request)
    {
        $selectedDate = $request->input('date');
        return Inertia::render('Home', [
            'selectedDate' => $selectedDate ? $selectedDate : null,
            'bookings' => Booking::query()
                ->when($selectedDate, function ($query, $date) {
                    $query->where('date', 'like', "%{$date}%");
                })
                ->get()
        ]);
    }
}
