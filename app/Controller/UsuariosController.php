<?php

/*
 *Josiano Carvalho
 * 
 * 
 * 
 */

class UsuariosController extends AppController {

    public function index() {

        //seleciona todos os usuarios e ordena pelo nome (ordem alfabética)
        $usuarios = $this->Usuario->find('all', array(
            'order' => array('Usuario.nm_usuario' => 'ASC'),
        ));
        $this->set('usuarios', $usuarios);
    }

    //Adiciona um usuário reaproveitando a mesma view que edita.
    public function add() {
        $this->edit();
        $this->render("/Usuarios/edit");
    }

    public function edit($id = null) {
        $acao = is_null($id) ? 'Adicionar usuário' : 'Editar usuário';

        if ($this->request->is('post') || $this->request->is('put')) {
            if (isset($this->request->data['Usuario'])) {

                if ($this->Usuario->save($this->request->data['Usuario'])) {
                    $this->Session->setFlash('Usuário registrado com sucesso.', 'default', array('class' => 'alert alert-success'));
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash('Usuário não pode ser registrado. Tente novamente.', 'default', array('class' => 'alert alert-danger'));
                }
            }
        } else {
            //verifica se existe um usuario cadastrado para editar, senão deixa os campos em branco para adicionar um novo usuário 
            $usuario = $this->request->data = $this->Usuario->read(null, $id);
        }
        //disponibiliza todas as variaveis para a view edit
        $this->set(get_defined_vars());
    }

    //Remove um usuario pelo ID
    public function delete($id) {
        if (!is_null($id)) {
            if ($this->Usuario->delete($id)) {
                $this->Session->setFlash('Usuário excluído com sucesso.', 'default', array('class' => 'alert alert-success'));
                $this->redirect(array('action' => 'index'));
            }
        }
    }

}

?>
