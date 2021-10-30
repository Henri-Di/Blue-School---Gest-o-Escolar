<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("blue-animate").style.display = "block";
}
</script>

<script>
document.oncontextmenu = function(){return false;}
</script> 
<!DOCTYPE html>
<!-- Inicio documento HTML/CSS/PHP -->
<html lang="PT-BR">
<!-- Inicio cabeçalho Blue School -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=TW+Cen+MT+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
	<link rel="stylesheet" href="BlueColor.css">
				<title>Blue School - Resultado da Pesquisa</title>		
	<!-- Container Blue School logo-->
	<div class="container-fluid pt-3" id="Blue-logo">
		<h1 id="Blue-text-logo" onclick="window.location.href='index.php';">Blue School<br>Gestão Escolar 
		<img src="./imagens/BlueIcon.png"  width="30pt" height="30pt" id="Blue-icon-logo"/>
		</h1>		
	</div>
		<!-- Fim container Blue School logo -->		
</head>
<!-- Fim cabeçalho Blue School -->
	<!-- Inicio corpo HTML/CSS/PHP -->
<body  oncontextmenu="return false" onload="myFunction()" style="margin:0;">
	<!-- Container loading -->
	<div id="loader"></div>
	<!-- Fim container loading -->
	  <br>
	  <!-- Inicio container loading animação -->
	<div style="display:none;" id="blue-animate" class="animate-bottom">
	  <!-- Inicio container que armazena os dados cadastrados -->	
	<div class="container" id="blue-container-dados">
	<br>
	<!-- Inicio container variavel sessão -->
	<?php
		session_start();
		echo '<div class="container" id="text-session">Gestor:  ' . $_SESSION['usuarioNome'];
	?>
	
	<br>
	
	<a id="text-exit" href="ExitBlue.php">Sair</a>
	</div>
	<br>
	<!-- Fim container variavel sessão -->
	<div class="container" id="blue-text-separador">Resultado da pesquisa</div><br>

	<div class="container" id="blue-search">
	<form class="example"  method="POST" action="SearchColaborador.php">
		<input type="text" name="search">
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
	</div> 
	<br><br>
	<?php 	
	require 'ConnectionBlue.php';
	
	$search = $_POST['search'];
    $result_search = "SELECT * FROM Colaborador WHERE NOME LIKE '%$search%' LIMIT 5";
    $resultado_search = mysqli_query($conn, $result_search);
	
	if($result_search){
	while($rows_search = mysqli_fetch_array($resultado_search)){
	?> 
		<!-- Inicio container 3 colunas -->
		<div class="row" id="blue-box-colunas">
		<!-- Inicio box do container 3 colunas	-->
	
		<div class="col">
		
		<!-- Inicio container flip-card -->
		<div class="flip-card">
		
		<!-- Inicio container que armazena flip-card-front e flip-card-back -->		
		<div class="flip-card-inner">
		
		<!-- Inicio flip-card-front -->	
		<div class="flip-card-front">
		<div id="blue-title-front-card">Colaborador
		<svg id="fi_3410150" enable-background="new 0 0 512 512" height="18pt" viewBox="0 0 512 512" width="18pt" style="margin-top:-10px;"xmlns="http://www.w3.org/2000/svg"><g><path d="m349.785 79.838-16.471 85.985h-172.72l-17.14-89.424c-1.139-5.944 2.046-11.891 7.645-14.187 8.738-3.584 19.165-5.311 31.827-4.575l26.145-41.16c3.542-5.577 9.691-8.978 16.297-8.977 39.678.009 74.407 9.825 104.765 28.302 15.086 9.183 22.974 26.691 19.652 44.036z" fill="#e27c48"></path><path d="m330.133 35.802c-18.956-11.538-39.617-19.698-62.122-24.202 12.389 4.666 24.14 10.699 35.281 18.043 14.59 9.617 22.219 27.955 19.005 46.122l-15.93 90.058h26.945l16.471-85.985c3.324-17.345-4.564-34.854-19.65-44.036z" fill="#df6937"></path><path d="m332.544 183.911h-171.187c-10.537 0-19.079-8.542-19.079-19.079s8.542-19.079 19.079-19.079h171.187c10.537 0 19.079 8.542 19.079 19.079s-8.542 19.079-19.079 19.079z" fill="#ebae9d"></path><path d="m410.439 350.84-37.34 22.19-27.87-47.97v75.72h-196.56v-77.02l-34 57.2c-3.62 6.09-2.37 13.9 2.98 18.55l77.36 67.27-28.47 32.74-99.64-86.65c-8.28-7.2-10.22-19.3-4.61-28.73l54.95-92.42c9.09-15.3 25.57-24.67 43.36-24.67h172.29c18.02 0 34.66 9.61 43.68 25.2z" fill="#c5bec6"></path><path d="m148.668 426.481-18.823-16.366v57.494l18.823 16.37z" fill="#a59da7"></path><path d="m148.667 297.524v201.976c0 2.761 2.239 5 5 5h186.566c2.761 0 5-2.239 5-5v-201.976z" fill="#c5bec6"></path><path d="m332.889 267.05h-20.404c4.219 0 8.356.546 12.344 1.553v230.897c0 2.761-2.239 5-5 5h20.404c2.761 0 5-2.239 5-5v-230.897c-3.988-1.007-8.125-1.553-12.344-1.553z" fill="#a59da7"></path><path d="m264.89 240.841h-35.879l-21.143 13.779c-12.884 8.396-17.759 24.908-11.501 38.955l10.962 24.608c1.089 2.444 4.17 3.238 6.304 1.624l24.671-18.656c5.116-3.869 12.179-3.869 17.295 0l24.671 18.656c2.134 1.614 5.216.82 6.304-1.624l10.962-24.608c6.257-14.047 1.382-30.559-11.501-38.955z" fill="#ddebfd"></path><path d="m218.111 176.76v86.63c0 6.029 2.64 11.755 7.224 15.671l21.615 18.463 21.615-18.463c4.584-3.916 7.224-9.642 7.224-15.671v-86.63z" fill="#ffcdbe"></path><path d="m275.789 251.743v-74.983h-57.678v74.983c18.027 6.063 39.651 6.063 57.678 0z" fill="#ebae9d"></path><path d="m308.683 203.55c-19.543 41.64-103.926 41.64-123.469 0-11.993-25.57-3.484-106.51 18.46-125.164 1.124-.95 2.339-1.849 3.637-2.677 14.659 17.859 53.507 33.66 90.216 39.63 6.654 1.082 11.921 6.26 13.097 12.898 5.068 28.615 4.848 60.836-1.941 75.313z" fill="#ffcdbe"></path><path d="m351.606 266.401-74.752 129.475c-2.192 3.797-.891 8.652 2.906 10.844l86.481 49.93c3.797 2.192 8.652.891 10.844-2.906l74.752-129.475c2.192-3.797.891-8.652-2.906-10.844l-86.481-49.93c-3.796-2.192-8.652-.891-10.844 2.906z" fill="#80b6fc"></path><path d="m448.932 313.425-19.594-11.312c3.683 2.126 4.892 6.928 2.699 10.725l-74.752 129.474c-2.192 3.797-6.955 5.151-10.638 3.025l19.594 11.312c3.797 2.192 8.652.891 10.844-2.906l74.752-129.475c2.193-3.796.892-8.651-2.905-10.843z" fill="#62a4fb"></path><path d="m385.659 276.894-12.139 21.025c-1.873 3.245-.762 7.394 2.483 9.267l28.314 16.347c3.245 1.873 7.394.762 9.267-2.483l12.139-21.025z" fill="#ddebfd"></path><path d="m365.873 348.082 52.961 54.576c8.344 8.598 8.137 22.332-.461 30.676s-22.332 8.137-30.676-.461l-52.961-54.576z" fill="#c5bec6"></path><path d="m365.873 348.082-19.974-20.583c-6.236-6.427-16.502-6.581-22.928-.344l-7.864 7.631c-6.427 6.236-6.581 16.502-.344 22.928l19.974 20.583z" fill="#ffcdbe"></path><path d="m177.133 368.691v29.028c0 1.693 1.372 3.065 3.065 3.065h47.573c1.693 0 3.065-1.372 3.065-3.065v-29.028c0-1.693-1.372-3.065-3.065-3.065h-47.573c-1.693 0-3.065 1.372-3.065 3.065z" fill="#ddebfd"></path><g><path d="m282.752 497h-126.578v-190.282c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v14.984l-32.945 55.426c-5.479 9.218-3.584 21.012 4.506 28.042l28.439 24.727v37.621l-69.347-60.307c-5.548-4.825-6.846-12.915-3.084-19.238l26.699-44.904c2.117-3.561.946-8.163-2.614-10.279-3.562-2.117-8.163-.947-10.28 2.613l-26.698 44.903c-7.472 12.56-4.892 28.636 6.134 38.224l79.189 68.866v12.104c0 6.893 5.607 12.5 12.5 12.5h129.079c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5zm-141.578-86.981-18.599-16.171c-2.612-2.27-3.223-6.078-1.452-9.057l20.051-33.733z"></path><path d="m452.687 306.925-86.484-49.933c-3.573-2.06-7.734-2.607-11.713-1.537-3.377.906-6.274 2.891-8.333 5.646-4.337-1.023-8.774-1.552-13.259-1.552h-31.474c-6.188-9.39-13.644-12.342-18.126-15.665v-8.362c14.788-6.086 26.196-16.025 32.183-28.788 2.074-4.422 3.469-9.792 4.4-15.325h12.667c14.656 0 26.58-11.924 26.58-26.58 0-9.923-5.47-18.588-13.549-23.153l11.574-60.423c3.886-20.244-5.404-41.086-23.115-51.86-32.018-19.494-68.576-29.383-108.662-29.393-9.221 0-17.682 4.659-22.631 12.46l-23.831 37.522c-11.444-.188-21.515 1.546-30.658 5.29-8.857 3.638-13.974 13.117-12.166 22.54l12.245 63.865c-8.079 4.565-13.549 13.23-13.549 23.153 0 14.656 11.924 26.58 26.58 26.58h12.639c.985 5.814 2.423 11.056 4.426 15.326 5.99 12.762 17.396 22.702 32.185 28.788v8.361c-4.427 3.282-11.935 6.27-18.126 15.665h-31.884c-20.337 0-39.422 10.859-49.806 28.336l-10.38 17.45c-2.118 3.56-.948 8.162 2.612 10.28 1.202.715 2.523 1.055 3.827 1.055 2.558 0 5.051-1.309 6.453-3.667l10.382-17.453c7.696-12.954 21.84-21.001 36.912-21.001h26.026c-1.183 7.25-.306 14.901 2.893 22.083l10.958 24.596c1.455 3.271 4.276 5.658 7.74 6.552 3.463.892 7.083.168 9.937-1.989l24.668-18.657c2.43-1.839 5.824-1.837 8.253-.002l24.671 18.66c2.052 1.552 4.502 2.361 7.005 2.361 4.5 0 8.74-2.582 10.669-6.921l10.96-24.6c3.2-7.182 4.076-14.833 2.894-22.083h25.616c1.735 0 3.461.109 5.171.317l-67.705 117.26c-2.063 3.57-2.611 7.731-1.542 11.717s3.627 7.315 7.195 9.371l61.72 35.635v48.15h-19.98c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h22.48c6.893 0 12.5-5.607 12.5-12.5v-41.99l9.766 5.638c2.42 1.395 5.065 2.058 7.679 2.058 5.341 0 10.547-2.769 13.41-7.716l7.596-13.157c3.827 1.735 7.956 2.613 12.089 2.613 7.328 0 14.665-2.735 20.327-8.229 11.551-11.21 11.829-29.729.619-41.281l-3.735-3.849 37.856-65.571c4.247-7.366 1.713-16.825-5.655-21.091zm-108.561-142.095c0 6.386-5.194 11.58-11.58 11.58h-11.12c.375-7.609.24-15.246-.271-23.16h11.39c6.387 0 11.581 5.194 11.581 11.58zm-171.665 11.58h-11.095c-6.385 0-11.58-5.194-11.58-11.58s5.195-11.58 11.58-11.58h11.376c-.498 7.673-.643 15.596-.281 23.16zm1.72-38.16h-11.229l-12.129-63.263c-.469-2.445.849-4.901 3.127-5.837 8.181-3.351 17.521-4.666 28.55-4.023 2.707.16 5.309-1.168 6.768-3.467l26.142-41.162c2.184-3.442 5.91-5.498 9.965-5.498 37.294.009 71.229 9.162 100.863 27.207 12.392 7.538 18.895 22.094 16.183 36.222l-11.46 59.821h-11.23c-.485-3.814-1.056-7.604-1.715-11.321-1.729-9.767-9.478-17.398-19.278-18.992-36.955-6.01-72.964-21.564-85.623-36.986-2.408-2.933-6.628-3.606-9.829-1.565-1.554.991-3.051 2.093-4.462 3.286-15.291 12.997-22.111 45.763-24.643 65.578zm17.83 62.115c-5.981-12.752-5.088-39.635-3.68-53.806.003-.029.006-.057.009-.086 1.741-17.467 7.347-48.206 18.35-60.553 19.913 18.483 59.152 31.862 89.64 36.82 3.518.572 6.297 3.307 6.917 6.804 3.338 18.848 4.174 38.732 2.635 53.492-.008.066-.015.132-.021.199-.761 7.171-2.083 13.125-3.96 17.128-8.996 19.165-33.85 26.916-54.945 26.916-21.315 0-46.011-7.879-54.945-26.914zm20.464 110.919-9.248-20.757c-4.526-10.16-1.474-21.971 7.39-28.653v1.515c0 8.246 3.596 16.039 9.858 21.372l12.711 10.858zm34.482-23.628-16.748-14.307c-2.918-2.485-4.593-6.116-4.593-9.96v-23.282c6.716 1.419 13.868 2.171 21.339 2.171s14.625-.752 21.341-2.172v23.282c0 3.844-1.673 7.477-4.59 9.966zm43.729 2.871-9.248 20.757-20.708-15.663 12.716-10.857c6.26-5.344 9.851-13.135 9.851-21.375v-1.515c8.753 6.6 11.971 18.37 7.389 28.653zm97.727-3.391 27.074 15.631-8.033 13.913-27.073-15.631zm-68.077 53.032 7.863-7.631c1.671-1.622 3.871-2.504 6.2-2.46 2.327.035 4.501.975 6.123 2.646l14.751 15.201-20.372 19.77-14.751-15.204c-1.62-1.67-2.494-3.871-2.459-6.198.035-2.328.974-4.502 2.645-6.124zm50.269 109.815c-.127.221-.397.292-.608.172l-86.485-49.935c-.043-.024-.155-.089-.202-.263-.046-.174.018-.284.043-.328l23.215-40.207c.819 1.244 1.758 2.421 2.818 3.513l69.893 72.025zm42.553-22.031c-5.618 5.452-14.622 5.315-20.071-.301l-47.738-49.194 20.372-19.77 47.737 49.193c5.45 5.618 5.316 14.622-.3 20.072zm32.193-107.432-35.722 61.876-58.341-60.12c-4.412-4.546-10.329-7.103-16.662-7.197-.845-.012-1.682.022-2.51.096l26-45.03c.024-.043.091-.157.262-.203.176-.048.291.021.33.043l16.716 9.651-8.392 14.534c-3.937 6.82-1.591 15.573 5.229 19.512l28.314 16.348c2.201 1.27 4.644 1.919 7.118 1.919 4.875 0 9.709-2.498 12.394-7.148l8.391-14.533 16.702 9.643c.219.127.293.397.171.609z"></path><path d="m227.777 408.283c5.825 0 10.564-4.739 10.564-10.564v-29.027c0-5.826-4.739-10.565-10.564-10.565h-47.573c-5.825 0-10.564 4.739-10.564 10.565v29.027c0 5.825 4.739 10.564 10.564 10.564zm-43.137-35.157h38.702v20.157h-38.702z"></path><path d="m225.616 154.754v-2c0-4.143-3.358-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v2c0 4.143 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5z"></path><path d="m275.794 162.254c4.143 0 7.5-3.357 7.5-7.5v-2c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v2c0 4.142 3.358 7.5 7.5 7.5z"></path><path d="m232.154 197.416c4.835 2.503 10.631 3.754 16.426 3.754s11.591-1.252 16.426-3.755c3.679-1.903 5.117-6.43 3.213-10.107-1.904-3.681-6.433-5.119-10.107-3.213-5.432 2.811-13.627 2.813-19.062-.001-3.678-1.902-8.204-.464-10.108 3.214-1.906 3.678-.467 8.204 3.212 10.108z"></path></g></g></svg>
		</div><br>
		<input id="blue-text-flip-card" type="hidden" value="<?php echo $rows_search['ID']; ?>"/>
		<p id="blue-text-flip-card">Nome Completo: <?php echo $rows_search['NOME']; ?></p>
		<p id="blue-text-flip-card">Departamento: <?php echo $rows_search['DEPARTAMENTO']; ?></p>
		<p id="blue-text-flip-card">Cargo: <?php echo $rows_search['CARGO'];?></p>
		</div>
		<!-- Fim flip-card-front -->
	
		<!-- Inicio flip-card-back -->
		<div class="flip-card-back">
		<br><br>
		<p id="blue-text-flip-card">Email: <?php echo $rows_search['EMAIL']; ?> </p> 
		<p id="blue-text-flip-card">Estado: <?php echo $rows_search['ESTADO']; ?></p>
		<p id="blue-text-flip-card">Cidade: <?php echo $rows_search['CIDADE']; ?></p> 
		</div>
		<!-- Fim flip-card-back -->
		<?php $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);?>
		</div>
		<div id="blue-optios-config-dados" onclick="window.location.href='ConfigurarColaborador.php?id=<?php echo $rows_search['ID'];?>';">Configurar
		<img src="./imagens/engrenagenstwo.png" width="15pt" height="15pt">
		</div>
		<br>
		<!-- Fim container que armazena flip-card-front e flip-card-back -->
		</div><br><br><br>
		<!-- Fim container flip card -->
		</div>
		<!-- Fim box do container 3 colunas -->	
		<?php }?>
		</div>
		<!-- Fim container 3 colunas -->
		<br>
		<?php } ?>
		</div>
		<!-- Fim container que armazena os dados cadastrados -->
		<br><br><br>

	<!-- Inicio container rodapé -->
	<div class="container-fluid pt-3" id="Blue-logo-bottom">
		<div class="row">
				
			<div class="col" id="Blue-link-bottom">
			Gestor<br>
			<img src="./imagens/Blueicon.png"  width="20pt" height="20pt"/>	
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Configurações<br>
			<img src="./imagens/engrenagens.png"  width="20pt" height="20pt"/>
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Suporte<br>
			<img src="./imagens/apoio-suporte.png"  width="20pt" height="20pt"/>		
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Ajuda<br>
			<img src="./imagens/questao.png"  width="20pt" height="20pt"/>
			</div>
			
		</div>
		<br>
	</div>
	<!-- Fim container rodapé -->
	</div>
	<!-- Fim container loading animação -->








</body>
<!-- Fim corpo HTML/CSS/PHP -->
</html>
