<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
    	'name' ,'cpf', 'salary',
    ];

    public function user(){
    	return $this->belongsTo('App\Models\User');
    }

}
