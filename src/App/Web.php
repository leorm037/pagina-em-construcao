<?php

namespace PaginaEmConstrucao\App;

use PaginaEmConstrucao\Core\Controller;

/**
 * @author Leonardo Marques <leonardo@paginaemconstrucao.com.br>
 */
class Web extends Controller
{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home(): void
    {
        echo "Home";
//        $head = $this->seo->render(
//            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
//            CONF_SITE_DESC,
//            url(),
//            theme("/assets/images/share.jpg")
//        );
//        
//        echo $this->view-render("home", [
//            "head" => $head,
//            "video" => "kkkkkk"
//        ]);
    }

    public function error(array $data): void
    {
        var_dump($data);
    }

}
