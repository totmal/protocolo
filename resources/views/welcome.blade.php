<!DOCTYPE html>
<html>
<head>

	<title>PROTOCOLO</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
			
	<script type="text/javascript">$("#telefone").mask("(00) 0000-00009");</script>
	<script type="text/javascript">$("#souweb").mask("SSSS00000");</script>
	<script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>
	<script type="text/javascript">$("#cnpj").mask("00.000.000/0000-00");</script>
	<script type="text/javascript">$("#protocolo_BICF").mask("99999");</script>
	<script type="text/javascript">$("#protocolo_SEI").mask("00000.000000/0000-00");</script>
	<script type="text/javascript">$("#outros");</script>	
	<script type="text/javascript">$("#cep1").mask("00.000-000");</script>
	<meta charset="utf-8"/>
	

	<!-- ESSA FUNÇÃO MOSTRA A CAIXA DE ENDEREÇO CASO HAJA NECESSIDADE -->
	<script>
	function myFunction() {
	  // Pega o checkbox
	  var checkBox = document.getElementById("haendereco");
	  // pega a saída de texto
	  var text = document.getElementById("endereco");
	  
	  // If the checkbox is checked, display the output text
	  if (checkBox.checked == true){
		text.style.display = "block";
	  } else {
		text.style.display = "none";
	  }
	    
	}
	</script>
</head>
<body>
  

@section('content')
<!-- o conteúdo vai aqui -->

<!-- o conteúdo vai aqui -->
<div class="container-fluid text-center" style="background-color: #1659BF; color: white; ">
	<br />
	<p class="small">MINISTÉRIO DA ECONOMIA <br />
	OUVIDORIA DO MINISTÉRIO DA ECONOMIA<br />
	Esplanada dos ministérios, Bloco F, Ed. Anexo 1º andar, Ala "A", Sala 179 - CEP: 70.059-900 - Brasília-DF</p>
	<br />
	<h2><strong>FORMULÁRIO DE REGISTRO DE PROTOCOLOS</strong></h2>
	<small>Os campos com <small style="color:red;">*</small>  são de preenchimento obrigatório.</small><br />
	<br>
	<p class="btn btn-primary"><a href="pesquisa.php" target="_blank" class="text-white">Pesquisar CPF</a></p>
	<p class="btn btn-warning"><a href="pesquisanome.php" target="_blank" class="text-white">Pesquisar NOME</a></p>
	
</div>
<form method="post" action="gravar.php" style="font-weight: bold;">

		<div class="row form-group" >
		
			<div class="col-3 border pl-4 pr-4 p-1">
					<label>PROTOCOLO <small style="color:red;">*</small> </label> <br />
					
					<select class="form-control">
						<option value="" disabled selected>Escolha o tipo...</option>						
						<option onClick="document.getElementById('protocolo_BICF').style.display='initial'; document.getElementById('protocolo_SEI').style.display='none'; document.getElementById('outros').style.display='none'" id="protocolo_BICF1">BICF</option>
						<option onClick="document.getElementById('protocolo_SEI').style.display='initial'; document.getElementById('protocolo_BICF').style.display='none'; document.getElementById('outros').style.display='none'" id="protocolo_SEI1">SEI</option>
						<option onClick="document.getElementById('outros').style.display='initial'; document.getElementById('protocolo_SEI').style.display='none'; document.getElementById('protocolo_BICF').style.display='none'"id="outros1">Outros</option>						
					</select>

					<div id="campos">
						<input type="text" name="protocolo" placeholder="99999" id="protocolo_BICF" class="form-control" style="display:none">
						<input type="text" name="protocolo1" placeholder="99999.999999/9999-99" id="protocolo_SEI" class="form-control" style="display:none">
						<input type="text" name="outros" placeholder="outros" id="outros" class="form-control" style="display:none">						
					</div>
				
			</div>
			
			<div class="col-3 border pl-4 pr-4 p-1">
				<label>Tipo de pessoa <small style="color:red;">*</small> </label> <br />				
				<select class="form-control">
					<option value="" disabled selected>Física/Juridica</option>					
					<option onClick="document.getElementById('cpf').style.display='initial'; document.getElementById('cnpj').style.display='none'" id="cpf1">CPF</option>
					<option onClick="document.getElementById('cnpj').style.display='initial'; document.getElementById('cpf').style.display='none'" id="cnpj1">CNPJ</option>
				</select>	
				
				<div id="abas">
					<input type="text" name="cpf" placeholder="999.999.999-99" id="cpf" class="form-control" style="display:none">
					<input type="text" name="cnpj" placeholder="99.999.999/9999-99" id="cnpj" class="form-control" style="display:none">
				</div>				
				
			</div>
			
			<div class="col-6 border pl-4 pr-4 p-1">
				<label for="nome">Nome <small style="color:red;">*</small></label> <br />
				<input required="true" name="nome" type="text" placeholder="INSIRA NOME DO CIDADÃO OU EMPRESA..."  class="form-control text-uppercase">
			</div>
			
		</div>
		
		<!-- AQUI COMEÇA A SEGUNDA LINHA DE DADOS -->
		<div class="row form-group" style="height: 100px;">
			
			<div class="col-3 border pl-4 pr-4 p-1">
				<label for="meio_entrada">Meio de Entrada <small style="color:red;">*</small></label> <br />
				<select name="meio_entrada" class="form-control" name="meio_entrada" required="true">
					<option SELECTED disabled="true">Escolha..</option>
					<option>Carta</option>
					<option>E-mail</option>					
				</select>
			</div>
						
			<div class="col-3 border pl-4 pr-4 p-1">
				<label for="codigo_entrada">Código</label> <br />
				<input  name="codigo_entrada" type="text" class="form-control" placeholder="FalaBr/Sou-Web/Sisouvidor... ">
			</div>			
			
			<div class="col-3 border pl-4 pr-4 p-1">
				<label for="telefone">Telefone</label> <br />
				<input type="tel" id="telefone" class="form-control" name="telefone" placeholder="( ) 99999-9999">
			</div>			
			
			<div class="col-3 border pl-4 pr-4 p-1">
				<label for="resp_cadastro">Responsável pelo cadastro <small style="color:red;">*</small></label> <br />
				<input required="true" name="resp_cadastro" type="text"	class="form-control text-uppercase" value='<?php // echo "$_COOKIE[nomereal]"?>' placeholder="">
			</div>
		</div>
		
		
		
		<!-- AQUI COMEÇA A TERCEIRA LINHA DE DADOS -->
		<div class="row form-group">
			<div class="col-2 border pl-4 pr-4 p-1 text-center">
				<label for="endereco">Possui Endereço?</label> <br />
				<input type="checkbox" class="form-control text-uppercase" name="haendereco" id="haendereco" onclick="myFunction()">
			</div>
			
			<div class="col-10 border pl-4 pr-4 p-1" style="display:none" id="endereco" >
				<div class="row">
				<div class="col-4"><label for="endereco">Logradouro</label><input type="text" class="form-control" name="endereco"></div>
				<div class="col-1"> <label for="numero">Nº</label><input  type="text" class="form-control text-uppercase" name="numero" /></div>
				<div class="col-2"> <label for="bairro">Bairro</label><input  type="text" class="form-control" name="bairro" /></div>				
				<div class="col-2"><label for="cidade">Cidade</label> <input  type="text" class="form-control" name="cidade" /></div>				
				<div class="col-1">					
					<label for="uf"> UF </label> <br />
					<select name="uf" class="form-control">					
						<option value=""></option>
						<option value="AC">AC</option>
						<option value="AL">AL</option>
						<option value="AM">AM</option>
						<option value="AP">AP</option>
						<option value="BA">BA</option>
						<option value="CE">CE</option>
						<option value="DF">DF</option>
						<option value="ES">ES</option>
						<option value="GO">GO</option>
						<option value="MA">MA</option>
						<option value="MG">MG</option>
						<option value="MS">MS</option>
						<option value="MT">MT</option>
						<option value="PA">PA</option>
						<option value="PB">PB</option>
						<option value="PE">PE</option>
						<option value="PI">PI</option>
						<option value="PR">PR</option>
						<option value="RJ">RJ</option>
						<option value="RN">RN</option>
						<option value="RS">RS</option>
						<option value="RO">RO</option>
						<option value="RR">RR</option>
						<option value="SC">SC</option>
						<option value="SE">SE</option>
						<option value="SP">SP</option>
						<option value="TO">TO</option>
					</select>
				</div>				
				<div class="col-2"><label for="cep">CEP</label><input placeholder="00.000-000"  type="text" class="form-control text-uppercase" id="cep1" name="cep" /></div>
				
				</div>
			</div>
			
			
			
		</div>
		
		<!-- AQUI COMEÇA A QUARTA LINHA DE DADOS -->
		<div class="row form-group">
			<div class="col-4"></div>
			
			<div class="col-4">
				
				<label for="observacao">Informações Complementares</label> <br />
				<textarea class="form-control" rows="5" name="observacao" placeholder="As informações inseridas aqui serão lidas pelo cidadão."></textarea>
				<!--<textarea class="form-control text-uppercase" rows="5" name="observacao" placeholder="As informações inseridas aqui serão lidas pelo cidadão."></textarea> -->
			</div>
			<div class="col-4"></div>
		</div>
		
		<!-- AQUI MARCAR TIPO DE CARTA SERÁ EMITIDA, SE NÃO FOR SELECIONADO NÃO GERA CARTA-->
		<div class="row form-group">
			<div class="col-4"></div>
			
			<div class="col-5">
				
				<p for="observacao" class="text-left" style="color: red;">Emitir Carta?</p>
				
		
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="tipoCarta" id="gridRadios1" value="naoEmitir" > <!--  checked-->
				  <label class="form-check-label" for="gridRadios1"> 
					Não emitir 
				  </label> <br /> <br />
				  
				  <!--Imprimir carta empresa -->
				  <input class="form-check-input" type="radio" name="tipoCarta" id="gridRadios3" value="empresa">
				 <label class="form-check-label" for="gridRadios2">
					Empresa 
				 </label> <br /> <br />
				  
				</div>
		
				<!-- Abilitar função para carta Fala.Br-->
			<div class="row">
				
				
				<div class="col-6 border pl-4 pr-4 p-1 form-check">				
				<p class=textjustify> Carta SOU-Web
				</p>
				
				  <input class="form-check-input" type="radio" name="tipoCarta" id="gridRadios2" value="primeiroCadastro">
				  <label class="form-check-label" for="gridRadios1">
					Encaminhadas ao Ministério
				  </label> <br /> <br />
				
				  <input class="form-check-input" type="radio" name="tipoCarta" id="gridRadios2" value="presitencia_souweb">
				  <label class="form-check-label" for="gridRadios1">
					Encaminhadas da presidência
				  </label> <br /> <br />
				
				  <input class="form-check-input" type="radio" name="tipoCarta" id="gridRadios3" value="mesmoObjeto">
				  <label class="form-check-label" for="gridRadios2">
					Tratando do mesmos objeto 
				  </label> <br /> <br />
			<!--  
				  <input class="form-check-input" type="radio" name="tipoCarta" id="gridRadios4" value="denuncia">
				  <label class="form-check-label" for="gridRadios2">
					Quando se tratar de denúncia
				  </label> <br /> <br />
			-->	  
				</div>
				
				
			<div class="col-6 border pl-4 pr-4 p-1 form-check">				
				<p class=textjustify> Carta Fala.BR
				</p>
				
				 <input class="form-check-input" type="radio" name="tipoCarta" id="gridRadios2" value="ministerio_falabr">
				 <label class="form-check-label" for="gridRadios1">
					Encaminhadas ao Ministério
				 </label> <br /> <br />
				 
				 <input class="form-check-input" type="radio" name="tipoCarta" id="gridRadios2" value="presitencia_falabr">
				 <label class="form-check-label" for="gridRadios1">
					Encaminhadas da presidência
				 </label> <br /> <br />
				  
				 <input class="form-check-input" type="radio" name="tipoCarta" id="gridRadios3" value="mesmoObjeto_falabr">
				 <label class="form-check-label" for="gridRadios2">
					Tratando do mesmos objeto 
				 </label> <br /> <br />
				
			</div>
				
		
			</div>	
			
			</div>

		</div>				
		
		<!-- AQUI COMEÇA A QUINTA LINHA DE DADOS -->
		<div class="row form-group" align="center" >
			<div class="col-3"></div>
			<div class="col-6">
				<button type="submit" name="enviar" class="btn btn-success" value="enviar">Registrar</button>
				<button type="reset" name="reset" class="btn btn-warning" value="reset">Limpar campos</button>
				<button type="button" name="atualizar" class="btn btn-info" value="atualizar" onClick="history.go(0)">Atualizar Página</button>
			</div>
			<div class="col-3"></div>		
		</div>
</form>

<!-- MOSTRAR HISTÓRICO DOS ULTIMOS CADASTROS -->
<?php
	//require "historico.php";

?>
@endsection
@extends('layouts.historico')
</body>
</html>

