<?php

namespace app\components\Twig\Extensions;

class MyCustomExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'sidebar_menu' => new \Twig_Function_Method($this, 'generate_sidebar_menu'),
            'plus' => new \Twig_Function_Method($this, 'sum'),
            'column_link' => new \Twig_Function_Method($this, 'link'),
        );
    }

    public function link($data){
        return $data['name'];
    }

    public function generate_sidebar_menu($menu){
        return $menu;
    }

    public function sum($var1, $var2) {
        return $var1+$var2;
    }

    public function getName()
    {
        return 'menu';
    }

}