<style>
/* Fondo de la sección de la página de contacto */
.pagina_contacto {
  background: linear-gradient(to bottom, #FFA500, #FF6347);
}

/* Tipo de letra llamativo para los títulos */
.titulo1 h2 {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  font-size: 32px;
  color: #fff;
  text-transform: uppercase;
}

/* Animaciones suaves para el formulario de contacto */
.formulario_contacto input, 
.formulario_contacto button {
  transition: all 0.3s ease;
}

.formulario_contacto input:hover, 
.formulario_contacto input:focus {
  opacity: 0.8;
}

/* Botón de enviar con fondo brillante y efecto hover */
.formulario_contacto button {
  background-color: #FF6347;
  border-radius: 30px;
  color: #fff;
  padding: 10px 25px;
  margin-top: 20px;
}

.formulario_contacto button:hover {
  background-color: #FF4500;
  box-shadow: 0 0 10px rgba(255, 99, 71, 0.5);
}

/* Borde alrededor de los campos de entrada del formulario */
.formulario_contacto input[type="text"],
.formulario_contacto input[type="email"],
.formulario_contacto input[type="password"] {
  border: 2px solid #ccc;
  border-radius: 5px;
  padding: 10px;
}

/* Imágenes o iconos llamativos para los campos de entrada del formulario */
.formulario_contacto input[type="email"] {
  background-image: url('../img/email-icon.png');
  background-size: 20px 20px;
  background-position: 5px center;
  background-repeat: no-repeat;
  padding-left: 30px;
}

.formulario_contacto input[type="text"][name="imagen"] {
  background-image: url('../img/image-icon.png');
  background-size: 20px 20px;
  background-position: 5px center;
  background-repeat: no-repeat;
  padding-left: 30px;
}

/* Diferentes tonos de colores para distinguir visualmente cada campo del formulario */
.formulario_contacto input[type="email"] {
  background-color: #f5f5f5;
}

.formulario_contacto input[type="text"],
.formulario_contacto input[type="password"] {
  background-color: #eee;
}

/* Mensaje de confirmación visual después de enviar el formulario */
.formulario_contacto .mensaje-exito {
  background-color: #5cb85c;
  color: #fff;
  padding: 10px;
  margin-top: 20px;
  text-align: center;
}

</style>
<!--Formulario de contacto -->
<section class="pagina_contacto">
        <div class="container">
          <div class="titulo1">
            <div class="contactanos">Post Nuevo</div>
            <h2>Escribe tu post</h2>
          </div>
          <div class="inner-container">
            <div class="row clearfix">
  <!--Formulario de login -->
                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                  <div class="inner-column">
                    <div class="formulario_contacto">
                      <form method="post" action="../modelo/post_controler.php" id="formulario_contacto">
                        <div class="row clearfix">
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                <input type="email" name="email" value="" placeholder="Email del Autor" required>
                                <input type="hidden" name="acction" value="registrar">
                            </div>
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                <input type="text" name="titulo" value="" placeholder="Titulo" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                <input type="text" name="contenido" value="" placeholder="Post max 200 caracteres" required>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                            <input type="hidden" name="fecha"  value="<?php echo date("Y-m-d");?>"> <!-- La fecha la recoge automaticamente -->
                            </div>
                            <div class="form-group col-md-6 col-sm-6 co-xs-12">
                                <input type="text" name="imagen" value="" placeholder="Imagen (Opcional)">
                            </div>
                            <div class="form-group col-md-12 col-sm-12 co-xs-12">
                                <button type="submit" class="theme-btn btn-style-one">Registrarse</button>
                            </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>