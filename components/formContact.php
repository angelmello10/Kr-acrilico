<div class="row contact-wrap"> 
    <div class="status alert alert-success" style="display: none"></div>
    <form id="main-contact-form" class="contact-form" name="contact-form" method="post"  enctype="multipart/form-data" onsubmit="return validarFormulario()">
        <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
                <label>Nombre: (Obligatorio)</label>
                <input type="text" name="name" class="form-control" required oninput="validarNombre(this)">
            </div>
            <div class="form-group">
                <label>Correo: (Obligatorio)</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Teléfono: (Obligatorio)</label>
                <input type="text" name="telefono" class="form-control" required oninput="validarTelefono(this)" maxlength="10">
            </div>
            <div class="form-group">
                <label>Envíanos tu diseño (Máx: 10MB por archivo):</label>
                <input type="file" name="diseños[]" class="form-control" multiple id="fileInput">
            </div>  
        </div>
        <div class="col-sm-5">           
            <div class="form-group">
                <label>Indícanos medidas, colores o cualquier personalización que necesites:</label>
                <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
            </div>                        
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </div>
    </form> 
</div>

<script>
function validarNombre(input) {
    input.value = input.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, ''); // Solo letras y espacios
}

function validarTelefono(input) {
    input.value = input.value.replace(/\D/g, ''); // Solo números
}

function validarFormulario() {
    let archivos = document.getElementById('fileInput').files;
    let maxSizeTotal = 10 * 1024 * 1024; // 10MB en bytes
    let totalSize = 0;

    for (let i = 0; i < archivos.length; i++) {
        totalSize += archivos[i].size;
    }

    if (totalSize > maxSizeTotal) {
        alert("El tamaño total de los archivos supera el límite de 10MB.");
        return false; // Cancela el envío del formulario
    }

    return true; // Permite el envío si el tamaño total es válido
}

</script>
