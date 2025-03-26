<?php

namespace PhotoGalleryPlugin\Components;

use Cms\Classes\ComponentBase;
use PhotoGalleryPlugin\Models\Gallery as GalleryModel;

class Gallery extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Photo Gallery',
            'description' => 'Displays a gallery of images.'
        ];
    }

    public function onRun()
    {
        $this->page['galleries'] = $this->loadGalleries();
    }

    protected function loadGalleries()
    {
        return GalleryModel::all();
    }
}