<?php
		
	require("tema_normal.php");;
	require("../../backend/clase/usuario.class.php");

	$obj_usu = new usuario;
	$obj_usu->estandar();

	encabezado("Registrate - GooContacts");
		
?>

	<div class="<?php echo $obj_usu->container3; ?>">
		<div class="row">
			<div class="col-12 col-md-3"></div>
			<div class="col-12 col-md-6">
				<div class="<?php echo $obj_usu->card; ?>">
					<h2 class="<?php echo $obj_usu->titulocard; ?>">Registrate</h2>
					<hr>
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<form action="../../backend/controlador/usuario.php" method="POST">
									<div class="form-group">
										<div class="row p-1 m-1">
											<div class="col-12">
												<label for="nom_usu" class="<?php echo $obj_usu->for; ?>">Nombre:</label>
												<input class="<?php echo $obj_usu->input_normal; ?>" type="text" placeholder="Nombre" name="nom_usu" id="nom_usu" minlength="3" maxlength="30" required="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row p-1 m-1">
											<div class="col-12">
												<label for="cor_usu" class="<?php echo $obj_usu->for; ?>">Correo: </label>
												<input class="<?php echo $obj_usu->input_normal; ?>" type="email" placeholder="Correo" name="cor_usu" id="cor_usu" minlength="5" maxlength="80" required="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row p-1 m-1">
											<div class="col-12">
												<label for="cla_usu" class="<?php echo $obj_usu->for; ?>">Contraseña: </label>
												<input class="<?php echo $obj_usu->input_normal; ?>" type="password" placeholder="Contraseña" name="cla_usu" id="cla_usu" minlength="8" maxlength="40" required="">
											</div>
										</div>
									</div>
									<div class="form-group text-center">
										<div class="row p-1 m-1">
											<div class="col-12">
												<button class="<?php echo $obj_usu->btn_enviar; ?>" type="submit" name="ejecutar" value="insertar">Registrar usuario</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="card-footer text-right"><a href="iniciarsesion.php"><p>Ya tienes cuenta?</p></a></div>
				</div>
			</div>
			<div class="col-12 col-md-3"></div>
		</div>
	</div>
	

<?php

	pie();

?>