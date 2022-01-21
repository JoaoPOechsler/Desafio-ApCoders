<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-expand-xl|lg|md|sm fixed-top navbar-dark bg-nav fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav '],
        'items' => [   //Navbar com items adicionais    
            ['label' => 'Inquilinos', 'url' => ['/inquilino/index']],
            ['label' => 'Unidades', 'url' => ['/unidade/index']],
            ['label' => 'Despesas', 'url' => ['/despesa/index']]
            //['label' => 'Home', 'url' => ['/site/index']],
            //['label' => 'About', 'url' => ['/site/about']],
            //['label' => 'Contact', 'url' => ['/site/contact']],
        ],
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; Ap Coders <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<style>
    .bg-nav {
        background-color: #7f3acd;
        color: white;
    }

    .bg-btn {
        background-color: #7f3acd;
        color: white;
    }

    .bg-btn:hover {
        background-color: #7f3acd;
        color: white;
    }

    svg {
        color: #7f3acd;
    }

    th a{
        color: #7f3acd;
    }

    li a{
        color: #7f3acd;
    }

    td a{
        color: #212529;
    }

    li a:hover {
        color: #212529;
    }

    th a:hover {
        color: #212529;
    }

    td a:hover {
        color: #7f3acd;
    }

</style>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
