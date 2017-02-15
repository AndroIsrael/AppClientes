<h1 class="page-header">
    <?php echo  'Registro de cliente'; ?>

</h1>

<ol class="breadcrumb">
  <li><a href="?c=cliente">Clientes</a></li>
  <li class="active"><?php echo 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-cliente" action="?c=Categoria&a=Guardar" method="post" enctype="multipart/form-data">
    
    <input type="hidden" name="id" value="<?php echo $ca->id; ?>">
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="" class="form-control" placeholder="Ingrese su nombre" />
    </div>
    
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