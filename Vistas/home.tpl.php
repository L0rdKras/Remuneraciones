<h1><?= $language?></h1>

<h2>Menu</h2>
<ul>
<?php
    foreach($menu as $key => $value)
    {
        ?><li><a href="<?= $value?>"><?= $key?></a></li><?php
    }
?>
</ul>