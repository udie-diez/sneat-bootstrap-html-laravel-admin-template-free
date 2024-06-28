<?php

namespace App\Models\Buana;

use App\Enums\ContentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class News extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('news-thumbnail')
            ->singleFile()
            ->withResponsiveImages()
            ->useDisk('media')
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')
                    ->width(280)
                    ->height(180);
            });

        $this->addMediaCollection('news-banner')
            ->withResponsiveImages()
            ->useDisk('media')
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')
                    ->width(850)
                    ->height(450);
            });

        $this->addMediaCollection('news-content-image')
            ->withResponsiveImages()
            ->useDisk('media')
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')
                    ->width(850)
                    ->height(450);
            });
    }
}
