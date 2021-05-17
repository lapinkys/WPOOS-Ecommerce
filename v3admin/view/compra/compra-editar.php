<h1 class="page-header">
    <?php echo $compra->id != null ? $compra->cliente : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=compra">Titulo del Juego</a></li>
  <li class="active"><?php echo $compra->id != null ? $compra->cliente : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=compra&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $compra->id; ?>" />
      <div class="form-group">
        <div class="form-group">
            <label>Nombre del Cliente</label>
                <select id="cliente" name="cliente" value="echo $compra->cliente" class="form-control selectpicker" data-live-search="true" required>
                    <option value="">seleccione Cliente</option>
                    <?php foreach($this->model->ListarCliente() as $r): ?>
                    <option value="<?php echo $r->Nombre." ".$r->Apellido; ?>"><?php echo $r->Nombre." ".$r->Apellido; ?></option>
                    <?php endforeach; ?>
                </select>
        </div>

        <div class="form-group">
            <label>Nombre del juego</label>
                <select id="producto" name="producto" value="echo $compra->juego" class="form-control selectpicker" data-live-search="true" onChange="mostrar(this.value);" required>
                <option value="">seleccione juego</option>
                <?php foreach($this->model->ListarJuego() as $r): ?>
                <option value="<?php echo $precio = $r->titulo.",".$r->precio; ?>"><?php echo $r->titulo.",".$r->precio; ?></option>
                <?php endforeach; ?>
                </select>
        </div>

    <div class="form-group">
        <label>Cantidad</label>
        <input type="text" name="cantidad" value="<?php echo $compra->cantidad; ?>" class="form-control" placeholder="Ingrese la cantidad" required>
    </div>
    
    <div class="form-group">
        <label>IVA</label>
        <input type="text" name="iva" value="<?php echo $compra->iva; ?>" class="form-control" placeholder="Ingrese el iva" required>
    </div>

    <div class="form-group">
        <label>Estado</label>
        <select name="estado" class="form-control">
            <option value="activa">Activa</option>
            <option value="cancelada">Cancelada</option>
            <option value="pagada">Pagada</option>
        </select>
    </div>    

    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
