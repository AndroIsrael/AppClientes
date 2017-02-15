<h1 class="page-header">
    <?php echo $ca->id_categoria !=null ? $ca->nombre : 'Editar datos del cliente'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Clientes</a></li>
  <li class="active"><?php echo $ca->id_categoria!= null ? $ca->nombre:'Editar datos del cliente'; ?></li>
</ol>

<form id="frm-cliente" action="?c=Categoria&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $ca->id_categoria; ?>">
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $ca->nombre; ?>" class="form-control" placeholder="Ingrese su nombre" />
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