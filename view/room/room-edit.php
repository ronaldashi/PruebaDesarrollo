<h1 class="page-header">
    <?php echo $room->id != null ? $room->name : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=room">room</a></li>
  <li class="active"><?php echo $room->id != null ? $room->id : 'Nuevo Registro'; ?></li>
</ol>
<form id="frm-alumno" action="?c=room&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $room->id; ?>" />
      <div class="form-group">
        <label>Id</label>
        <input type="text" name="id" value="<?php echo $room->id; ?>" class="form-control" placeholder="Ingrese su id" required>
    </div>
    
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $room->name; ?>" class="form-control" placeholder="Ingrese su name" required>
    </div>
    
    <div class="form-group">
        <label>Nof</label>
        <input type="text" name="nof" value="<?php echo $room->nof; ?>" class="form-control" placeholder="Ingrese su nof" required>
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