<h1 class="page-header">Bienvenido</h1>

<div class="well well-sm text-right">
    <a class="btn btn-success" href="?c=Cliente&a=Nuevo">Registrar nuevo cliente</a>
      <a class="btn btn-success" href="?c=Categoria">Categorias</a>
     <!-- <a class="btn btn-primary" href="?c=Categoria">Ver categorias</a> -->
</div>

<div class="container">
<table class="table table-hover" border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th >Correo</th>
            <th >Categoria</th>
            <th >Acciones</th>        
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r):  /*var_dump($r); exit;*/?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellido; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td><?php echo $r->correo; ?></td>
            <td><?php echo $r->categoria; ?></td>
            <td>
                <a class="btn btn-primary btn-md" href="?c=Cliente&a=Editar&id=<?php echo $r->id; ?>">Editar</a>
                <a class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Cliente&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
           
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
</div>
