<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function createCar()
    {
        return view ('pages.create');
    }

    public function storeCar(Request $request)
    {
        $id=Auth::user()->id;
        $car= new Car([
            'name'=>$request->name,
            'description'=>$request->description,
            'user_id'=>$id
        ]);
        $car->save();
        return redirect()->back();
    }

    public function viewCar()
    {
        $cars= Car::all();
        return view('pages.view', compact('cars'));
    }

    public function detail($id)
    {
        $car = Car::whereId($id)->first();
        return view('pages.details', compact('car'));
    }

    public function editCar($id)
    {
        $post = Car::find($id);
        return view ('pages.edit', compact('post'));
    }

    public function updateCar(Request $request, $id)
    {
        $post= Car::whereId($id)->first();
        $post->name=$request->name;
        $post->description=$request->description;

        $post->save();
        return redirect('/pages/view');

    }

    public function deleteCar($id)
    {
        $car=Car::find($id);
            // dd($id);
        $car->delete();
        return redirect('/pages/view');
    }
}
