<h1 class="page-header">
    <?php echo 'Reservacion ',$reservation->id != null ? $reservation->id : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=reservation">reservation</a></li>
  <li class="active"><?php echo $reservation->id != null ? $reservation->id : 'Nuevo Registro'; ?></li>
</ol>
<form id="frm-alumno" action="?c=reservation&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $reservation->id; ?>" />
      <div class="form-group">
        <label>Id</label>
        <input type="text" name="id" value="<?php echo $reservation->id; ?>" class="form-control" placeholder="Ingrese su id" required>
    </div>
    
    <div class="form-group">
        <label>Room type_id</label>
        <input type="text" name="name" value="<?php echo $reservation->room_type_id; ?>" class="form-control" placeholder="Ingrese tipo id habitacion" readonly>
    </div>
    
    <div class="form-group">
        <label>Start Date</label>
        <input type="date" name="startDate" value="<?php echo $reservation->startDate; ?>" class="form-control" placeholder="Ingrese la fecha inicial" required>
    </div>

    <div class="form-group">
        <label>End Date</label>
        <input type="date" name="endDate" value="<?php echo $reservation->endDate; ?>" class="form-control" placeholder="Ingrese la fecna final" required>
    </div>

    <div class="form-group">
        <label>Admin id</label>
        <input type="text" name="admin_id" value="<?php echo $reservation->admin_id; ?>" class="form-control" placeholder="Ingrese la fecna final" required>
    </div>
    
  
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Save</button>
    </div>
</form>

<script>


    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>