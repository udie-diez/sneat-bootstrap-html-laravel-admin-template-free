<?php

namespace App\Models\Buana;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactPerson extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'name',
    'slug',
    'email',
    'phone',
    'job_position_id',
  ];

  public function jobPosition()
  {
    return $this->belongsTo(JobPosition::class);
  }
}
