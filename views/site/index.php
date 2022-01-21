<?php

/** @var yii\web\View $this */

use kartik\widgets\SideNav;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Desafio ApCoders</h1>

        <p class="lead">Sistema para gerenciar unidades, inquilinos e despesas</p>
    </div>

    <div class="body-content">

        <div class="row text-center">
            <div class="col-lg-4">
                <h2>Inquilinos</h2>

                <p>Tela para o gerenciamento de inquilinos</p>

                <p><a class="btn btn-outline-success" href="http://localhost:8080/index.php?r=inquilino%2Findex">Gerenciar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>
        
    </div>
</div>

<style>

    body {
        margin: 0;
        padding: 0;
        
        background: rgb(25,135,84);
        background: linear-gradient(0deg, rgba(25,135,84,1) 0%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 100%, rgba(255,255,255,1) 100%);
        background-repeat:no-repeat;
        background-position:center
    }

</style>
