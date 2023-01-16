lista comun de datos 

<div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="IdPersonal" id="IdPersonal" aria-describedby="helpId" placeholder=""value="{{ isset($usuarios->IdPersonal)?$usuarios->IdPersonal:''}}">
    <small id="helpId" class="form-text text-muted">IdPersonal</small>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" value="{{isset($usuarios->nombre)?$usuarios->nombre:''}}">
    <small id="helpId" class="form-text text-muted" >nombre</small>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder=""value="{{ isset($usuarios->apellido)?$usuarios->apellido:''}}">
    <small id="helpId" class="form-text text-muted" > apellido</small>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="Email" id="Email" aria-describedby="helpId" placeholder=""value="{{isset($usuarios->Email)?$usuarios->Email:''}}">
    <small id="helpId" class="form-text text-muted"> Email</small>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="NickName" id="NickName" aria-describedby="helpId" placeholder=""value="{{isset($usuarios->NickName)?$usuarios->NickName:''}}">
    <small id="helpId" class="form-text text-muted">NickName</small>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="Password" id="Password" aria-describedby="helpId" placeholder=""value="{{ isset($usuarios->Password)?$usuarios->Password:''}}">
    <small id="helpId" class="form-text text-muted">Password</small>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="IdRol" id="IdRol" aria-describedby="helpId" placeholder=""value="{{ isset($usuarios->IdRol)?$usuarios->IdRol:''}}">
    <small id="helpId" class="form-text text-muted">IdRol</small>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="CreateAt" id="CreateAt" aria-describedby="helpId" placeholder=""value="{{isset($usuarios->CreateAt)?$usuarios->CreateAt:''}}">
    <small id="helpId" class="form-text text-muted">CreateAt</small>
  </div>
  
  <div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="UpdateAt" id="UpdateAt" aria-describedby="helpId" placeholder="" value="{{isset($usuarios->UpdateAt)?$usuarios->UpdateAt:''}}">
    <small id="helpId" class="form-text text-muted">UpdateAt</small>
  </div>
  
  
  <div class="mb-3">
    <label for="" class="form-label"></label>
    <input type="text" class="form-control" name="Enable" id="Enable" aria-describedby="helpId" placeholder=""value="{{isset ($usuarios->Enable)?$usuarios->Enable:''}}">
    <small id="helpId" class="form-text text-muted">Enable</small>
  </div>
  <div class="mb-3">
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>