<?php
require_once 'model/cliente.php';

class ClienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Cliente();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/cliente/cliente.php';
        require_once 'view/footer.php';
    }
    
    public function Nuevo(){
        $cli = new Cliente();
        
        if(isset($_REQUEST['id'])){
            $cli = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cliente/nuevo.php';
        require_once 'view/footer.php';
    }

    public function Editar(){
        $cli = new Cliente();
        
        if(isset($_REQUEST['id'])){
            $cli = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/cliente/editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
    $cli = new Cliente();
        
        $cli->id = $_REQUEST['id'];
        $cli->Nombre = $_REQUEST['Nombre'];
        $cli->Apellido = $_REQUEST['Apellido'];
        $cli->Telefono = $_REQUEST['Telefono'];
        $cli->Correo = $_REQUEST['Correo'];
        $cli->id_categoria = $_REQUEST['id_categoria'];

        $cli->id > 0 
            ? $this->model->Actualizar($cli)
            : $this->model->Registrar($cli);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}