<?php

/* @var $this yii\web\View */

$this->title = 'Programación Web';
global $path;
$path = "http://localhost/gitPractice1/PrograWebLastStand/Practicas/16_Practica/basic/web/index.php?r=";
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Programación Web</h1>

        <p class="lead">Proyecto 3</p>
        <h2>¡Bienvenido!</h2>

        
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-sm-4">
                <h2>Geografía</h2>

                <div class="list-group">
                    <a href="<?=$path?>continentes" class="list-group-item">Continentes</a>
                    <a href="<?=$path?>entidades" class="list-group-item">Entidades</a>
                    <a href="<?=$path?>municipios" class="list-group-item">Municipios</a>
                    <a href="<?=$path?>estados" class="list-group-item">Estados</a>
                    <a href="<?=$path?>localidades" class="list-group-item">Localidades</a>
                </div>
            </div>
            <div class="col-sm-4">
                <h2>Educación</h2>

                <a href="<?=$path?>instituciones" class="list-group-item">Instituciones</a>
                <a href="<?=$path?>escuelas" class="list-group-item">Escuelas</a>
                <a href="<?=$path?>subsistemas" class="list-group-item">Subsistemas</a>
                <a href="<?=$path?>direcciones-coordinaciones" class="list-group-item">Coordinaciones</a>
            </div>
            <div class="col-sm-4">
                <h2>Gobierno</h2>

                <a href="<?=$path?>gobiernos" class="list-group-item">Gobiernos</a>
                <a href="<?=$path?>idiomas" class="list-group-item">Idiomas</a>
            </div>
        </div>

    </div>
</div>
