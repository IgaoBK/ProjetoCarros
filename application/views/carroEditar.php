        <br>
        <a class="btn btn-outline-success" href="<?php echo base_url() . 'carro'; ?>">Voltar</a>
        <h1>Editar Carros</h1>
        <?php echo form_open('carro/atualizar'); ?>
         <input type="hidden" required name="idCarro" value="<?php echo $carro[0]->idCarro; ?>" />
         <input class="form-control" type="text" required name="marca" value="<?php echo $carro[0]->marca; ?>" />
        <br>
         <input class="form-control" type="text" required name="modelo" value="<?php echo $carro[0]->modelo; ?>" />
        <br>
         <input class="form-control" type="text" required name="portas" value="<?php echo $carro[0]->portas; ?>" />
        <br>
         <input class="form-control" type="text" required name="cor" value="<?php echo $carro[0]->cor; ?>" />
        <br>
         <input class="form-control" type="text" required name="placa" value="<?php echo $carro[0]->placa; ?>" />
        <br>
          <select class="form-control" name="idPessoa" id="idPessoa">
            <option value="">Proprietário</option>
            <?php foreach($pessoas as $pes): ?>
            <option 
                    value="<?php echo $pes->idPessoa; ?>"
                    <?php if ($pes->idPessoa == $carro[0]->idPessoa){
                        echo 'selected';
                    }?>>
                    >
                    <?php echo $pes->nome; ?>
            </option>
            <?php endforeach; ?>
        </select>
        <br>
          <input class="btn-outline-success" type="submit" value="Salvar"/>
        <?php echo form_close(); ?>