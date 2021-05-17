<h1 class="page-header">CRUD de Alquiler </h1>


    <a class="btn btn-primary pull-right" href="?c=alquiler&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Codigo</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Cliente</th>
            <th style=" background-color: #5DACCD; color:#fff">Juego</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Precio</th> 
            <th style="width:180px; background-color: #5DACCD; color:#fff">Fecha</th>          
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->Cliente; ?></td>
            <td><?php echo $r->juego; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td><?php echo $r->Fecha; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=alquiler&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=alquiler&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
