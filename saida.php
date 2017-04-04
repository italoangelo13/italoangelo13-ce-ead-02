<?php
$aluno = $_REQUEST['aluno'];
$disciplina = $_REQUEST['disciplina'];
$curso = $_REQUEST['curso'];
$img = "promove.png";
$notaVA1 = $_REQUEST['notaVA1'];
$notaVA2 = $_REQUEST['notaVA2'];
$notaVA3 = $_REQUEST['notaVA3'];
$notaTrab = $_REQUEST['notaTrab'];
$professor = $_REQUEST['professor'];
$coordenador = $_REQUEST['coordenador'];
$conceito = "";
$msg = "";
$resultado = $notaVA1 + $notaVA2 + $notaVA3 + $notaTrab;
$desempenho1 = ($notaVA1*100)/15;
$desempenho2 = ($notaVA2*100)/25;
$desempenho3 = ($notaVA3*100)/35;
$desempenhoT = ($notaTrab*100)/25;


if ($resultado >= 90) {
	$conceito = "Excelente";
	$msg = "concluiu satisfatoriamente";
}
elseif ($resultado>=80) {
	$conceito = "Ótimo";
	$msg = "concluiu satisfatoriamente";
}
elseif ($resultado>=70) {
	$conceito = "Bom";
	$msg = "concluiu satisfatoriamente";
}
elseif ($resultado>=60) {
	$conceito = "Ruim";
	$msg = "concluiu satisfatoriamente";
}
else{
	$conceito = "Péssimo";
	$msg = "<label style='color:#f00;'>NÃO </label>concluiu satisfatoriamente";
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Declaração Eletronica - Faculdades Promove</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
        	<div class="row">
        		<div class="jumbotron jumbotron-fluid col-lg-12">
				  <div class="container">
				  <center>
				    <h1 class="display-1">Declaração Eletronica</h1>
				    <p class="lead">Faculdades Promove</p>
				   </center>
				  </div>
				</div>
        	</div>


        	<div class="row" style="margin-top: 5%;">
        		<div class="col-lg-12">
        			<div class="container" style="border: 4px #000 solid; padding: 10px;">
        				<div class="row">
        					<div class="col-lg-12">
        						<center>
	        						<img src="<?php echo $img; ?>" alt="Faculdade Promove" title="Faculdade Promove">
	        					</center>
        					</div>
        				</div>

        				<div class="row" style="margin-top: 5%; padding-left: 10px; padding-right: 10px;">
        					<div class="col-lg-12">
        						<center>
        							<h1 style="font-weight: 600;">Declaração</h1>
        						</center>
        					</div>
        				</div>

        				<div class="row" style="margin-top: 5%;">
        					<div class="col-lg-12">
        						<h5>
        							<p style="text-align: justify;">Declaramos para os devidos fins que, <?php echo $aluno; ?> <?php echo $msg; ?> as atividades da Disciplina <?php echo $disciplina; ?> do curso de <?php echo $curso; ?>.</p>
        							<p style="text-align: justify;">Segue o desempenho de <?php echo $aluno; ?>:</p>
        						</h5>
        					</div>
        				</div>

        				<div class="row" style="margin-top: 5%;">
        					<div class="col-lg-12">
        						<table class="table table-striped">
								  <thead class="thead-inverse bg-primary">
								    <tr>
								      <th>Critério</th>
								      <th>Valor</th>
								      <th>Nota do Aluno</th>
								      <th>Desempenho</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th scope="row">Prova 1</th>
								      <td>15</td>
								      <td><?php echo $notaVA1; ?></td>
								      <td><?php echo(number_format($desempenho1, 2, ',', '.')) ?>%</td>
								    </tr>
								    <tr>
								      <th scope="row">Prova 2</th>
								      <td>25</td>
								      <td><?php echo $notaVA2; ?></td>
								      <td><?php echo(number_format($desempenho2, 2, ',', '.')) ?>%</td>
								    </tr>
								    <tr>
								      <th scope="row">Prova 3</th>
								      <td>35</td>
								      <td><?php echo $notaVA3; ?></td>
								      <td><?php echo(number_format($desempenho3, 2, ',', '.')) ?>%</td>
								    </tr>
								    <tr>
								      <th scope="row">Trabalhos</th>
								      <td>25</td>
								      <td><?php echo $notaTrab; ?></td>
								      <td><?php echo(number_format($desempenhoT, 2, ',', '.')) ?>%</td>
								    </tr>
								  </tbody>
								</table>
        					</div>
        				</div>

        				<div class="row" style="margin-top: 5%;">
        					<div class="col-lg-12">
        						<h5>
        							<p style="text-align: justify;">Com este resultado, o conceito de <?php echo $aluno; ?> é <em><?php echo $conceito; ?></em>, já que sua nota total foi <strong><?php echo $resultado; ?></strong> pontos.</p>
        							<p style="text-align: center;">Belo Horizonte,  <?php echo date("d/m/Y"); ?></p>
        						</h5>
        					</div>
        				</div>

        				<div class="row" style="margin-top: 6%;">
        					<div class="col-lg-12">
        						<center>
        							<table>
        								<tr>
        									<td style="border-bottom: 2px #000 solid;"></td>
        								</tr>
        								<tr>
        									<td><h4><?php echo $professor; ?> - Professor(a)</h4></td>
        								</tr>
        							</table>	
        						</center>
        					</div>
        				</div>

        				<div class="row" style="margin-top: 6%;">
        					<div class="col-lg-12">
        						<center>
        							<table>
        								<tr style="margin-top: 3%;">
        									<td style="border-bottom: 2px #000 solid;"></td>
        								</tr>
        								<tr>
        									<td><h4 style="text-align: center;"><?php echo $coordenador; ?> - Coordenador(a)</h4></td>
        								</tr>
        							</table>	
        						</center>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>

        	<div class="row">
        		<footer class="col-lg-12" style="background: #05f;color: #fff; margin-top: 5%;">
				  <h4 style="text-align: center;">@Faculdade Promove</h4>
				</footer>
        	</div>
        </div>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
	    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>