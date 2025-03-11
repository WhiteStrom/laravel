<div>

    <center>
        <h1>Crear Producto</h1>
    </center>

    <br>

    <form action="{{route('productos.formdata')}}" method="POST">
        @csrf
        <label>Nombre
        <input type="text" name="Nombre" id="Nombre">
        </label>        
        <br>
        <label>Precio
        <input type="text" name="Precio" id="Precio">
        </label>    
        <br>
        <label>Existencias
        <input type="text" name="Existencias" id="Existencias">
        </label>
        <br>
        <button type="submit">Crear</button>
    </form>
</div>