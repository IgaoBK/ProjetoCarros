<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="<?php echo base_url() . 'pessoa'; ?>">Voltar</a>
        <h1>Editar Pessoa</h1>
        <?php echo form_open('pessoa/atualizar'); ?>
        <input type="hidden" required name="idPessoa" value="<?php echo $pessoa[0]->idPessoa; ?>" />
        <input type="text" required name="nome" value="<?php echo $pessoa[0]->nome; ?>" />
        <br><br>
        <input type="text" required name="telefone" value="<?php echo $pessoa[0]->telefone; ?>" />
        <br><br>
        <input type="email" required name="email" value="<?php echo $pessoa[0]->email; ?>" />
        <br><br>
        <input type="text" required name="endereco" value="<?php echo $pessoa[0]->endereco; ?>" />
        <br><br>
        <input type="radio" required name="tpPessoa" value="Fisica" 
            <?php if(is_null($pessoa[0]->cnpj)){echo 'checked';} ?> 
            <?php if(!is_null($pessoa[0]->cnpj)){echo 'disabled';} ?>/>Fisíca 
        <input type="radio" required name="tpPessoa" value="Juridica" 
            <?php if(is_null($pessoa[0]->cpf)){echo 'checked';} ?> 
            <?php if(is_null($pessoa[0]->cnpj)){echo 'disabled';} ?>/>Jurídica
        <br><br>
        <input type="number" required name="cpf" value="<?php echo $pessoa[0]->cpf; ?>" 
            <?php if(!is_null($pessoa[0]->cnpj)){echo 'disabled';} ?>/>
        <br><br>
        <input type="radio" required name="sexo" value="F" <?php if($pessoa[0]->sexo == "F"){echo 'checked';} ?> 
            <?php if(!is_null($pessoa[0]->cnpj)){echo 'disabled';} ?>/>Feminino 
        <input type="radio" required name="sexo" value="M" <?php if($pessoa[0]->sexo == "M"){echo 'checked';} ?> 
            <?php if(!is_null($pessoa[0]->cnpj)){echo 'disabled';} ?>/>Masculino
        <br><br>
        <input type="number" name="cnpj" value="<?php echo $pessoa[0]->cnpj; ?>" 
            <?php if(is_null($pessoa[0]->cnpj)){echo 'disabled';} ?>/>
        <br><br>
        <input type="text" name="nomeFantasia" value="<?php echo $pessoa[0]->nomeFantasia; ?>" 
            <?php if(is_null($pessoa[0]->cnpj)){echo 'disabled';} ?>/>
        <br><br>
        <input type="submit" value="Salvar"/>
        <?php echo form_close(); ?>
    </body>
</html>
