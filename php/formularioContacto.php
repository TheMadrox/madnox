<div id="formularioContacto">
    <div class="pt-3 px-2 mb-2 d-flex justify-content-center">
        <img loading="lazy" width="100%" height="100%" style="height:5rem" src="src/img/userProfileIcon.svg" alt="">
    </div>
    <form id="formulario">
        <div class="d-flex">
            <div class="col-6 ps-3 pe-1">
                <div class="d-flex">
                    <label for="nombre" class="form-label"><i class="mx-2 bi bi-person-fill"></i>Nombre</label>
                    <span class="validado -nombre ps-2"><i class="bi bi-check-circle-fill"></i></span>
                </div>
                <input required name="nombre" placeholder="nombre" id="nombre" type="text" class="form-control">
                <div class="alertaValidacion -nombre  alert alert-danger mb-2 p-2">
                    El nombre no es válido 
                </div>
            </div>
            <div class="col-6 ps-1 pe-3">
                <div class="d-flex">
                    <label for="apellido" class="form-label"><i class="mx-2 bi bi-person"></i>Apellido</label>
                    <span class="validado -apellido ps-2"><i class="bi bi-check-circle-fill"></i></span>
                </div>
                <input required name="apellido" placeholder="apellido" id="apellido" type="text" class="form-control">
                <div class="alertaValidacion -apellido  alert alert-danger mb-2 p-2">
                    El apellido no es válido
                </div>
            </div>
        </div>
        <div class="px-3 mt-2">
            <div class="d-flex">
                <label for="email" class="form-label"><i class="mx-2 bi bi-envelope-at-fill"></i>Correo eléctronico</label>
                <span class="validado -email ps-2"><i class="bi bi-check-circle-fill"></i></span>
            </div>
            <input required name="email" id="email" placeholder="micorreo@ejemplo.com" type="text" class="form-control">
            <div class="alertaValidacion -email alert alert-danger mb-2 p-2">
                El correo no es válido
            </div>
        </div>
        <div class="px-3 mt-2">
            <div class="d-flex">
                <label for="negocio" class="form-label"><i class="mx-2 bi bi-buildings-fill"></i>Nombre del negocio(opcional)</label>
                <span class="validado activo -negocio ps-2"><i class="bi bi-check-circle-fill"></i></span>
            </div> 
            <input name="negocio" id="negocio" type="text" class="form-control" placeholder="negocio">
        </div>
        <div class="px-3 mt-2">
            <div class="d-flex">
                <label for="paquete" class="form-label"><i class="mx-2 bi bi-box-fill"></i>Escoja un plan que le interese</label>
                <span class="validado -paquete activo ps-2"><i class="bi bi-check-circle-fill"></i></span>
            </div> 
            <select name="paquete" class="form-select" id="paquete">
                <option value="1" selected>Landing Page</option>
                <option value="2">Sitio Web</option>
                <option value="3">E-commerce</option>
            </select>
        </div>
        <div class="px-3 mt-2">
            <div class="d-flex flex-column">
                <div class="d-flex">
                    <label for="telefono" class="form-label"><i class="mx-2 bi bi-telephone-fill"></i>Télefono de contacto</label>
                    <span class="validado -telefono ps-2"><i class="bi bi-check-circle-fill"></i></span>
                </div>
                <input required name="telefono" type="tel" class="form-control" id="telefono">
                <div class="alertaValidacion -telefono  alert alert-danger mb-2 p-2">
                    El teléfono no es válido
                </div>
            </div>
        </div>
        <div class="px-3 mt-2">
            <div class="d-flex">
                <label for="mensaje" class="form-label"><i class="mx-2 bi bi-chat-left-text-fill"></i>Dejanos un mensaje</label>
                <span class="validado -mensaje ps-2"><i class="bi bi-check-circle-fill"></i></span>
            </div> 
            <textarea required name="mensaje" id="mensaje" style="resize:none; width:100%; height:15vh;"></textarea>
            <div class="alertaValidacion -mensaje  alert alert-danger mb-2 p-2">
                No hay mensaje o es muy corto
            </div>
        </div>
        <div class="px-3 mt-2">
            <div class="d-flex justify-content-center">
                <input required name="terminos" id="terminos" type="checkbox" class="m-0 form-check-input">
                <label for="terminos" style="font-size:.85rem;" class="ps-2 form-check-label">Acepta nuestras <a href="/legal?leg=1" target="_blank">póliticas de privacidad</a> para continuar</label>
            </div>
            <div class="alertaValidacion -terminos  alert alert-danger mb-2 p-2">
                Acepte nuestros términos para continuar
            </div>
        </div>
        <div class="mt-3 d-flex justify-content-center">
            <button class="py-2" id="botonEnviarFormulario" type="submit">¡Hablemos!</button>
        </div>
    </form>
</div>