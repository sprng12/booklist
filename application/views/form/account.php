<ul class="nav pills pull-right">
    <li class="dropdown" id="menu1">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
            <i class="icon white user"></i>&nbsp;<?php echo  Auth::instance()->get_user()->username;?>
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <li><a href="/auth/logout">Выйти</a></li>
        </ul>
    </li>
</ul>