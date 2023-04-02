<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{

    private static function getHeader()
    {
        //método responsável por retornar o header
        return View::render('Pages/header');
    }

    public static function getPage($title, $content)
    {
        return View::render('Pages/page', [
            'header'  => self::getHeader(),
            'title'   => $title,
            'content' => $content,
            'footer'  => self::getFooter()
        ]);
    }

    private static function getFooter()
    {
        return View::render('Pages/footer');
    }
}
