<?php

namespace App\MediaLibrary;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator as BasePathGenerator;

class PathGenerator implements BasePathGenerator
{
    /*
    * Get the path for the given media, relative to the root storage path.
    */
    public function getPath(Media $media): string
    {
        return $media->getAttribute('uuid') . '/';
    }

    /*
    * Get the path for conversions of the given media, relative to the root storage path.
    */
    public function getPathForConversions(Media $media): string
    {
        return $media->getAttribute('uuid') . '/conversions/';
    }

    /*
    * Get the path for responsive images of the given media, relative to the root storage path.
    */
    public function getPathForResponsiveImages(Media $media): string
    {
        return $media->getAttribute('uuid') . '/responsive-images/';
    }
}
