<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMotelRequest;
use App\Http\Requests\UpdateMotelRequest;
use App\Models\Motel;
use App\Models\Payment_Method;

class MotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     
        $query = Motel::query();
        if ($search = request()->input('search')) {
            $query->where(function($q) use ($search) {
                $q->where('id', 'like', "%$search%")
                    ->orWhere('nameOfPerson', 'like', "%$search%")
                    ->orWhere('phoneNumber', 'like', "%$search%");
            });
        }
        $motels = $query->get();
        return view('motels.index', compact('motels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('motels.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMotelRequest $request)
    {
        $motel = Motel::create($request->validated());
        Payment_Method::create(
            [
                'type' => $request->input('payment_method'),
                'motel_id' => $motel->id,
            ]

        );

        return redirect()->route('motels.index')->with('success', 'Motel created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Motel $motel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Motel $motel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMotelRequest $request, Motel $motel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Motel $motel)
    {
        //
    }
}
