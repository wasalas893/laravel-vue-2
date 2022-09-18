<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    use HasFactory;
    protected $table = 'categorys';
    protected $fillable = [
        'cat_name',
        'cat_description',
        
    ];
    protected $primaryKey = 'id';
}
