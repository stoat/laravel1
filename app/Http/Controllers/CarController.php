<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars=\App\Car::all();
        return view('index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $car = new Car;
        return view('createCar',['car' => $car,'update'=>false]);
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
        $edit=$request->get('edit');
        $carid=$request->get('carid');
        
        if ($edit && $carid>0){
            $car=Car::findorFail($carid);

        }else{
              $car = new Car;   
        }
      
        $car->car_name = $request->get('car_name');
        $car->car_make = $request->get('car_make');

        $car->save();

        return '<a href="/"><span class="glyphicon glyphicon-home"></span> Home</a>Success';
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
        return view('viewCar', ['car' => Car::findOrFail($id)]);
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
        return view('createCar', ['car' => Car::findOrFail($id),'update'=>true]);
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
        $car = Car::findOrFail($id);

        $car->delete();
        Session::flash('flash_message', 'Car successfully deleted!');

        return redirect()->route('car.index');
    }
}
