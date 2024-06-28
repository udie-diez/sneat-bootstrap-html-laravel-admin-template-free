<?php

namespace App\Models\Buana;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('product-image')
            ->singleFile()
            ->withResponsiveImages()
            ->useDisk('media')
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')
                    ->width(500)
                    ->height(300);
            });

        $this->addMediaCollection('product-logo')
            ->withResponsiveImages()
            ->useDisk('media')
            ->registerMediaConversions(function (Media $media) {
                $this->addMediaConversion('thumb')
                    ->width(200)
                    ->height(200);
            });
    }
}
