<?php $v->layout("base"); ?>
<h1>Error</h1>
<h2><?= $error->title; ?></h2>
<p><?= $error->message; ?></p>
<pre>
    <?php var_dump($error->data); ?>
</pre>