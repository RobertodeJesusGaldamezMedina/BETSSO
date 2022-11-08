<?php include("../template/cabecera.php"); ?>


<div class="col-md-5">

    <form>
    <div class = "form-group">
    <label for="txtID">ID:</label>
    <input type="text" class="form-control" name="txtID"id="txtID"  placeholder="ID">
    </div>

    <div class = "form-group">
    <label for="txtNombre">Nombre:</label>
    <input type="text" class="form-control" name="txtNombre"id="txtNombre"  placeholder="Nombre">
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
    
    
</div>

<div class="col-md-3">
    Tabla de tipos de usuarios
</div>


<?php include("../template/pie.php"); ?>