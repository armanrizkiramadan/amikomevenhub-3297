<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPendapatan = Transaction::where('status', 'Success')->sum('total_price');
        $totalTiketTerjual = Transaction::where('status', 'Success')->count();
        $totalEvent = Event::count();
        $transaksiPending = Transaction::where('status', 'Pending')->count();
        $transaksiTerakhir = Transaction::with('event')->latest()->take(5)->get();
        $events = Event::with('category')->latest()->take(6)->get();
        
        return view('admin.dashboard', compact(
            'totalPendapatan', 'totalTiketTerjual', 'totalEvent',
            'transaksiPending', 'transaksiTerakhir', 'events'
        ));
    }
}