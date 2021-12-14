<h1>Crear un nuevo evento</h1>
<form action="{{ url('/events') }}" method="POST" enctype="multipart/form-data">
    <!--  route('event.store')  -->
    @csrf
    <label for="edNombre">Nombre: </label>
    <input id="edNombre" name="edNombre" type="text">
    <br>
    <label for="edDescripcion">Descripción: </label>
    <input id="edDescripcion" name="edDescripcion" type="text">
    <br>
    <!--  No se pone el atributo name al submit para que no se envíe -->
    <input type="submit" value="Guardar">
</form>
