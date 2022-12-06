<?php

namespace App\Http\Controllers;

use App\Models\Offender;
use Illuminate\Http\Request;

class InfringementController extends Controller
{
    public function create()
    {
        return view('content.create');
    }

    public function store(Request $request)
    {
        $data = Offender::create([
            'name' => $request->name,
            'violation' => $request->violation,
            'class_id' => $request->class
        ]);

        return redirect('/add', compact('data'));
    }

    public function show()
    {
        Offender::all();
        return view('content.show');
    }
}
