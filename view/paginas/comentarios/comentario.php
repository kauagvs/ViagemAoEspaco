<?php include ("../../includes/cabecalho/cabecalho.php"); ?>
	
	<body>	  
		<?php include ("../../includes/navbar/menu_logado.php"); ?>

	<div class="container">

		<div class="box-comentario">
			<div class="col-md-4" ></div>			
			<div class="col-lg-12">
			<br><br>
				<br><h3><center>Comente por onde você anda... </h3></center>
				<br>
			</div>
			<div class="ship"></div>
		</div>

	<form method="post" action="../../../controller/comentario_base/comentario_base.php" id="formCadastrarse" enctype = "multipart/form-data">
     	<div class="col-lg-8" style="margin-left: 20%;">
		    <textarea class="form-control custom-control" name="comentario" rows="10" style="resize:none"></textarea>    
		    <br> 
		    <button type="submit" class="col-lg-2 btn btn-primary">Enviar</button>
		</div>
	</form>
       
