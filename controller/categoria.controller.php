<?php


require_once 'model/categoria.php';

class CategoriaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Categoria();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/categoria/categoria.php';
        require_once 'view/footer.php';
    }
    public function Nuevo(){
        $ca = new Categoria();
        
        if(isset($_REQUEST['id'])){
            $ca = $this->model->Obtener($_REQUEST['id']);
        }
        
       require_once 'view/header.php';
        require_once 'view/categoria/nuevo.php';
        require_once 'view/footer.php';
    }

    public function Editar(){
        $ca = new Categoria();
        
        if(isset($_REQUEST['id'])){
            $ca = $this->model->Obtener($_REQUEST['id']);
        }
        require_once 'view/header.php';
        require_once 'view/categoria/editar.php';
        require_once 'view/footer.php';

    }
    
    public function Guardar(){
    $ca = new Categoria();
        
         $ca->id_categoria = $_REQUEST['id'];
         $ca->Nombre = $_REQUEST['Nombre'];
      

        $ca->id > 0 
            ? $this->model->Actualizar( $ca)
            : $this->model->Registrar( $ca);
        
        echo "actualizado";
    }

    public function Eliminar(){
        echo $_REQUEST['id_categoria'];
        //$this->model->Eliminar($id)
    }
    
   /* public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_categoria']);
        header('Location: index.php');
    }*/
}