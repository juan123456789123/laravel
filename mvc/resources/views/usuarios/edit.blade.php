
<h1> Modificar formulario de usuario </h1>
    <form action="{{ url('/usuarios/'.$usuarios->id) }}" method="post">
        @csrf
        {{method_field('PATCH')}}
        @include('usuarios.form');
    </form>