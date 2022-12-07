<?php

namespace App\Http\Controllers;

use App\Models\Offender;
use App\Models\UserClass;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InfringementController extends Controller
{
    public function show()
    {
        Offender::all();
        return view('content.show');
    }

    public function create()
    {
        $Uclass = UserClass::all();
        return view('content.create',
            compact('Uclass')
        );
    }

    public function store(Request $request)
    {
        Offender::create([
            'name' => $request->name,
            'violation' => $request->violation,
            'class_id' => $request->class
        ]);
    
        return redirect('/add');
    }
}
