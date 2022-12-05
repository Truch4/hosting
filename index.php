<?php
include("conexion.php");
include("/xampp/htdocs/30.555.219/includes/header.php")

?>



<section class="d-flex" id="principal">
	<div class="bg-primary" id="formulario">
		<p><span>Ingrese sus datos:</span></p>
		<form action="guardar_datos.php" method="post">
			<ul class="casillas">
				<li class="d-flex justify-content-between">
					<label for="nombre_de_usuario">Ingrese un nombre de usuario:</label>
					<input type="text" name="nombreusuario" placeholder="Nombre de Usuario">
				</li>
				<li class="d-flex justify-content-between">
					<label for="nombre">Ingrese su nombre:</label>
					<input type="text" name="nombre" placeholder="Nombre">
				</li>
				<li class="d-flex justify-content-between">
					<label for="cedula">Ingrese su cédula:</label>
					<input type="number" name="cedula" placeholder="Cédula">
				</li>
				<li class="d-flex justify-content-between">
					<label for="genero">Seleccione su género:</label>
					<select name="genero">
						<option value="hombre">Hombre</option>
						<option value="mujer">Mujer</option>
						<option value="otro">Otros</option>
					</select>
				</li>
				<li class="d-flex justify-content-between">
					<label for="PNF">Seleccione su PNF:</label>
					<select name="PNF" placeholder="Seleccione su PNF">
						<option value="electricidad">Electricidad</option>
						<option value="informatica">Informática</option>
						<option value="geociencias">Geociencias</option>
						<option value="materiales">Ing. Materiales</option>
						<option value="quimica">Química</option>
						<option value="mecanica">Mecánica</option>
					</select>
				</li>
				<li class="d-flex justify-content-between">
					<label for="correo">Ingrese su correo:</label>
					<input type="email" name="correo" placeholder="Correo">
				</li>
				<li class="d-flex justify-content-between">
					<label for="contracena">Ingrese su Contraceña:</label>
					<input type="password" name="contracena" placeholder="contracena">
				</li>
				<li class="d-flex justify-content-between">
					<label for="telefono">Ingrese su teléfono:</label>
					<input type="tel" name="telefono" placeholder="Teléfono">
				</li>
				<li>
					<input type="submit" name="crear_usuario" id="crear_usuario" value="Crear Usuario">
				</li>
			</ul>
	</div>
	</form>

	<div id="alineacion_lateral">
		<div id="inicio_sesion">
			<div>
				<figure><img class="img-fluid" src="src/1946429.png" alt="icono_usuario"></figure>
			</div>
			<form action="login.php" method="POST">
				<ul class="usuario_contrasena">
					<li>
						<label for="nombre">Usuario:</label>
						<input name="nombreusuario_l" type="text" placeholder="Usuario">
					</li>
					<li>
						<label for="contracena">Contraseña:</label>
						<input name="contracena_l" type="password" placeholder="Contraceña">
					</li>
					<li>
						<input type="submit" name="but_submit" id="but_submit" value="Log in">
					</li>
				</ul>
			</form>
		</div>

		<aside id="barra_lateral">
			<ul>
				<li><a href="" class="enlace_redes">Link de Facebook</a></li>
				<li><a href="" class="enlace_redes">Link de Instagram</a></li>
				<li><a href="" class="enlace_redes">Link de Tik Tok</a></li>
			</ul>
		</aside>
	</div>
</section>

<?php include("/xampp/htdocs/30.555.219/includes/footer.php") ?>