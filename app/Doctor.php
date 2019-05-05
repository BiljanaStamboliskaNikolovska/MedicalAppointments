<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Appointment;

class Doctor extends Model
{
    protected $fillable =['name','institution','speciality', 'is_active'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
