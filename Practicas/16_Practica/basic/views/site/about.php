<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Acerca de...';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    
    <div class="jumbotron">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>

    <p>
        Proyecto Final: Programación Web, introducción y uso básico del
        Framework Yii2, mediante vistas diseñadas en Bootstrap.
    </p>
    
    <!--The next code line shows local directory to the view file-->
    <!--<code><?= __FILE__ ?></code>-->
    <?= __FILE__ ?>
</div>
