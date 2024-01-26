<div>
    <form id="formulario" action="../HTML/valida.php" method="post">
        <fieldset class="form-group border p-3">
            <legend>Datos usuario</legend>
            <div class="form-group">
                <label for="nombre">Escribe tu nombre: </label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="edad">Escribe tu edad: </label>
                <input type="text" name="edad" id="edad" class="form-control">
            </div>
            <div class="form-group">
                <label for="correo">Escribe tu correo: </label>
                <input type="text" name="correo" id="correo" class="form-control">
            </div>
            <button id="btnGuardar" class="btn-success">Guardar</button>
        </fieldset>
    </form>
</div>
<script>
    function validaForm() {
        let nombre = document.forms["formulario"]["nombre"].value;
        let n = document.forms["formulario"]["nombre"].id;
        if (nombre.length < 8) {
            document.getElementById(n).style.border = "2px solid red";
            document.getElementById(n).style.background = "yellow";
            document.getElementById(n).value = "";
            document.getElementById("msj").style.color = "red";
            document.getElementById("msj").innerHTML = "No se admiten menos de 8 caracteres";
            return false;
        }
    }
</script>