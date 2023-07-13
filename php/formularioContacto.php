<div id="formularioContacto">
    <div class="pt-3 px-2 mb-2 d-flex justify-content-center">
        <img style="height:5rem" src="src/img/userProfileIcon.svg" alt="">
    </div>
    <form id="formulario">
        <div class="d-flex">
            <div class="col-6 ps-3 pe-1">
                <label for="nombre" class="form-label"><i class="mx-2 bi bi-person-fill"></i>Nombre/s</label>
                <input name="nombre" placeholder="nombre" id="nombre" type="text" class="form-control">
            </div>
            <div class="col-6 ps-1 pe-3">
                <label for="apellido" class="form-label"><i class="mx-2 bi bi-person"></i>Apellidos</label>
                <input name="apellido" placeholder="apellido" id="apellido" type="text" class="form-control">
            </div>
        </div>
        <div class="px-3 mt-2">    
            <label for="email" class="form-label"><i class="mx-2 bi bi-envelope-at-fill"></i>Correo eléctronico</label>
            <input name="email" id="email" placeholder="em@il" type="email" class="form-control">
        </div>
        <div class="px-3 mt-2">    
            <label for="negocio" class="form-label"><i class="mx-2 bi bi-buildings-fill"></i>Nombre del negocio(opcional)</label>
            <input name="negocio" id="negocio" type="text" class="form-control" placeholder="negocio">
        </div>
        <div class="px-3 mt-2">
            <label for="paquete" class="form-label"><i class="mx-2 bi bi-box-fill"></i>Escoge el plan que te interesa</label>
            <select name="paquete" class="form-select" id="paquete">
                <option value="1" selected>Básico $300USD</option>
                <option value="2">Avanzado</option>
                <option value="3">Premium</option>
            </select>
        </div>
        <div class="px-3 mt-2">
            <label for="telefono" class="form-label"><i class="mx-2 bi bi-telephone-fill"></i>Télefono de contacto</label>
            <input name="telefono" type="tel" class="form-control" placeholder="télefono" id="telefono">
        </div>
        <div class="px-3 mt-2">    
            <label for="mensaje" class="form-label"><i class="mx-2 bi bi-chat-left-text-fill"></i>Dejanos un mensaje</label>
            <textarea name="mensaje" id="mensaje" style="resize:none; width:100%; height:15vh;"></textarea>
        </div>
        <div class="px-3 mt-2">
            <div class="d-flex justify-content-center">
                <input id="terminos" type="checkbox" class="m-0 form-check-input">
                <label for="terminos" style="font-size:.85rem;" class="ps-2 form-check-label">Acepta nuestras <a href="">póliticas de privacidad</a> para continuar</label>
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-center">
            <button class="py-2" id="botonEnviarFormulario" type="submit">Solicitar informes</button>
        </div>
    </form>
</div>