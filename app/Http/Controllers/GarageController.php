<?php

namespace App\Http\Controllers;
use App\Http\Resources\Garage as GarageResource;
use App\Models\Garage;

use Illuminate\Http\Request;

class GarageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $garages=Garage::paginate(15);
        return GarageResource::collection($garages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
    {
        $garage = $request->isMethod('put') ? Garage::findOrFail($request->garage_id) : new Garage;

        $garage->id = $request->input('doctor_id');
        $garage->name = $request->input('name');
        $garage->location = $request->input('location');
        $garage->mechanic = $request->input('mechanic');

        if($garage->save()){
            return new GarageResource($garage);
        }
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $garages= Garage::findOrFail($id);
        return new GarageResource($garages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $garage= Garage::findOrFail($id);
         $garage->name=$request->name;
        $garage->location=$request->location;
        $garage->mechanic=$request->mechanic;
        if($garage->save()){
            return new GarageResource($garage);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $garage=Garage::findOrFail($id);
        if($garage->delete()){
            return new GarageResource($garage);
        }
    }
    
}
