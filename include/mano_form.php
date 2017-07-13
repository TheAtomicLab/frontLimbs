<form class="form_solicitud" method="post" action="process.php">
	<ul id="medidas">
		<h2>Medidas:</h2>
		<li>
			<p>A</p>
			<input required type="number" max="100" min="0" name="a">
		</li>
		<li>
			<p>B</p>
			<input required type="number" max="100" min="0" name="b">
		</li>
		<li>
			<p>C</p>
			<input required type="number" max="100" min="0" name="c">
		</li>
		<li>
			<p>D</p>
			<input required type="number" max="100" min="0" name="d">
		</li>
	</ul>
	<div id="medidas_mano"></div>
	<div id="color_mano">
		<h2>Color:</h2>
		<input type="radio" name="color" required="true" value="a">
		<input type="radio" name="color" required="true" value="b">
		<input type="radio" name="color" required="true" value="c">
		<input type="radio" name="color" required="true" value="d">
		<input type="radio" name="color" required="true" value="e">
		<input type="radio" name="color" required="true" value="f">
	</div>
	<input id="enviar" type="submit" name="enviar" value="Enviar" class="blue_button">
</form>