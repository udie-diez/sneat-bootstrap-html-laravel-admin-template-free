<?php

namespace App\Models\Buana;

use App\Enums\ContentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'title',
    'slug',
    'editorial_date',
    'content',
    'status',
  ];

  protected $casts = [
    'content' => 'array', // json serialize prepare for content builder
    'status' => ContentStatus::class,
  ];
}
