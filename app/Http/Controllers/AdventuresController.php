<?php

namespace App\Http\Controllers;

use App\Adventure;
use Illuminate\Http\Request;
use App\Http\Requests\AdventureRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class AdventuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $adventures = Adventure::latest('created_at')->get();

        return view('adventures.index', compact('adventures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('adventures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AdventureRequest  $request
     * @return Response
     */
    public function store(AdventureRequest $request)
    {
        Adventure::create($request->all());

        return redirect('adventures');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $adventure = Adventure::findOrFail($id);

        return view('adventures.show', compact('adventure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $adventure = Adventure::findOrFail($id);

        return view('adventures.edit', compact('adventure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AdventureRequest  $request
     * @param  int  $id
     * @return Response
     */
    public function update(AdventureRequest $request, $id)
    {
        $adventure = Adventure::findOrFail($id);

        $adventure->update($request->all());

        return redirect('adventures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
