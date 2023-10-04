<?php include("header.php") ?>

<div class="background">
    <section class="contacto">
        <form action="consulta.php" method="post">
            <div class="form-group">
                <label for="nombreCompleto">Nombre completo</label>
                <input type="text" name="nombreCompleto" class="form-control contacto_input">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" class="form-control contacto_input">
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" cols="30" rows="10" class="form-control contacto_input"></textarea>
            </div>

            <input type="submit" value="Enviar" class="btn btn-dark contacto_boton btn-negro">

        </form>
    </section>
</div>

