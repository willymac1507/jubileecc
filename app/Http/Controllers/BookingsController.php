<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookingsController extends Controller
{
    public function show(Request $request, Booking $booking)
    {
        if($request->input('date') !== null) {
            $selectedDate = $request->input('date');
        } else {
            $selectedDate = now();
        };
        return Inertia::render('Home', [
            'selectedDate' => $selectedDate ? $selectedDate : null,
            'bookings' => $booking->query()
                ->when($selectedDate, function ($query, $date) {
                    $query->where('date', 'like', "%{$date}%");
                })->with('user')
                ->get()
        ]);
    }
}
