<?php

namespace PhotoGalleryPlugin\Components;

use Cms\Classes\ComponentBase;
use PhotoGalleryPlugin\Models\Gallery;

class FeaturedImage extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Featured Image',
            'description' => 'Displays a featured image that links to a gallery.'
        ];
    }

    public function onRun()
    {
        $this->page['featuredImage'] = $this->loadFeaturedImage();
    }

    protected function loadFeaturedImage()
    {
        // Logic to fetch the featured image from the gallery model
        return Gallery::where('is_featured', true)->first();
    }
}