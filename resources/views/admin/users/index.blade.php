@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Usuarios <span class="glyphicon glyphicon-user" ></div>
                 
        <div class="panel-body">

             @if (session('notification'))
            <div class="alert alert-success"> 
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
                                <input type="email" name="email" class="form-control" value="{{ old('email')}}">
                        </div>
                            
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="text" name="password" class="form-control" value="{{ old('password',str_random(8)) }}">
                        </div>
                            
                        <div class="form-group">
                            <button class="btn btn-primary">Registar Usuario</button>
                        </div>                       
            </form>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Correo</th>
                        <th>Nombre</th>
                        <th>Opciones</th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr> 
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->name }}</td>                        
                        <td>
                            <a href="/usuario/{{$user->id}}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil" ></span>

                            </a>
                            <a href="/usuario/{{$user->id}}/eliminar" class="btn btn-sm btn-danger" title="Eliminar">
                            <span class="glyphicon glyphicon-trash"> </span>
                            </a>                          
                        </td>                        
                    </tr>
                    @endforeach

                </tbody>

            </table>



        </div>
</div>
       
@endsection
