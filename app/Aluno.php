<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'ALUNO';
    protected $fillable = ['nome', 'nmatricula','statuss'];
    protected $guarded =['CDALUNO'];
    public $timestamps = false;
    protected $primaryKey = 'CDALUNO'; 

}
