<html>
	<head>
	
		<title>Cadastro de Visitante</title>
		
		<link type="text/css" href="style.css" rel="stylesheet" >
		
		
		
	</head>
	
	<body>
		
		<?php
			
			include("connector.php");
			
			$sqlcreatetable="CREATE TABLE IF NOT EXISTS visitante(
				idVisitante INT(100) AUTO_INCREMENT PRIMARY KEY,
				nome VARCHAR(254) NOT NULL,
				tipoDoc VARCHAR(12) NOT NULL,
				nDoc VARCHAR(50) NOT NULL
			)";
			
			if ($connector -> query($sqlcreatetable)===TRUE){
				//echo "Table created";
			} else{
				//echo "Table not created";
			}
			
			
			$queryinsertpessoa="INSERT INTO visitante (nome,tipoDoc,nDoc) values('Rodrigo Pereira', 'RG', '123.456.789')";
				//mysqli_query($connector,$queryinsertpessoa);
			$queryinsertpessoa="INSERT INTO visitante (nome,tipoDoc,nDoc) values('Amanda Lorena', 'RG', '987.654.321')";
				//mysqli_query($connector,$queryinsertpessoa);
			$queryinsertpessoa="INSERT INTO visitante (nome,tipoDoc,nDoc) values('Julio Junior', 'CPF', '123.456.789-20')";
				//mysqli_query($connector,$queryinsertpessoa);
			$queryinsertpessoa="INSERT INTO visitante (nome,tipoDoc,nDoc) values('Alysson Jacinto', 'CPF', '123.456.789-10')"; 
				//mysqli_query($connector,$queryinsertpessoa);
			
		
		?>
		
		<center>
		
			<h1 id="title_one">CADASTRO DE VISITANTE</h1>
			
		</center>
		
		<br>
		
		<form>	
			<section id="table_one">
				<p id="title">Visitante</p>
			
				<div>
					<center>
				
						Nome:
						<input name="nomeVisitante" id="nomeVisitante" type="text" placeholder="Nome do Visitante" value="" required="required" size="50px" maxlength="50px" />
						
						Tipo de Documento:
						<select name="tipoDoc" id="tipoDoc" value="" required="required">
							<option value="CPF">CPF</option>
							<option value="RG">RG</option>
						</select>
										
					
					
						Numero do Documento:
						<input name="numeroDoc" id="numeroDoc" type="number" placeholder="Numero do Documento" value="" required="required" size="80px" maxlength="50px" />
						
						</center>
						
						<br>
					
						<button name ="buttonPesquisar"id="buttonPesquisar" type="submit">Pesquisar</button>
						
											
				</div>
			</section>
				
				<br>
				<br>
				
				
				<section id="section_three">
				
					<p id="title">Tabela de Visitante</p>
					
					
						<table  id="table_three">
							
							<tr>
								<th>Nome</th>
								<th>Documento</th>
								<th>N? Documento</th>
								
							</tr>
							
							<?php
							
							$selecione=mysqli_query($connector,"SELECT * FROM visitante");
							while($campo=mysqli_fetch_array($selecione, MYSQLI_ASSOC))
								
							{
								?>
									<tr>
										<td><?=$campo['nome']?></td>
										<td><?=$campo['tipoDoc']?></td>
										<td><?=$campo['nDoc']?></td>
									</tr>
								<?php
							
							}
							
							?>
				
						</table>
					
					
				</section>
		</form>
			
			<br>
			<br>
			<div id="buttons">
				<button id="button_adicionarCliente">Adicionar Cliente</button>
							
			</div>


			
				
		
	</body>
</html>