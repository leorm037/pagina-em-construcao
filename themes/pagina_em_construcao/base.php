<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <link rel="stylesheet" type="text/css" href="<?= theme("/assets/app.css"); ?>"/>
    </head>
    <body>
        <!--HEADER-->
        <header class="main_header">
            <div class="main_header_content">
                <a href="<?= url(); ?>" class="logo">
                    Página em construção
                </a>

                <nav class="main_header_content_menu">
                    <ul>
                        <li><a href="<?= url(); ?>">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </nav>

                <nav class="main_header_content_menu_mobile" style="display: none;">
                    <ul>
                        <li><span class="main_header_content_menu_mobile_obj icon-menu icon-notext"></span>
                            <ul class="main_header_content_menu_mobile_sub ds_none">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contato</a></li>
                                <li><a href="#">Sobre</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <?= $v->section("content"); ?>
        </main>
        <footer></footer>

        <script src="<?= theme("assets/app.js"); ?>"></script>
    </body>
</html>
