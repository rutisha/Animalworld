<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lifespan extends Model
{
    use HasFactory;
    //use SoftDeletes;

    // protected $dates = ['deleted_at'];

    protected $fillable = [
        'animal_id',
        'years',
        'status'
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }
}
