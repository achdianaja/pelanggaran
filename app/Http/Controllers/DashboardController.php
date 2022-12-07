<?php

namespace App\Http\Controllers;

use App\Models\UserClass;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        return view('content.dashboard');
    }

    public function showClass()
    {
        $Uclass = UserClass::all();
        return view('content.showClass',
            compact('Uclass')        
        );
    }
}
