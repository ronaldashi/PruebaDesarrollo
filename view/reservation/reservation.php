<html>
<h1 class="page-header">Reservation </h1>
<p></p>


<table class="table  table-striped  table-hover" id="tabla3">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">Id</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Room Type id</th>
            <th style=" background-color: #5DACCD; color:#fff">Start Date</th>
            <th style=" background-color: #5DACCD; color:#fff">End Date</th>
            <th style=" background-color: #5DACCD; color:#fff">Admin Id</th>
             
            
                        
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->toList() as $r): ?>
        <tr>
         <td><?php echo $r->id; ?></td>
            <td><?php echo $r->room_type_id; ?></td>
            <td><?php echo $r->startDate; ?></td>
            <td><?php echo $r->endDate; ?></td>
            <td><?php echo $r->admin_id; ?></td>
            
            <td>
                <a  class="btn btn-warning" href="?c=reservation&a=Crud&id=<?php echo $r->id; ?>">Edit</a>
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
