<h1 class="page-header">Bienvenido</h1>

<div class="well well-sm text-right">
    <a class="btn btn-success" href="?c=Cliente">Cliente</a>
      <a class="btn btn-success" href="?c=Categoria&a=Nuevo">Agregar</a>
     <!-- <a class="btn btn-primary" href="?c=Categoria">Ver categorias</a> -->
</div>

<div class="container">
<table class="table table-hover" border="1">
    <thead>
        <tr>
            <th>Nombre</th>
                
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r):  /*var_dump($r); exit;*/?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
          
            <td>
                <a class="btn btn-primary btn-md" href="?c=Categoria&a=Editar&id=<?php echo $r->id_categoria; ?>">Editar</a>
                <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Categoria&a=Eliminar&id=<?php echo $r->id_categoria ; ?>">Eliminar</a>
            </td>
           
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</div>
