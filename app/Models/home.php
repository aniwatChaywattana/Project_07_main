<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable =['name','detail','price','img','create_by','update_by','delete_by','create_at','update_at','delete_at',];
}
