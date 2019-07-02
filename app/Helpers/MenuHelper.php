<?php

use Spatie\Menu\Menu;

if (!function_exists('DummyFunction')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function BuildMenu()
    {
        return Menu::new()
            ->link('/', 'Home')
            ->addItemParentClass('nav-item')
            ->addItemClass('nav-link')
            ->link('/about', 'About')
            ->link('/contact', 'Contact')
            ->addClass('navbar-nav ml-auto')->setActive('home');
    }
}
