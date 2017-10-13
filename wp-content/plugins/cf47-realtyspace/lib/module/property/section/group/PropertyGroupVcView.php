<?php
namespace cf47\plugin\realtyspace\module\property\section\group;

use cf47\themecore\section\AbstractSectionView;

class PropertyGroupVcView extends AbstractSectionView
{

    public function content()
    {
        $content = [
            'tab_header' => '',
            'tab_content' => '',
            'tab_count' => 0
        ];

        foreach (explode('<!-- separator -->', $this->inner_content()) as $cnt => $row) {
            if (empty($row)) {
                continue;
            }

            if ($cnt & 1) {
                // odd
                $content['tab_content'] .= $row;
                $content['tab_count']++;
            } else {
                $content['tab_header'] .= $row;
            }
        }

        return $content;
    }

}
