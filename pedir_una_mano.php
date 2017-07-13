<?php include('include/header.php'); ?>

<article id="realiza_pedido">
	<h1>Realizar pedido:</h1>
	<p>¡Hola!<br>Estamos encarando nuestro proyecto #Limbs y nos llena de alegría, el objetivo es entregar la mayor cantidad de prótesis impresas en 3D alrededor del mundo, gratis, para todos los que las necesiten. Por el momento tenemos disponibles prótesis de manos y brazos.</p>
	<button class="blue_button" onclick="iniciar_pedido()">Empezar</button>
</article>

<article id="categoria_mano">
	<div class="categoria cat_mano" onclick="ajax_form('mano')">
		<div class="preview_cat"></div>
		<p>Mano</p>
	</div>
	<div class="categoria cat_brazo" onclick="ajax_form('brazo')">
		<div class="preview_cat"></div>
		<p>Brazo</p>
	</div>
</article>
<script src="js/solicitud.js"></script>

<?php include('include/footer.php'); ?>