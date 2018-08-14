<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Car;
use App\Part;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cars=Car::all();
        $part= new Part;
        return view('part.createpart', ['cars'=>$cars,'part'=>$part]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();
        Part::create($input);

        Session::flash('flash_message', 'Part successfully created!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cars=Car::all();
        return view('part.showpart', ['part' => Part::findOrFail($id),'update'=>true,'cars'=>$cars]);
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
        $cars=Car::all();
        return view('part.createpart', ['part' => Part::findOrFail($id),'update'=>true,'cars'=>$cars]);
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
        //
        $part = Part::findOrFail($id);

        $this->validate($request, [
        'part_name' => 'required',
        'car_id' => 'required'
    ]);

        $input = $request->all();

        $part->fill($input)->save();
     
        Session::flash('flash_message', 'Part successfully updated!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $part = Part::findOrFail($id);
        $carid=$part->car->id;
        $part->delete();
        Session::flash('flash_message', 'Part successfully deleted!');
        return redirect()->route('car.show', ['id'=>$carid]);
    }
}
