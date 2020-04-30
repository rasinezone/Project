<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PatientType;
use App\Patient;

class PatientController extends Controller
{
    
    public function create_patient()
    {
        return view('add_patient');
    }

    public function add_patient(Request $request)
    {
        $this->validate( $request,[
            'name' => 'required',
        ]);

        $patient = new PatientType;
        $patient->name = $request->name;
        $patient->save();

        return redirect('/')->withSucces('Successfully save');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $patients = Patient::all();

        return view('index',compact('patients'))->with('i');
 
            }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $patient_types = PatientType::all();

        return view('create',compact('patient_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request,[
            'checkup'=>'required',
            'number'=> 'required',
            'age' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'payment' => 'required',
            'date' => 'required',
          
            
        
        ]);

        $patient = new Patient;
        $patient->patient_type_id = $request->patient_type_id;
        $patient->checkup = $request->checkup;
        $patient->number = $request->number;
        $patient->age = $request->age;
        $patient->gender= $request->gender;
        $patient->location = $request->location;
        $patient->date = $request->date;
        $patient->payment = $request->payment;
        $patient->status = "Not Paid";
        $patient->save();

        return redirect('/')->withSucces('Successfully save');
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient = Patient::find($id);
        $patient_types = PatientType::all();

        return view('edit',compact('patient','patient_types'));
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
        $this->validate( $request,[
            'checkup'=>'required',
            'number'=> 'required',
            'age' => 'required',
            'gender' => 'required',
            'location' => 'required',
            'payment' => 'required',
            'date' => 'required',
          
              
        ]);

      
        $patient = Patient::find($id);
        $patient->patient_type_id = $request->patient_type_id;
        $patient->checkup = $request->checkup;
        $patient->number = $request->number;
        $patient->age = $request->age;
        $patient->gender= $request->gender;
        $patient->location = $request->location;
        $patient->date = $request->date;
        $patient->payment = $request->payment;
        $patient->Status="Not paid";

        if($patient->payment  == true ){
        }else($patient->Status = " paid");
    {
    }
        $patient->save();

        return redirect('/')->withSucces('Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::find($id)->delete();

        return redirect('/')->with('status','Your data is deleted');
    }
}


