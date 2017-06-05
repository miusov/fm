<div class="menu">
    <?php

    new \vendor\widgets\menu\Menu([
        'tpl' => ROOT . '/vendor/widgets/menu/menu_tpl/menu.php',
            'container' => 'ul',
            'class' => 'default',
            'table' => 'categories',
            'cache' => 60,
            'cacheKey' => 'ul_menu',
    ]);

    ?>
</div>
