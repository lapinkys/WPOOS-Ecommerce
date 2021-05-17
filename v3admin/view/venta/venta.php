<h1 class="page-header">Ventas Diarias </h1>


<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Codigo</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Cliente</th>
            <th style=" background-color: #5DACCD; color:#fff">Juego</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Precio Neto</th> 
            <th style="width:180px; background-color: #5DACCD; color:#fff">Precio Total</th> 
            <th style="width:180px; background-color: #5DACCD; color:#fff">Fecha</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->cliente; ?></td>
            <td><?php echo $r->producto; ?></td>
            <td><?php echo $r->neto; ?></td>
            <td><?php echo $r->total; ?></td>
            <td><?php echo $r->fecha; ?></td> 
                  
        </tr>
    <?php endforeach; ?>

    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th style="width:180px; background-color: #5DACCD; color:#fff">Total Precio Neto</th>
        <?php foreach($this->model->SumarTotalNeto() as $r): ?>
        <td><?php echo $r->TotalNeto; ?></td>  
        <?php endforeach; ?>         
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <th style="width:180px; background-color: #5DACCD; color:#fff">Total Precio Total</th>
        <?php foreach($this->model->SumarTotal() as $r): ?>
           <td><?php echo $r->TotalFactura ?></td>   
        <?php endforeach; ?>         
    </tr>
    </tbody>
</table> 
<br><br><br>

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
