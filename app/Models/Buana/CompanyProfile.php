<?php

namespace App\Models\Buana;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CompanyProfile extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('company-profile')
            ->singleFile()
            ->useDisk('media')
            ->acceptsMimeTypes(['application/pdf']);
    }
}
