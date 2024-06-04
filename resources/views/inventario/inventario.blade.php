@extends('layouts/header')

@section('title', 'Usuarios')

@section('content')

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Inventario Activos</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Inventario Inactivos</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="ventas-tab" data-bs-toggle="tab" data-bs-target="#ventas-tab-pane" type="button" role="tab" aria-controls="ventas-tab-pane" aria-selected="false">Ventas</button>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        <button class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#inventarioModal"><i class="mdi mdi-plus-circle-outline"></i> Añadir Inventario</button>
      </div>
      <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        <button id="message">message</button>
      </div>
      <div class="tab-pane fade" id="ventas-tab-pane" role="tabpanel" aria-labelledby="ventas-tab" tabindex="0">ventas</div>
    </div>


<!-- Modal -->
<div class="modal fade" id="inventarioModal" tabindex="-1" aria-labelledby="inventarioModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>

<script>
  $('#message').on('click', function(){
    Swal.fire({
    title: "The Internet?",
    text: "That thing is still around?",
    icon: "question"
  });
  });
</script>

@endsection