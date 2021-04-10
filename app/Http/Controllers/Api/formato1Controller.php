<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\formato1 as formato1Requests;
use App\Http\Resources\formato1 as formato1Resources;
use App\Http\Resources\formato1Colletion;
use App\formato1;
use Illuminate\Http\Request;

class formato1Controller extends Controller
{
    protected $stage1;

    public function __construct(formato1 $stage1)
    {

        $this->post = $stage1;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return datatables()
        ->eloquent(formato1::query()->orderBy('id', 'desc'))
        ->addColumn('btn','actions')
        ->rawColumns(['btn'])
        ->toJson();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(formato1Requests $request)
    {
        $stage1 = $this->post->create($request->all());
        // return response()->json(new formato1Resources($stage1), 201);
        // return back();
        return $request['data1'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\formato1  $formato1
     * @return \Illuminate\Http\Response
     */
    public function show(formato1 $stage1)
    {
        return response()->json(new formato1Resources($stage1));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\formato1  $formato1
     * @return \Illuminate\Http\Response
     */
    public function update(formato1Requests $request, formato1 $stage1)
    {
        $stage1->update($request->all());
        return response()->json(new format1Resources($stage1));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\formato1  $formato1
     * @return \Illuminate\Http\Response
     */
    public function destroy(formato1 $stage1)
    {
        $stage1->delete();
        return back();
    }
}
