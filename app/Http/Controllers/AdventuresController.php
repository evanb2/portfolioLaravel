<?php

namespace App\Http\Controllers;

use App\Adventure;
use App\Http\Requests;
use App\Http\Requests\CreateAdventureRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Request;
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
        // $adventures = DB::select('select * from adventures');
        // return view('adventures.index', ['adventures' => $adventures]);
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
     * @param  CreateAdventureRequest  $request
     * @return Response
     */
    public function store(CreateAdventureRequest $request)
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
