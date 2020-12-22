<?php

namespace PaginaEmConstrucao\Core;

use PaginaEmConstrucao\Support\Seo;

/**
 * @author Leonardo Marques <leonardo@paginaemconstrucao.com.br>
 * @package PaginaEmConstrucao\Core
 */
class Controller
{

    /** @var View */
    protected $view;

    /** @var Seo */
    protected $seo;

    public function __construct(string $pathtoViews = null)
    {
        $this->view = new View($pathtoViews);
        $this->seo = new Seo();
    }

}
