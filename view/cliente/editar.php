<h1 class="page-header">
    <?php echo $cli->id !=null ? $cli->nombre : 'Editar datos del cliente'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Clientes</a></li>
  <li class="active"><?php echo $cli->id != null ? $cli->nombre:'Editar datos del cliente'; ?></li>
</ol>

<form id="frm-cliente" action="?c=Cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $cli->id; ?>">
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $cli->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" />
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $cli->apellido; ?>" class="form-control" placeholder="Ingrese su apellido" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Telefono" value="<?php echo $cli->telefono; ?>" class="form-control" placeholder="Ingrese su Telefono" data-validacion-tipo="requerido|min:10" />
    </div> 

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="Correo" value="<?php echo $cli->correo; ?>" class="form-control" placeholder="Ingrese su correo electrónico" data-validacion-tipo="requerido|email" />
    </div>
    
<div class="form-group">
         <label name="id_categoria" for="sel1">Categoria</label>        
        <select class="form-control" id="sel1" name="id_categoria">            
            <option value="13">1-Restaurant</option>
            <option value="17">2-Hotel</option>
            <option value="18">3-Empresa</option>
            
        </select>
    </div>

    <hr />    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#frm-cliente").submit(function(){
            return $(this).validate();
        });
    })
</script>