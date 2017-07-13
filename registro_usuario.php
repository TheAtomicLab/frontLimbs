<?php include('include/header.php'); ?>

<article id="registro">

<form class="form" method="post" action="#">

			 <div class="form-title-row">
				<h1>¡Registrate a la plataforma Limbs como usuario!</h1>
			</div>

			<div class="header_registro">
				Datos Personales
			</div><hr color="#f2f2f2">

			<div class="form-row">
				<label>
					<span>Nombre completo del adulto responsable:</span>
					<input type="text" name="nombre del adulto" placeholder="Adulto responsable">
				</label>
			</div>

			<br><hr color="#f2f2f2">

			<div class="form-row">
				<label>
					<span>Nombre completo del usuario de la protesis:</span>
					<input type="text" name="nombre del usuario" placeholder="¡Nombre del usuario super heroe!">
				</label>
			</div>

			<br><hr color="#f2f2f2">

			<div class="form-row">
				<label>
					<span>Correo electrónico:</span>
					<input type="email" name="correo" placeholder="correo@ejemplo.com">
				</label>
			</div>

			<br><hr color="#f2f2f2">

			<div class="form-row">
			<label>
					<span>Fecha de nacimiento del usuario de la prótesis:</span>
			<input type="date" name="fecha" step="1" min="1990-01-01" max="2017-12-31" value="<?php echo date("Y-m-d");?>"
			</label>
			</div>

			<br><hr color="#f2f2f2">

			<div class="form-row">
				<label>
					<span>Sexo del usuario de la prótesis:</span>
					<select name="dropdown">
						<option>Masculino</option>
						<option>Femenino</option>
					</select>
				</label>
			</div>

			<br><hr color="#f2f2f2">

			<div class="form-row">
				<label>
					<span>¿Donde vives?</span>
					<input type="text" name="lugar actual" placeholder="¿Donde vive el usuario?">
				</label>
			</div>

			<br><hr color="#f2f2f2">

			<div class="form-row">
				<label>
					<span>Documento de identidad o pasaporte del usuario de la prótesis:</span>
					<input type="text" name="dni" placeholder="D.N.I. del usuario">
				</label>
			</div>

			<br><hr color="#f2f2f2">

			<div class="form-row">
				<label class="form-checkbox">
					<span>El pequeño super heroe necesita:</span>
					Mano:<input type="radio" name="tipo_de_mano" value="mano" unchecked>
					Brazo:<input type="radio" name="tipo_de_mano" value="brazo" unchecked>
				</label>
			</div>
			<div class="form-row">
				<label class="form-checkbox">
					<span>¿Cual?</span>
					Derecha:<input type="radio" name="mano_necesaria" value="derecha" unchecked>
					Izquierda:<input type="radio" name="mano_necesaria" value="izquierda" unchecked>
					Ambas:<input type="radio" name="mano_necesaria" value="ambas" unchecked>
				</label>
			</div>

			<br><hr color="#f2f2f2">

			<div class="header_registro">
				¡Sobre la Prótesis!
			</div><hr color="#f2f2f2">

			<div class="form-row">
				<label>
				<p>¿Que impresión 3D necesitarías? A continuación le presentamos distintos tipos de amputaciones, por favor, seleccione al final de las imágenes, la letra que identifica a la más parecida de su amputación.</p>
				<br><hr color="#f2f2f2">

					<span>(A) Perdí UNA falange de cualquier dedo.</span>
					<p><img src="img/registro/falange1.png" class="img-responsive" width="300"></p>
					<span>(B) Perdí DOS falanges de cualquier dedo.</span>
					<p><img src="img/registro/falanges2.png" class="img-responsive" width="300"></p>
					<span>(C) Perdí mis cuatro dedos y tengo un pulgar.</span>
					<p><img src="img/registro/cuatrodedos.png" class="img-responsive" width="300"></p>
					<span>(D) Perdí el pulgar y no tengo los dedos (Poseo hueso Carpal).</span>
					<p><img src="img/registro/sindedos.png" class="img-responsive" width="300"></p>
					<span>(E) Perdí la mano, no tengo muñeca. (Poseo hueso cúbito y radio pero no carpal).</span>
					<p><img src="img/registro/sinmano.png" class="img-responsive" width="300"></p>
					<span>(F) Tengo un muñón a partir del codo y tengo un antebrazo desarrollado (Huesos Cúbito y Radio presente).</span>
					<p><img src="img/registro/antebrazo.png" class="img-responsive" width="300"></p>
					<span>(G) Perdí el codo y tengo el húmero.</span>
					<p><img src="img/registro/sincodo.png" class="img-responsive" width="300"></p>
					<span>(H) Tengo el húmero pero muy poco desarrollado.</span>
					<p><img src="img/registro/hombro.png" class="img-responsive" width="300"></p>

					<div class="form-row">
				<label>
					<span>¿Cual es tu amputación?</span>
					<select name="dropdown">
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option>D</option>
						<option>E</option>
						<option>F</option>
						<option>G</option>
						<option>H</option>
					</select>
				</label>
			</div>
				</label>
			</div>

			<br><hr color="#f2f2f2">

			<div class="form-row">
				<button type="submit" class="blue_button">Registrarse como usuario</button>
			</div>

		</form>

</article>

<?php include('include/footer.php'); ?>