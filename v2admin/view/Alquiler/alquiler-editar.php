<h1 class="page-header">
    <?php echo $alquiler->id != null ? $alquiler->Cliente : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=alquiler">Titulo del Juego</a></li>
  <li class="active"><?php echo $alquiler->id != null ? $alquiler->Cliente : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=alquiler&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alquiler->id; ?>" />
      <div class="form-group">
        <div class="form-group">
            <label>Nombre del Cliente</label>
                <select id="Cliente" name="Cliente" value="echo $alquiler->Cliente" class="form-control selectpicker" data-live-search="true" required>
                    <option value="">seleccione Cliente</option>
                    <?php foreach($this->model->ListarCliente() as $r): ?>
                    <option value="<?php echo $r->Nombre." ".$r->Apellido; ?>"><?php echo $r->Nombre." ".$r->Apellido; ?></option>
                    <?php endforeach; ?>
                </select>
        </div>
        <div class="form-group">
            <label>Nombre del juego</label>
                <select id="juego" name="juego" value="echo $alquiler->juego" class="form-control selectpicker" data-live-search="true" required>
                <option value="">seleccione Juego</option>
                <?php foreach($this->model->ListarJuego() as $r): ?>
                <option value="<?php echo $r->titulo; ?>"><?php echo $r->titulo; ?></option>
                <?php endforeach; ?>
                </select>
        </div>

    <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="Fecha" value="<?php echo $alquiler->Fecha; ?>" class="form-control" readonly onmousedown="return false;" />
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