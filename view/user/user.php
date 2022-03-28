<html>
<h1 class="page-header">User </h1>
<p></p>


<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">ID</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">First Name</th>
            <th style=" background-color: #5DACCD; color:#fff">Last Name</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Phone Number</th> 
            <th style=" background-color: #5DACCD; color:#fff">Birth Date</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Email</th>            
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
            <th style="width:60px; background-color: #5DACCD; color:#fff"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->toList() as $r): ?>
        <tr>
         <td><?php echo $r->id; ?></td>
            <td><?php echo $r->firstName; ?></td>
            <td><?php echo $r->lastName; ?></td>
            <td><?php echo $r->phoneNumber; ?></td>
            <td><?php echo $r->birthDate; ?></td>            
            <td><?php echo $r->email; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=user&a=Crud&id=<?php echo $r->id; ?>">Edit</a>
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
