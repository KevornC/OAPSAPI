<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parents extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'idenCard',
        'trn',
        'address',
        'email',
        'password',
    ];

    public function relationships(){
        return $this->hasMany(parents::class,'parentID');
    }
}
