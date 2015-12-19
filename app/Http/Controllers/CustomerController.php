<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use App\Customer;
use Redirect;
use DB;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        // get all the customers
        $customers = DB::table('customers')->simplePaginate(3);
        return view('customer.index', ['customers' => $customers]);
    }






















    public function indexbis(){
        // get all the customers
        $customers = Customer::get();
        return $customers;
    }



    public function create(){
        $customer = new Customer();
        return view('customer.create', compact('customer'));
    }


 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Customer::find($id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*Request $request)
    {
        if($request != null){
            $Customer = new Customer;
            $Customer->name = $request->input('name');
            $Customer->email = $request->input('email');
            $employee->save();
        }else{
            return view('customer');
        }


        return 'Employee record successfully created with id ' . $employee->id;
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $customer = Customer::create(Input::all());
        return Redirect::route('manage'); // 'manage' is the name of the route to redirect
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
    }
}
