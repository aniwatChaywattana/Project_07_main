<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class TypeProducts extends Model
{
    use HasFactory;

    protected $table = 'type_products';
    protected $fillable =['name','img','create_by','update_by','delete_by','create_at','update_at','delete_at',];
}
