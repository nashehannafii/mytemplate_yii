<?php

use yii\bootstrap5\Html;


?>

<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
        <li>
            <a href="index.html">Dashboard 1</a>
        </li>
        <li>
            <a href="index2.html">Dashboard 2</a>
        </li>
        <li>
            <a href="index3.html">Dashboard 3</a>
        </li>
        <li>
            <a href="index4.html">Dashboard 4</a>
        </li>
    </ul>
</li>
<li>
    <a href="chart.html">
        <i class="fas fa-chart-bar"></i>Charts</a>
</li>
<li>
    <a href="table.html">
        <i class="fas fa-table"></i>Tables</a>
</li>
<li>
    <a href="form.html">
        <i class="far fa-check-square"></i>Forms</a>
</li>
<li>
    <a href="calendar.html">
        <i class="fas fa-calendar-alt"></i>Calendar</a>
</li>
<li>
    <a href="map.html">
        <i class="fas fa-map-marker-alt"></i>Maps</a>
</li>
<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="fas fa-copy"></i>Pages</a>
    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
        <li>
            <a href="login.html">Login</a>
        </li>
        <li>
            <a href="register.html">Register</a>
        </li>
        <li>
            <a href="forget-pass.html">Forget Password</a>
        </li>
    </ul>
</li>

<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="fas fa-gear"></i>Master</a>
    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
        <li>
            <?= Html::a('Auth Item', ['auth-item/index']) ?>
        </li>
        <li>
            <?= Html::a('Auth Item Child', ['auth-item-child/index']) ?>
        </li>
        <li>
            <?= Html::a('User', ['user/index']) ?>
        </li>
    </ul>
</li>