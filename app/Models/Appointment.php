<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    use HasFactory;
    protected $fillable = [
        'pname',
        'phone',
        'speciality_id',
        'date',
       'user_id',
        'time' ,
    ];




    public function user()
    {
        // hasOne
        // belongsTo
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public $timestamps = false;
    public function speciality()
    {
        // hasOne
        // belongsTo
        return $this->belongsTo(Speciality::class, 'speciality_id', 'id');
    }
}
