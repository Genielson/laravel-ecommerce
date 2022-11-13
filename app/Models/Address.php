<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Address extends Model
{

    use HasFactory;
    protected $table = 'table_address';
    protected $fillable = ['id_user','address','number','state','city','country','district','cep'];



}
