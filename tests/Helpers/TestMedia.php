<?php

namespace Tests\Helpers;

use App\Media;
use App\Category;
use Hash;

class TestMedia
{
    public $params = [
        'title' => 'sharij',
        'rss' => 'https://sharij.net/rss'
    ];

    public function getParams()
    {
        return $this->params;
    }

    public function create($params = [])
    {
        $categories = factory(Category::class, 5)->create();

        $media = factory(Media::class)->create($params);
        $media->categories()->attach($categories);

        return $media;
    }
}
