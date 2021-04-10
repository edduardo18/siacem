<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\formato2 as formato2Requests;
use App\Http\Resources\formato2 as formato2Resources;
use App\Http\Resources\formato2Colletion;
use App\formato2;
use Illuminate\Http\Request;

class formato2Controller extends Controller
{
    protected $stage2;

    public function __construct(formato2 $stage2)
    {

        $this->post = $stage2;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(new formato2Colletion(
            $this->post->orderBy('id', 'desc')->get()
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(formato2Requests $request)
    {
        $stage2 = $this->post->create($request->all());
        return response()->json(new formato2Resources($stage2), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\formato2  $formato2
     * @return \Illuminate\Http\Response
     */
    public function show(formato2 $stage2)
    {
        return response()->json(new formato2Resources($stage2));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\formato2  $formato2
     * @return \Illuminate\Http\Response
     */
    public function update(formato2Requests $request, formato2 $stage2)
    {
        $stage2->update($request->all());
        return response()->json(new formato2Resources($stage2));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\formato2  $formato2
     * @return \Illuminate\Http\Response
     */
    public function destroy(formato2 $stage2)
    {
        $stage2->delete();
        return response()->json('delete registry');
    }
}
