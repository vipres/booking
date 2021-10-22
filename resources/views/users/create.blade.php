@extends('layouts.main', ['activePage' => 'users', 'title' => __('Nuevo Usuario')])
@section('content')
   <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <form action="{{ route('users.store') }}" method="post" class="form-horizontal">
                      @csrf
                      <div class="card">
                          <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">
                                Ingresar Datos
                            </p>
                          </div>
                          <div class="card-body">
                              <div class="row">
                                  <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                  <div class="col-sm-7">
                                      <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese Nombre" autofocus>
                                  </div>
                              </div>
                              <div class="row mt-3">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-7">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Ingrese Usuario">
                                </div>
                              </div>
                              <div class="row mt-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese Email">
                                </div>
                              </div>
                              <div class="row mt-3">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-7">
                                    <input type="Password" name="password" id="password" class="form-control" placeholder="Ingrese Contraseña">
                                </div>
                              </div>

                          </div>
                          <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
   </div>
@endsection
