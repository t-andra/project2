<nav>

    <ul class= "menu">
        <li class= "menu" > <a class= <?= urlIs('/') ? 'menu_' : 'menu' ?> href="/"> Главная </a></li>
        <li class= "menu" > <a class= <?= urlIs('/competencies') ? 'menu_' : 'menu' ?> href="/competencies"> Компетенции </a></li>
        <li class= "menu" > <a class= <?= urlIs('/services') ? 'menu_' : 'menu' ?> href="/services"> Услуги  </a> </li>
        <li class= "menu" > <a class= <?= urlIs('/projects') ? 'menu_' : 'menu' ?>  href="/projects"> Проекты  </a> </li>
        <li class= "menu" > <a class= <?= urlIs('/partnership') ? 'menu_' : 'menu' ?> href="/partnership"> Партнерство  </a> </li>
        <li class= "menu" > <a class= <?= urlIs('/feedback') ? 'menu_' : 'menu' ?> href="/feedback"> Обратная связь  </a> </li>
        <li class= "menu" > <a class= <?= urlIs('/enter') ? 'menu_' : 'menu' ?> href="/enter"> Вход  </a> </li>
    </ul>
</nav>
