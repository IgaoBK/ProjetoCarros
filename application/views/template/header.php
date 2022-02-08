<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    </head>
    <body>
        <div class="container">
            <?php
            if ($this->session->userdata('estou_logado')) {
                echo $this->session->userdata('logado')->nomeUsuario;
                ?>
                | 
                <a href="<?php echo base_url(); ?>login/sair">Sair</a> | 
                <a href="<?php echo base_url() . 'home'; ?>">Home</a> | 
                <a href="<?php echo base_url(); ?>pessoa">Pessoa</a> | 
                <a href="<?php echo base_url(); ?>usuario">Usuário</a>
                <a href="<?php echo base_url(); ?>carro">Carro</a>
            <?php }
            ?>