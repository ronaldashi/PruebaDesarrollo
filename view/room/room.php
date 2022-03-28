<html>
<h1 class="page-header">Room </h1>
<p></p>


<table class="table  table-striped  table-hover" id="tabla2">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Id</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Name</th>
            <th style=" background-color: #5DACCD; color:#fff">Nof</th>
             
            
                        
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->toList() as $r): ?>
        <tr>
         <td><?php echo $r->id; ?></td>
            <td><?php echo $r->name; ?></td>
            <td><?php echo $r->nof; ?></td>
            
            
            <td>
                <a  class="btn btn-warning" href="?c=room&a=Crud&id=<?php echo $r->id; ?>">Edit</a>
            </td>
            <td>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="assets/js/datatable.js">  

</script>

</html>
