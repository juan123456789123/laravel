<h1>
    lista de usuarios
</h1>
@if (Session::has('mensaje'))
{{Session::get('mensaje')}}
    
@endif

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>IdPersonal</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>Email</th>
            <th>NickName</th>
            <th>Password</th>
            <th>IdRol</th>
            <th>CreateAt</th>
            <th>UpdateAt</th>
            <th>Enable</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>acciones</th>

        </tr>
    </thead>
    <tbody>
       @foreach ($usuarios as $usuario)
       <tr>
        <th>{{$usuario->id}}</th>
        <th>{{$usuario->IdPersonal}}</th>
        <th>{{$usuario->nombre}}</th>
        <th>{{$usuario->apellido}}</th>
        <th>{{$usuario->Email}}</th>
        <th>{{$usuario->NickName}}</th>
        <th>{{$usuario->Password}}</th>
        <th>{{$usuario->IdRol}}</th>
        <th>{{$usuario->CreateAt}}</th>
        <th>{{$usuario->UpdateAt}}</th>
        <th>{{$usuario->Enable}}</th>
        <th>{{$usuario->created_at}}</th>
        <th>{{$usuario->updated_at}}</th>
        <th>
            <a href="{{url('usuarios/'.$usuario->id.'/edit')}}">
            edit
            </a>
            || 
            
            <form action="{{ url('usuarios/'.$usuario->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
            <input type="submit" value="borrar" onclick="return confirm('¿Quieres eliminar el registro?')">
            </form></th>
       </tr>
           
       @endforeach
    </tbody>
</table>
