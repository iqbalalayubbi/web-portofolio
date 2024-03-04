<?php foreach ($menus as $menu) : ?>
    <li class="hover-animation"><a href="#<?= strtolower($menu) ?>">
            <?= $menu ?>
        </a></li>
<?php endforeach ?>