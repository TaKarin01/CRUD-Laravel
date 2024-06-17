<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function types()
    {
       return $this->belongsTo(Types::class, 'type_id','Id');
    }
    protected $fillable = ['id','name','type_id','birthday','gender','address','phone_number','email'];

}
