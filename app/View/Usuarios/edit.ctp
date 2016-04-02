
<div class="container">
    <div>
        <h2><?php echo $acao ?></h2>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php echo $this->Form->create("Usuario", array('id' => 'FormUsuario')); ?>
            <?php echo $this->Form->hidden('Usuario.id') ?>


            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div class="form-group">

                        <?php echo $this->Form->input('Usuario.nm_usuario', array('class' => 'form-control', 'label' => 'Nome')) ?>

                    </div>
                    <div class="form-group">

                        <?php echo $this->Form->input("Usuario.dc_email", array('class' => 'form-control', 'type' => 'email', 'label' => 'E-mail')) ?>
                    </div>
                    <div class="form-group">

                        <?php echo $this->Form->input("Usuario.nr_cpf", array('class' => 'form-control', 'label' => 'CPF')) ?>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-2">
                    <?php echo $this->Form->submit('Salvar', array('class' => 'btn btn-md btn-success col-sm-5')) ?>

                </div>
            </div>
            <?php echo $this->Form->end() ?>


        </div>
    </div>
</div>
