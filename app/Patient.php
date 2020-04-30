<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function patient_type()
    {
    	return $this->hasOne(PatientType::class,'id','patient_type_id');
}
}
