<h1 class="page-header">CRUD de VideoJuegos </h1>


    <a class="btn btn-primary pull-right" href="?c=juego&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Codigo</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Titulo</th>
            <th style=" background-color: #5DACCD; color:#fff">Precio</th>           
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
         <td><?php echo $r->codigo; ?></td>
            <td><?php echo $r->titulo; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=juego&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=juego&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
