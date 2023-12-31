<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitors;

class VisitorsController extends Controller
{
    public function isOffline() {
        request()->session()->invalidate();

        Visitors::where('ip', $_SERVER['REMOTE_ADDR'])->update(['isOnline'=> false]);
    }
}
