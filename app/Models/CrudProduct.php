<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudProduct extends Model
{
    use HasFactory;
	protected $table = 'crud_products';
	protected $fillable = ['name', 'description', 'quantity', 'price', 'user_id'];
}
