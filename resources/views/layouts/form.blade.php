<?php if(session('msg')!= null){ ?>
<?php if(Session()->has('msg')){ ?>
  <div class="alert alert-dark" role="alert">
    <?php echo session('msg'); ?>
  </div>
  <?php } ?>
  <?php } ?>

<form class="form-horizontal"  role="form" method="POST" action="carro" >
  @csrf
  <input type="hidden" />
    <div class="form-group">
    <label for="exampleInputEmail1">Marca</label>
    <input type="text" class="form-control" name="marca"  placeholder="Marca">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">Modelo</label>
  <input type="text" class="form-control" name="modelo"  placeholder="Modelo">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Placa</label>
<input type="text" class="form-control" name="placa" placeholder="Placa">
</div>
<div class="form-inline">
    <div class="col-sm-offset-1 col-sm-5">
      <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>
</form>
