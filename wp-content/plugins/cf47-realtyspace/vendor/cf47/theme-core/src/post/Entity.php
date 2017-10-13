<?php
namespace cf47\themecore\post;

use cf47\themecore\timber\PostAdapter;

class Entity extends PostAdapter
{
    const FQCN = __CLASS__;

    public function video_cover()
    {
        return $this->null_or_image('video_cover');
    }

    public function video_sources()
    {
        return $this->get_meta_field('video_sources');
    }

    public function gallery_items()
    {
        return $this->get_acf_image_gallery('gallery_items');
    }
}
