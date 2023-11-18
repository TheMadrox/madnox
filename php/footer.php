<?php
    echo '
    <link rel="stylesheet" href="/styles/footer.css">
    <div id="footer__space"></div>
    <footer>
    <div class="container-fluid">
        <div class="row">
            <div class="my-3 col-12 col-md-4 p-0 d-flex flex-column align-items-center justify-content-center">
                <div class="d-inline-flex my-3 px-3">
                    <img heigth="100%" width="25%" loading="lazy" id="logoFooter" src="/src/img/madnoxLogo.svg" alt="MadNox Logo">
                    <img heigth="100%" width="75%" loading="lazy" id="textoLogoFooter"src="/src/img/madnoxLogoTipografia.svg" alt="MadNox Logo Escrito">
                </div>
                <p class="contactoFooter">Contacto:</p>
                <p class="contactoFooter">+(52)552-522-38-63</p>
                <p class="contactoFooter">contact@madnox.net</p>
            </div>
            <div class="col-12 col-md-8 d-flex flex-column m-0 p-0">
                <div class="my-md-2 mb-2 d-flex redesSociales justify-content-around">
                    <i class="bi bi-facebook"></i>
                    <i class="bi bi-twitter"></i>
                    <i class="bi bi-instagram"></i>
                    <i class="bi bi-whatsapp"></i>
                    <i class="bi bi-github"></i>
                </div>
                <hr>
                <div class="d-flex" id="enlacesFooter">
                    <div class="col-4">
                        <div class="flex-column px-2 columnaFooter">
                            <h4>Legal</h4> 
                            <a class="linkFooter" href="/legal?leg=0">Términos y condiciones</a>
                            <a class="linkFooter" href="/legal?leg=1">Política de privacidad</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="flex-column px-2 columnaFooter">
                            <h4>Soporte</h4>
                            <a href="#" class="linkFooter">Unete al equipo</a> 
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="flex-column px-2 columnaFooter">
                            <h4>Atribuciones</h4>
                            <a href="#" class="linkFooter">Créditos</a>
                        </div>
                    </div>
                </div> 
            </div>
            <hr>
            <div id="copyLogo" class="d-flex justify-content-center">
                <p class="m-0">MADNOX 2023 Copyright © Derechos Reservados</p>
            </div>
        </div>
    </div>
</footer>';
?>
<script>
    const footerSpace = document.getElementById("footer__space");
    const footer = document.getElementsByTagName("footer");
    window.addEventListener("load", ()=>{
        footerSpace.style.height = footer[0].offsetHeight + "px";
        footer[0].style.opacity= 1;
    })
    window.addEventListener("resize", ()=>{
        footerSpace.style.height = footer[0].offsetHeight + "px";
    })
</script>