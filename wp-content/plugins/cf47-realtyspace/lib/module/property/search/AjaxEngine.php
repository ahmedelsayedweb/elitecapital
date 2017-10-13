<?php
namespace cf47\plugin\realtyspace\module\property\search;

class AjaxEngine extends Engine
{

    public function hook()
    {
        $this->build_user_query($this->request->query->all());
        $vars = $this->inject_query_vars([]);
        $vars['posts_per_page'] = -1;
        $this->query = new \WP_Query($vars);
    }

    public function get_results()
    {
        $this->fetch_results();
        $result = [];
        foreach ($this->result as $property) {
            $map = $property->map_location();
            if ($map) {
                $result[] = [
                    'address' => $property->full_location(),
                    'lat' => $map['lat'],
                    'lng' => $map['lng'],
                    'area' => $property->area(),
                    'bedrooms' => $property->bedrooms(),
                    'type' => $property->type() ? $property->type()->name() : null,
                    'price' => $property->price(true),
                    'image' => $property->thumbnail() ? $property->thumbnail()->src('thumbnail') : null,
                    'url' => $property->link()
                ];
            }
        }

        return $result;
    }
}
