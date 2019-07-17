<?php

namespace App\Http\Controllers;

use App\City;
use App\Http\Requests\CityRequest;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        return view('cities.list', compact('cities'));
    }

    public function create(){
        return view('cities.create');
    }

    public function store(CityRequest $request){
        $city = new City();
        $city->name = $request->input('name');
        $city->save();
        return redirect()->route('cities.index');
    }

    public function edit($id){
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

    public function update(CityRequest $request, $id){
        $city = City::findOrFail($id);
        $city->name = $request->input('name');
        $city->save();
        return redirect()->route('cities.index');
    }

    public function delete($id){
        $city = City::findOrFail($id);
        return view('cities.delete', compact('city'));
    }

    public function destroy($id){
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()->route('cities.index');
    }
}
