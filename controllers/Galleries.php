<?php

namespace PhotoGalleryPlugin\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use PhotoGalleryPlugin\Models\Gallery as GalleryModel;

class Galleries extends Controller
{
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('PhotoGalleryPlugin', 'main-menu-item');
    }

    public function index()
    {
        $this->pageTitle = 'Gallery List';
        $this->galleries = GalleryModel::all();
    }

    public function details($id)
    {
        $this->gallery = GalleryModel::find($id);
        if (!$this->gallery) {
            return redirect()->to('galleries');
        }
    }
}