<form action="{{ url('/employee') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name"> <br>

    <label for="firstname">Apellido Patero</label>
    <input type="text" name="firstname" id="firstname"> <br>

    <label for="lastname">Apellido Materno</label>
    <input type="text" name="lastname" id="lastname"> <br>

    <label for="email">Correo</label>
    <input type="email" name="email" id="email"> <br>

    <label for="photo">Foto</label>
    <input type="file" name="photo" id="photo"> <br>


    <input type="submit" id="save" value="Guardar">
</form>
