
<h1>Cadastro de Pessoa</h1>
<?php echo form_open('pessoa/inserir'); ?>
<input class="form-control" type="text" required name="nome" placeholder="Nome aqui..." />
<br><br>
<input class="form-control" type="text" required name="telefone" placeholder="Telefone aqui..." />
<br><br>
<input class="form-control" type="email" required name="email" placeholder="E-mail aqui..." />
<br><br>
<input class="form-control" type="text" required name="endereco" placeholder="Endereço aqui..." />
<br><br>
<input class="form-check-inline" type="radio" required name="tpPessoa" value="Fisica"/>Fisíca 
<input class="form-check-inline" type="radio" required name="tpPessoa" value="Juridica" />Jurídica
<br><br>
<input class="form-control" type="number" name="cpf" placeholder="CPF aqui..." />
<br><br>
<input class="form-check-inline" type="radio" name="sexo" value="F"/>Feminino 
<input class="form-check-inline" type="radio" name="sexo" value="M" />Masculino
<br><br>
<input class="form-control" type="number" name="cnpj" placeholder="CNPJ aqui..." />
<br><br>
<input class="form-control" type="text" name="nomeFantasia" placeholder="Nome Fantasia aqui..." />
<br><br>
<input class="btn btn-outline-success" type="submit" value="Salvar"/>
<input class="btn btn-outline-danger" type="reset" value="Limpar"/>
<?php echo form_close(); ?>
<h2>Lista Pessoas</h2>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th>Nome</th><th>Telefone</th><th>E-mail</th><th>Funções</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pessoas as $pes): ?>
            <tr>
                <td><?php echo $pes->nome; ?></td>
                <td><?php echo $pes->telefone; ?></td>
                <td><?php echo $pes->email; ?></td>
                <td>
                    <a href="<?php
                    echo base_url() .
                    'pessoa/editar/' .
                    $pes->idPessoa;
                    ?>">Editar</a> | 
                    <a href="<?php
                    echo base_url() .
                    'pessoa/excluir/' .
                    $pes->idPessoa;
                    ?>">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
