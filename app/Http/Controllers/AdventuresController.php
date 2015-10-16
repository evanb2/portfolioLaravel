<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Adventure;
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
        $adventures = Adventure::latest('hiked_on')->get();

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
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = Request::all();
        Adventure::create($input);

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
