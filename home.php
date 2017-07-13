<?php include('include/header.php'); ?>

<article id="home">
	<h1>Hola Nicolas</h1>
	<a href="pedir_una_mano.php"><button id="home_pedir" class="blue_button">Pedir una mano</button></a>
	<article id="tus_pedidos" class="tabla">
		<h2>Tus pedidos:</h2>
		<table class="tabla_gris">
			<tr>
				<th>Fecha de solicitud</th>
				<th>Número de pedido</th>
				<th>Estado</th>
			</tr>
			<tr>
				<td>10/05/2017</td>
				<td>125623</td>
				<td>Pendiente</td>
			</tr>
			<tr>
				<td>05/02/2017</td>
				<td>125210</td>
				<td>Entregada</td>
			</tr>
		</table>
	</article>
</article>

<?php include('include/footer.php'); ?>