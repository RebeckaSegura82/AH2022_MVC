<main class="contenedor contenido-centrado seccion-amarillo">
    <h1 class="p-rosa">Contacto</h1>

    <?php if($mensaje) { ?>
        <p class="alerta exito"> <?php echo $mensaje; ?> </p>
    <?php } ?>

    <div class="contenedor-2-secciones">
        <div>
            <form class="formulario" action="/contacto" method="POST">
                <fieldset>
                    <label class="p-azul" for="nombre">Nombre</label>
                    <input type="text" placeholder="Tu Nombre" id="nombre" name="contacto[nombre]" required>
        
                    <label class="p-azul" for="email">E-mail</label>
                    <input type="email" placeholder="Tu E-mail" id="email" name="contacto[email]" required>
        
                    <label class="p-azul" for="telefono">Telefono <i class="fab fa-whatsapp"></i></label>
                    <input type="tel" placeholder="Tu Teléfono" id="telefono" name="contacto[telefono]">
        
                    <label class="p-azul" for="mensaje">Mensaje</label>
                    <textarea id="mensaje" name="contacto[mensaje]" required></textarea>
                </fieldset>
                <input type="submit" value="Enviar" class="boton-rosa">
            </form>
        </div>
        <div class="seccion-flex-column">
            <div class="seccion">
                <div class="grid-20-80">
                    <i class="fab fa-facebook supersize p-azul"></i>
                    <a href="https://www.facebook.com/AsesoriasHoy" class="p-azul"> Facebook</a>
                        
                    <i class="fab fa-instagram supersize p-rosa"></i>
                    <a href="https://www.instagram.com/asesoriashoy/" class="p-rosa"> Instagram</a>
                
                </div>
            </div> <!-- .seccion -->
            <div class="seccion">
                <div class="center">
                    <i class="fab fa-whatsapp supersize p-verde"></i>
                    <p class="p-verde margin-cero">whatsApp</p>
                    <p class="p-verde margin-cero">812 428 0034</p>
                </div>
                <p class="p-gris center">Hda. Santa Lucía 6432, Hda. Mitras, <br> 
                    Monterrey Nuevo León, México.</p> 
            </div>
        </div>
    </div>
</main>