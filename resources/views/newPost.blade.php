@extends('layouts.appgeneric')
@section('content')
<div class="jumbotron mt-3">
  <!--lo siento pero nesecito mi css-->
  <div class="jumbotron mt-3">
    <div class="content">
      <div class="cabezera">
          <h1>New Post</h1>
      </div>
      <form class="" action="index.html" method="post">
        <div id="div_file">
          <img src="{{asset('img/upload1600.png')}}" alt="Subir Imagen" class="autosizeImg" >
          <input type="file" name="imputFile" value=""  id="btnEnviar">
        </div>
        <p>New Image</p>
        <input type="submit" name="btn-submit" value="Upload" class="btn btn-primary btn-lg btn-block">
      </form>
    </div>
  </div>
</div>
@endsection
