
<h1 class="page-header">Alquiler de beatriz sarmiento </h1>

<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Codigo</th>
            <th style=" background-color: #5DACCD; color:#fff">Juego</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Precio</th> 
            <th style="width:180px; background-color: #5DACCD; color:#fff">Fecha</th> 
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->juego; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td><?php echo $r->Fecha; ?></td>            
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
