<h1 class="page-header">
    <?php echo $juego->id != null ? $juego->titulo : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=juego">Juego</a></li>
  <li class="active"><?php echo $juego->id != null ? $juego->titulo : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=juego&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $juego->id; ?>" />
      <div class="form-group">
        <label>Codigo</label>
        <input type="text" name="codigo" value="<?php echo $juego->codigo; ?>" class="form-control" placeholder="Ingrese su codigo" required>
    </div>
    
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="titulo" value="<?php echo $juego->titulo; ?>" class="form-control" placeholder="Ingrese el titulo del videojuego" required>
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $juego->nombre; ?>" class="form-control" placeholder="Ingrese el nombre del videojuego" required>
    </div>
    
    <div class="form-group">
        <label>Director</label>
        <input type="text" name="director" value="<?php echo $juego->director; ?>" class="form-control" placeholder="Ingrese el nombre del direcor del videojuego" required>
    </div>
    
    <div class="form-group">
        <label>Productor</label>
        <input type="text" name="productor" value="<?php echo $juego->productor; ?>" class="form-control" placeholder="Ingrese el nombre del productor del videojuego" required>
    </div>
    
    <div class="form-group">
        <label>Portagonistas</label>
        <input type="text" name="protagonistas" value="<?php echo $juego->protagonistas; ?>" class="form-control" placeholder="Ingrese el nombre de los protagonistas del videojuego" required>
    </div>

    <div class="form-group">
        <label>Año</label>
        <input type="text" name="año" value="<?php echo $juego->año; ?>" class="form-control" placeholder="Ingrese el año del videojuego" required>
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo $juego->precio; ?>" class="form-control" placeholder="Ingrese el precio del videojuego" required>
    </div>

    <div class="form-group">
        <label>Tecnologias</label>
        <select name="tecnologias" class="form-control">
            <option value="Xbox">Xbox</option>
            <option value="PlayStation">PlayStation</option>
            <option value="Nintendo">Nintendo</option>
            <option value="PC">PC</option>
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