<h1 class="page-header">
    <?php echo $user->id != null ? $user->firstName : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=user">user</a></li>
  <li class="active"><?php echo $user->id != null ? $user->firstName : 'Nuevo Registro'; ?></li>
</ol>
<form id="frm-alumno" action="?c=user&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $user->id; ?>" />
      <div class="form-group">
        <label>ID</label>
        <input type="text" name="id" value="<?php echo $user->id; ?>" class="form-control" placeholder="Ingrese su id" required>
    </div>
    
    <div class="form-group">
        <label>First Name</label>
        <input type="text" name="firstName" value="<?php echo $user->firstName; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="lastName" value="<?php echo $user->lastName; ?>" class="form-control" placeholder="Ingrese su apellido" required>
    </div>
    <div class="form-group">
        <label>Phone Numer</label>
        <input type="text" name="phoneNumber" value="<?php echo $user->phoneNumber; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
    <div class="form-group">
        <label>Birth Date</label>
        <input type="date" name="birthDate" value="<?php echo $user->birthDate; ?>" class="form-control" placeholder="Ingrese su fecha de nacimiento" required>
    </div>
    
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?php echo $user->email; ?>" class="form-control" placeholder="Ingrese su email" required>
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