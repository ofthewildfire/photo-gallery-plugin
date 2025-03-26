<?php

namespace PhotoGalleryPlugin;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Photo Gallery',
            'description' => 'A plugin for creating photo galleries with featured images.',
            'author'      => 'Your Name',
            'icon'        => 'icon-picture'
        ];
    }

    public function registerComponents()
    {
        return [
            'PhotoGalleryPlugin\Components\Gallery' => 'gallery',
            'PhotoGalleryPlugin\Components\FeaturedImage' => 'featuredImage'
        ];
    }

    public function registerSettings()
    {
        return [];
    }
}