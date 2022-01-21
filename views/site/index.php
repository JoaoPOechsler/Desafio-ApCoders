<?php

/** @var yii\web\View $this */

use kartik\widgets\SideNav;

$this->title = 'Ap Coders';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4" style="margin-top: 36px;">Desafio ApCoders</h1>

        <p class="lead">Sistema para gerenciar unidades, inquilinos e despesas</p>
    </div>

    <div class="body-content">

        <div class="row text-center">
            <div class="col-lg-4">
                <h2>Inquilinos</h2>

                <p>Tela para o gerenciamento de Inquilinos</p>

                <p><a class="btn bg-btn" href="/index.php?r=inquilino%2Findex">Gerenciar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Unidades</h2>

                <p>Tela para o gerenciamento de Unidades</p>

                <p><a class="btn bg-btn" href="/index.php?r=unidade%2Findex">Gerenciar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Despesas</h2>

                <p>Tela para o gerenciamento de Despesas</p>

                <p><a class="btn bg-btn" href="/index.php?r=despesa%2Findex">Gerenciar &raquo;</a></p>
            </div>
        </div>
        
    </div>
</div>

<style>

    body {
        margin: 0;
        padding: 0;
        
        background: rgb(127,58,205);
        background: linear-gradient(0deg, rgba(127,58,205,1) 0%, rgba(255,255,255,1) 44%, rgba(255,255,255,1) 100%, rgba(255,255,255,1) 100%);
        background-repeat:no-repeat;
        background-position:center
    }

</style>
