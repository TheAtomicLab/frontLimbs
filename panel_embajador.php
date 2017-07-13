<?php include('include/header.php'); ?>

<article id="panel_embajadores">
	<h1>Panel de control</h1>
	<div id="estadistica_emb">
		<div>
			<p>Entregaste</p>
			<h2>10</h2>
			<p>Manos</p>
		</div>
		<div>
			<p>Tenés</p>
			<h2>5</h2>
			<p>Pedidos</p>
		</div>
	</div>
	<div id="paneles_embajador">
		<article class="panel_emb">
			<h2>Tus pedidos:</h2>
			<table class="tabla_emb">
				<tr>
					<th>Nombre</th>
					<th>Fecha de solicitud</th>
					<th>Número de pedido</th>
					<th>Estado</th>
				</tr>
				<tr>
					<td>Lorem Ipsum</td>
					<td>10/05/2017</td>
					<td>125623</td>
					<td>Pendiente</td>
				</tr>
				<tr>
					<td>Ipsum Lorem</td>
					<td>05/02/2017</td>
					<td>125210</td>
					<td>Pendiente</td>
				</tr>
			</table>
		</article>
		<article id="terminadas" class="panel_emb">
			<h2>Terminadas:</h2>
			<table class="tabla_emb">
				<tr>
					<th>Nombre</th>
					<th>Fecha de solicitud</th>
					<th>Número de pedido</th>
					<th>Estado</th>
				</tr>
				<tr>
					<td>Lorem Ipsum</td>
					<td>10/05/2017</td>
					<td>125623</td>
					<td>Cancelada</td>
				</tr>
				<tr>
					<td>Ipsum Lorem</td>
					<td>05/02/2017</td>
					<td>125210</td>
					<td>Entregada</td>
				</tr>
			</table>
		</article>
	</div>
</article>

<?php include('include/footer.php'); ?>