@extends('app')

@section('content')

<div class="row" >
    <div class="col-xs-12 col-lg-12">
      <h1 class="page-header">Crud@</h1>
    </div>
    <div class="row">
    <div class="col-lg-7">
      <a href="#" class="btn btn-primary pull-right">Nueva Tarea</a>
    </div>
  </div>
    <table class="table table-hover table-sprite" id="lista">
      <thead class="">
        <tr>
          <th>ID</th>
          <th>Tarea</th>
          <th colspan="2">
            &nbsp;

          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="keep in keeps">
          <td width="10px"></td>
          <td>@{{keep.id}}</td>
          <td>
            <a href="#" class="btn-warning btn-sm">Editar</a>
          </td>
          <td>
            <a href="#" class="btn-danger btn-sm">Eliminar</a>
          </td>

        </tr>
      </tbody>
    </table>
</div>
<div class="col-sm-5" >
  <pre>

  </pre>
</div>

@endsection
