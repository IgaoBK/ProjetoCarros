<h1>Cadastro de Carro</h1>
<?php echo form_open('carro/inserir'); ?>
<br><br>
<input class="form-control" type="text" required name="marca" placeholder="Marca Aqui..."/>
<br><br>
<input class="form-control" type="text" required name="modelo" placeholder="Modelo Aqui..."/>
<br><br>
<input class="form-control" type="text" required name="portas" placeholder="Número Portas Aqui..."/>
<br><br>
<input class="form-control" type="text" required name="cor" placeholder="Cor Aqui..."/>
<br><br>
<input class="form-control" type="text" required name="placa" placeholder="Placa Aqui..."/>
<br><br>
<select class="form-control" name="idPessoa" id="idPessoa">
    <option value="">Proprietário</option>
    <?php foreach ($pessoas as $pes): ?>
        <option value="<?php echo $pes->idPessoa; ?>"><?php echo $pes->nome; ?></option>
    <?php endforeach; ?>
</select>    

<input class="btn-outline-success" type="submit" name="acao" value="Salvar"/>
<input class="btn-outline-danger" type="reset" value="Limpar"/>

<?php echo form_close(); ?>

<h2>Lista de carro cadastrados</h2>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Marca</th><th>Modelo</th><th>Portas</th><th>Cor</th><th>Placa</th><th>Proprietário</th><th>Funções</>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($carros as $cars): ?>
            <tr>
                <td><?php echo $cars->marca; ?></td>
                <td><?php echo $cars->modelo; ?></td>
                <td><?php echo $cars->portas; ?></td>
                <td><?php echo $cars->cor; ?></td>
                <td><?php echo $cars->placa; ?></td>
                <td><?php
                    foreach ($pessoas as $pes):
                        if ($cars->idPessoa == $pes->idPessoa) {
                            echo $pes->nome;
                            break;
                        }endforeach;
                    ?></td>

                <td><a href="<?php echo base_url() . 'carro/editar/' . $cars->idCarro; ?>">Editar</a> | 
                    <a href="<?php
                       echo base_url() .
                       'carro/excluir/' . $cars->idCarro;
                       ?>">Deletar</a></td>
            </tr>
<?php endforeach; ?>
    </tbody>
</table>