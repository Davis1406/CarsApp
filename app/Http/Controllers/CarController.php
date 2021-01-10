<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

/*
*A method that creates a new car
*/
public function create(Request $request){
    $make=$request['make'];
    $model=$request['model'];
    $produced_on=$request['produced_on'];

    $car=new Car();

    $car->make=$make;
    $car->model=$model;
    $car->produced_on=$produced_on;
    $car->save();
   return redirect()->back();   
}

/*
*A method that shows a new car
*/
public function show(){
$cars=Car::all();
return view('index',['cars'=>$cars]);
}

/*
*A method that redirects us to edit page
*/
public function edit($car_id){
    // $cars=Car::all();
    $car=Car::findorFail($car_id);
    return view('edit',[
      "car"=>$car
    
  ]);

}
/*
*A method that updates the car details  
*/
public function update($car_id){
    $car=Car::findorFail($car_id);
    $car->make =request()->input("make");
    $car->model =request()->input("model");
    $car->produced_on =request()->input("produced_on");
    $car->update();
    return redirect()->route("cars.show");
}

/*
*A method that deleted the car   
*/
public function destroy($car_id){
    Car::destroy($car_id);   
    return redirect()->route("cars.show");
}
}

