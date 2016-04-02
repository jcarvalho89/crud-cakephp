<div class="container">
    <h2>Usuários</h2>

    <div class="examplo">
        <div class="row">
            <div class="col-sm-12">
                <?php echo $this->Html->link('Adicionar', array('action' => 'add', 'controller' => 'usuarios'), array('class' => 'btn btn-md btn-success col-sm-3')); ?>

            </div>
        </div>
        <table class="table table-striped"> 
            <thead> 
                <tr>
                    <th>#ID</th> 
                    <th>Nome</th> 
                    <th>E-mail</th> 
                    <th>CPF</th>
                    <th>Opções</th>
                </tr>
            </thead> 
            <tbody> 

                <?php foreach ($usuarios as $usuario) { ?>

                    <tr> 
                        <th><?php echo $usuario['Usuario']['id'] ?></th> 
                        <td><?php echo $usuario['Usuario']['nm_usuario'] ?></td> 
                        <td><?php echo $usuario['Usuario']['dc_email'] ?></td> 
                        <td><?php echo $usuario['Usuario']['nr_cpf'] ?></td> 
                        <td>
                            <?php echo $this->Html->link('Editar', array('action' => 'edit', $usuario['Usuario']['id']), array('class' => 'btn btn-md btn-default')); ?>
                            <?php echo $this->Form->postLink('Remover', array('action' => 'delete', $usuario['Usuario']['id']), array('class' => 'btn btn-md btn-default'), 'Você tem certeza que deseja remover este registro?'); ?>
                        </td> 

                    </tr>
                <?php } ?>

            </tbody> 
        </table> 
    </div>
</div>