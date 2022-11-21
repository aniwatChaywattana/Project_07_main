<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory;

    protected $table = 'content';

    protected $fillable = [

        'name',
        'detail',
        'price',
        'image',
        'create_by',
        'update_by',
        'delete_by',
        'create_at',
        'update_at',
        'delete_at',

    ];

}
