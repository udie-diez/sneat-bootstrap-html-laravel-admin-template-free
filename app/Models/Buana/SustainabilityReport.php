<?php

namespace App\Models\Buana;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SustainabilityReport extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'title',
    'slug',
  ];
}
