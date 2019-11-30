@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Editar Usuario</div>
                 
        <div class="panel-body">

               @if (session('notification'))
            <div class="alert alert-warning"> 
                <ul>
                    {{ session('notification')}}                    
                </ul>                
            </div>
            @endif
            

             @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>                
            </div>
            @endif

            <form action="" method="POST">
                 {{ csrf_field() }}
                        
                         <div class="form-group">
                            <label for="email">Correo</label>
                                <input type="email" name="email" class="form-control" readonly value="{{ old('email',$user->email) }}">
                        </div>
                            
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name',$user->name) }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña <em>Ingrese si desea modificar</em></label>
                            <input type="text" name="password" class="form-control" value="{{ old('password') }}">
                        </div>
                            
                        <div class="form-group">
                            <button class="btn btn-primary">Guardar Usuario</button>
                        </div> 

          </form>

            <form action="/proyecto-usuario" method="POST">
                  {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <div class="row">
                    <div class="col-md-4">
                        <select name="project_id" class="form-control" id="select-project">
                            <option value="">Seleccione el Proyecto</option>
                            @foreach ($projects as $project)
                                <option value="{{ $project->id}}">{{ $project->name}}</option>

                            @endforeach
                        </select>                    
                    </div>
                    <div class="col-md-4">
                        <select name="level_id" class="form-control" id="select-level">
                            <option value="">Seleccione Nivel</option>
                        </select>                    
                    </div>                
                    <div class="col-md-4">     
                        <button class="btn btn-primary btn-block">Asignar Proyecto</button>
                    </div>
                </div>
            </form>


            <p>Proyectos asignados</p>



            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Proyecto</th>
                        <th>Nivel</th>
                        <th>Opciones</th>                        
                    </tr>
                </thead>
                <tbody>
                
                @foreach ($projects_user as $project_user)
                    <tr>
                        <td>{{ $project_user->project->name }}</td>
                        <td>{{ $project_user->level->name }}</td>
                        <td>                           
                            <a href="/proyecto-usuario/{{ $project_user->id }}/eliminar" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>



        </div>
</div>
       
@endsection

@section('scripts')
    <script src="/js/admin/users/edit.js"></script>
@endsection