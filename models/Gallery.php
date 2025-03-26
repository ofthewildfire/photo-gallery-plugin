<?php

namespace PhotoGalleryPlugin\Models;

use Model;

class Gallery extends Model
{
    protected $table = 'photo_gallery_plugin_galleries';

    protected $fillable = [
        'title',
        'description',
        'featured_image',
        'images',
    ];

    public $timestamps = true;

    public function getImagesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setImagesAttribute($value)
    {
        $this->attributes['images'] = json_encode($value);
    }
}