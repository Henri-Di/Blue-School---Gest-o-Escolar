<!DOCTYPE html>
<!-- Inicio documento HTML/CSS/PHP -->
<html lang="PT-BR">
<?php session_start(); ?>
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
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script>
document.oncontextmenu = function(){return false;}
</script> 
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
	<link rel="stylesheet" href="BlueColor.css">
				<title>Blue School - Cadastro Acadêmico</title>		
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
	<div class="container">
				<table class="table table-bordered" id="blue-table-input">
				<thead>
					<tr>
					
					<td>
					<div id="blue-title-table-cdst">Matricula</div>
					<div class="form-group">
					<br>
					<p  id="blue-text-config"><?php echo $_SESSION['usuarioId'];?>
					</p>
					</div>	
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Colaborador</div>
					<div class="form-group">
					<br>
					<p  id="blue-text-config"><?php echo $_SESSION['usuarioNome'];?> 
					</p>
					</div>	
					</td>
					</tr>
					
					<tr>
					
					<td>
										<div class="container">
					<div class="row">
					<div class="col" id="text-sub-menu-painel" onclick="window.location.href='ExitBlue.php';">Meu perfil</div>
					<div class="col" id="text-sub-menu-painel-two" onclick="window.location.href='ExitBlue.php';">Listagens</div>
					<div class="col" id="text-sub-menu-painel-three" onclick="window.location.href='';">Minhas anotações</div>
					</div>
					</div>
					</td>
					
					<td>
					<div class="container">
					<div class="row">
					<div class="col" id="text-sub-menu-painel-four" onclick="window.location.href='ExitBlue.php';">Minha agenda</div>
					<div class="col" id="text-sub-menu-painel-five" onclick="window.location.href='ExitBlue.php';">Encaminhar mensagem</div>
					<div class="col" id="text-exit" onclick="window.location.href='ExitBlue.php';">Sair</div>
					</div>
					</div>
					</td>
					</tr>
				</thead>
				</table>
			</div>
	<br>
	<div class="container" id="blue-text-separador">Cadastro Acadêmico</div>
	<br>
	<div class="container" id="blue-table-cdst">
		
		<form class="needs-validation" method="POST" action="CreateColaborador.php" novalidate >
		<table class="table table-bordered" id="blue-table-input">
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Nome completo</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="nome" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Genêro</div>
					<div class="form-group">
					<br>
					<select name="genero" id="blue-select">
					<option>Selecionar</option>
					<option value="Feminino">Feminino</option>
					<option value="Masculino">Masculino</option>
					<option value="Transgênero">Transgênero</option>
					<option value="Não-binário">Não-binario</option>
					<option value="Neutro">Neutro</option>
					</select>
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Data de nascimento</div>
					<div class="form-group">
					<br>
					<input type="date" id="blue-input-cdst" name="nascimento" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
							<div id="blue-title-table-cdst">CPF</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="cpf" value=""autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">RG</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="rg" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Nome da Mãe</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="estado" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			
			<thead>
				<tr>
					<td>
							<div id="blue-title-table-cdst">Nome do Pai</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="cpf" value=""autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">CPF da Mãe</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="rg" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">RG da Mãe</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="estado" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">CPF do Pai</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="cidade" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">RG do Pai</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="endereco" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Estado</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="cep" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Cidade</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="cargo" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Endereço residencial</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="cargo" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">CEP residencial</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="jornada" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Serie</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="serie" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Turma</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="turma" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">E-mail institucional</div>
					<div class="form-group">
					<br>
					<input type="password" id="blue-input-cdst" name="email" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Senha institucional</div>
					<div class="form-group">
					<br>
					<input type="password" id="blue-input-cdst"name="senha" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Contato acadêmico</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="telefone" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Contato mãe</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="telefone_two" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
			
			<thead>
				<tr>
					<td>
					<div id="blue-title-table-cdst">Contato pai</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst"name="telefone_three" value="" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Situação ID</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="situacao" readonly="true" value="4" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
					
					<td>
					<div id="blue-title-table-cdst">Nivel de acesso</div>
					<div class="form-group">
					<br>
					<input type="text" id="blue-input-cdst" name="nivel" readonly="true" value="4" autocomplete="off" required />
					<div class="valid-feedback"></div>
					<div class="invalid-feedback">Preencha o campo!</div>
					</div>	
					
					</td>
				</tr>
			</thead>
		</table>
		<button type="submit" id="blue-btn-cdst">Cadastrar Acadêmico</button>
		</form>
	</div>
	</div>
	<br><br>
	<br><br>
	<br><br>
	<!-- Container rodapé Blue School -->
	<div class="container-fluid pt-3" id="Blue-logo-bottom">		
		<div class="row">
				
			<div class="col" id="Blue-link-bottom">
			Colaborador<br>
			<img src="./imagens/Blueicon.png"  width="25pt" height="25pt"/>	
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Configurações<br>
			<img src="./imagens/engrenagens.png"  width="25pt" height="25pt"/>
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Suporte<br>
			<img src="./imagens/consultando-servicos.png"  width="25pt" height="25pt"/>		
			</div>
				
			<div class="col" id="Blue-link-bottom">
			Ajuda<br>
			<img src="./imagens/questao.png"  width="25pt" height="25pt"/>
			</div>
			
		</div>
		<br>
		
		</div>
	
		</div>
	
</body>
</div>	