<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index()
    {
        $cities = City::all();
        $customers = Customer::paginate(3);
        return view('customers.list', compact('cities', 'customers'));
    }

    public function create()
    {
        $cities = City::all();
        return view('customers.create', compact('cities'));
    }

    public function store(CustomerRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->age = $request->input('age');
        $customer->phone = $request->input('phone');
        $customer->dob = $request->input('dob');
        $customer->email = $request->input('email');
        $customer->city_id = $request->input('city');
        if (isset($request->image)) {
            $image = $request->image;
            $path = $image->store('images/customers', 'public');
            $customer->image = $path;
        }
        $customer->save();
        Session::flash('success', 'Thêm khách hàng thành công');
        return redirect()->route('customers.index');
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $cities = City::all();
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer', 'cities'));
    }

    public function update(CustomerRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->input('name');
        $customer->age = $request->input('age');
        $customer->phone = $request->input('phone');
        $customer->dob = $request->input('dob');
        $customer->email = $request->input('email');
        $customer->city_id = $request->input('city');
        if (isset($request->image)) {
            $image = $request->image;
            $path = $image->store('images/customers', 'public');
            $customer->image = $path;
        }
        $customer->save();
        Session::flash('success', 'Update thành công');
        return redirect()->route('customers.index');
    }

    public function delete($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.delete', compact('customer'));
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('customers.index');
        }
        $customers = Customer::where('name', 'like', '%' . $keyword . '%')
//            ->orWhere('dob', 'like', '%' . $keyword . '%')
//            ->orWhere('email', 'like', '%' . $keyword . '%')
//            ->orWhereHas('city', function ($query) use ($keyword) {
//                $query->where('name', 'like', '%' . $keyword . '%');
//            })
            ->paginate(5);
        $cities = City::all();
        return view('customers.list', compact('customers', 'cities'));
    }
}
