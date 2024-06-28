<?php

namespace App\Models\Buana;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'name',
    'slug',
    'description',
    'product_type_id',
  ];

  public function productType()
  {
    return $this->belongsTo(ProductType::class);
  }
}
