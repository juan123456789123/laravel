
<h1>
crear usuario
</h1>
<form action="{{ url('/usuarios') }}" method="post">
    @csrf
    @include('usuarios.form')
</form>