<!-- BUSCAR TODAS AS INFORMAÇÕES NO BD -->
@foreach($protocolo as $equipamento)
@endforeach              
                       
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
	
	<!-- <script type="text/javascript">$("#cnpj").mask("00.000.000/0000-00");</script> -->
	<script type="text/javascript">$("#protocolo_BICF").mask("99999");</script>
	<script type="text/javascript">$("#protocolo_SEI").mask("00000.000000/0000-00");</script>
	<script type="text/javascript">$("#outros");</script>	
	<script type="text/javascript">$("#cep1").mask("00.000-000");</script>
	<meta charset="utf-8"/>
	

	<!-- ESSA FUNÇÃO MOSTRA A CAIXA DE ENDEREÇO CASO HAJA NECESSIDADE -->
	
</head>
<body>
<!-- o conteúdo vai aqui -->

<!-- o conteúdo vai aqui -->
<div class="container-fluid text-center" style="background-color: #a8a832; color: white; ">
	<br />
	<p class="small">MINISTÉRIO DA ECONOMIA <br />
	OUVIDORIA DO MINISTÉRIO DA ECONOMIA<br />
	Esplanada dos ministérios, Bloco F, Ed. Anexo 1º andar, Ala "A", Sala 179 - CEP: 70.059-900 - Brasília-DF</p>
	<br />
	<h2><strong>EDITOR DE REGISTRO DE PROTOCOLOS</strong></h2>
	<small>Os campos com <small style="color:red;">*</small>  são de preenchimento obrigatório.</small><br />
	<br>
	
	
	
</div>
<form method="post" action="/update" style="font-weight: bold;">
@csrf
		<div class="row form-group" >
		
			<div class="col-3 border pl-4 pr-4 p-1">
					<label>PROTOCOLO <small style="color:red;">*</small> </label> <br />
					
				
					<div id="campos">
						
						<input type="text" name="protocoloid" placeholder="outros" id="protocoloid" class="form-control" value="{{$equipamento->protocolo}}" required>						
					</div>
				

			</div>
			
			<div class="col-3 border pl-4 pr-4 p-1">
				<label>CPF/CPNJ <small style="color:red;">*</small> </label> <br />				
								
				<div id="abas">
					<input type="text" name="cpfcnpj" placeholder="CPF/CNPJ" id="cpfcnpj" class="form-control" maxlength="20" value="{{$equipamento->cpf}}" required>
					
				</div>				
				
			</div>
			
			<div class="col-6 border pl-4 pr-4 p-1">
				<label for="nome">Nome <small style="color:red;">*</small></label> <br />
				<input required="true" name="nome" type="text" placeholder="INSIRA NOME DO CIDADÃO OU EMPRESA..."  class="form-control text-uppercase" maxlength="50" value="{{$equipamento->nome}}" required>
			</div>
			
		</div>
		
		<!-- AQUI COMEÇA A SEGUNDA LINHA DE DADOS -->
		<div class="row form-group" style="height: 100px;">
			
			<div class="col-3 border pl-4 pr-4 p-1">
				<label for="meio_entrada">Meio de Entrada <small style="color:red;">*</small></label> <br />
				<input type="text" name="meio_entrada" placeholder="outros" id="meio_entrada" class="form-control" value="{{$equipamento->meio_entrada}}" required>
			</div>
						
			<div class="col-3 border pl-4 pr-4 p-1">
				<label for="codigo_entrada">Código</label> <br />
				<input  name="codigo_entrada" type="text" class="form-control" placeholder="FalaBr/SisOuvidor... " maxlength="50" value="{{$equipamento->codigo_entrada}}">
			</div>			
			
			<div class="col-3 border pl-4 pr-4 p-1">
				<label for="telefone">Telefone</label> <br />
				<input type="tel" id="telefone" class="form-control phone_with_ddd" name="telefone" placeholder="( ) 99999-9999" value="{{$equipamento->telefone}}">
			</div>			
			
			<div class="col-3 border pl-4 pr-4 p-1">
				<label for="resp_cadastro">Responsável pelo cadastro <small style="color:red;">*</small></label> <br />
				<input required="true" name="resp_cadastro" type="text"	class="form-control text-uppercase" value="{{auth() -> user() -> name}}" placeholder="" maxlength="50" >
			</div>
		</div>
		
		
		
		<!-- AQUI COMEÇA A TERCEIRA LINHA DE DADOS -->
		<div class="row form-group m-3 mb-5">
					
			<div class="col-10 border pl-4 pr-4 p-1" id="endereco" >
				<div class="row">
				<div class="col-4"><label for="endereco">Logradouro</label><input type="text" class="form-control" name="endereco" maxlength="50" value="{{$equipamento->endereco}}"></div>
				<div class="col-1"> <label for="numero">Nº</label><input  type="text" class="form-control text-uppercase" name="numero" maxlength="4" value="{{$equipamento->numero}}"/></div>
				<div class="col-2"> <label for="bairro">Bairro</label><input  type="text" class="form-control" name="bairro" maxlength="25" value="{{$equipamento->bairro}}"/></div>				
				<div class="col-2"><label for="cidade">Cidade</label> <input  type="text" class="form-control" name="cidade" maxlength="25" value="{{$equipamento->cidade}}"/></div>				
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
                        <option value="{{$equipamento->uf}}" selected>{{$equipamento->uf}}</option>
					</select>
				</div>				
				<div class="col-2"><label for="cep">CEP</label><input placeholder="00.000-000"  type="text" class="form-control text-uppercase cepnacional" id="cep1" name="cep" value="{{$equipamento->cep}}"/></div>
				
				</div>
			</div>
			
			
			
		</div>
		
		<!-- AQUI COMEÇA A QUARTA LINHA DE DADOS -->
		<div class="row form-group">
			<div class="col-4"></div>
			
			<div class="col-4">
				
				<label for="observacao">Informações Complementares</label> <br />
				<textarea class="form-control" rows="5" name="observacao" placeholder="As informações inseridas aqui serão lidas pelo cidadão.">{{$equipamento->observacao}}</textarea>
				<!--<textarea class="form-control text-uppercase" rows="5" name="observacao" placeholder="As informações inseridas aqui serão lidas pelo cidadão."></textarea> -->
			</div>
			<div class="col-4"></div>
		</div>

		<div class="row">
				
							
			<div class="col-4"></div>	
			<div class="col-4 border pl-4 pr-4 p-2 m-2 form-check">				
				<p class="text-center"> Carta Fala.BR <br>
					<label style="color: red;">(a Carta não será impressa nesta edição)</label>
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
					Tratando do mesmo objeto 
				 </label> <br /> <br />
				
			</div>
			<div class="col-4"></div>	
				
		
			</div>
		
					
		<input type="hidden" name="iddatas" value="{{$equipamento->id}}">
		<!-- AQUI COMEÇA A QUINTA LINHA DE DADOS -->
		<div class="row form-group" align="center" >
			<div class="col-3"></div>
			<div class="col-6">
				<button type="submit" name="enviar" class="btn btn-success" value="enviar">Atualizar</button>
                <a href="/" class="btn btn-info"> Voltar</a>
				
				
			</div>
			<div class="col-3"></div>		
		</div>
</form>


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


<!-- mascaras necessárias ao projeto -->
	<script>
		$(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cepnacional').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 00000-0000');
  $('.bicf').mask('00000');
  $('.protocolosei').mask('00000.000000/0000-00');


  $("#cpfcnpj").keydown(function(){
    try {
        $("#cpfcnpj").unmask();
    } catch (e) {}

    var tamanho = $("#cpfcnpj").val().length;

    if(tamanho < 11){
        $("#cpfcnpj").mask("999.999.999-99");
    } else {
        $("#cpfcnpj").mask("99.999.999/9999-99");
    }

    // ajustando foco
    var elem = this;
    setTimeout(function(){
        // mudo a posição do seletor
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    // reaplico o valor para mudar o foco
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});


		});
	</script>
</body>
</html>