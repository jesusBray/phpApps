<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Yesvil</title>
        <link rel="stylesheet" type="text/css" href="<?=base_url('css/about/style.css'); ?>">
</head>

<?= $header?>
    <?= $aside?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Area Chart -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h2 class="m-0 font-weight-bold text-primary">Datos Generales</h2>
                    </div>
                    <!-- main panel -->
                    
                    <?= $content?>
                </div>    
            </div>
        </div>
    </div>
    
    <?= $footer?>