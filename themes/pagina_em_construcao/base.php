<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title></title>
        
        <link rel="stylesheet" href="<?= theme("/assets/app.css"); ?>" />
    </head>
    <body>
        <header>
            <nav></nav>
        </header>
        <main>
            <?= $v->section("content"); ?>
        </main>
        <footer></footer>
        
        <script src="<?= theme("assets/app.js"); ?>"></script>
    </body>
</html>
