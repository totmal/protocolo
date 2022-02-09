<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa CPF</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta charset="utf-8"/>
	

	<!-- ESSA FUNÇÃO MOSTRA A CAIXA DE ENDEREÇO CASO HAJA NECESSIDADE -->
	
</head>
<body>

<!-- o conteúdo vai aqui -->
<div class="container-fluid" style="background-color:teal; color: white; ">
<a href="/" class="btn btn-info mt-3"><i class="fas fa-arrow-left"></i> Voltar</a>
<div class="text-center">
	<br />
	<p class="small">MINISTÉRIO DA ECONOMIA <br />
	OUVIDORIA DO MINISTÉRIO DA ECONOMIA<br />
	Esplanada dos ministérios, Bloco F, Ed. Anexo 1º andar, Ala "A", Sala 179 - CEP: 70.059-900 - Brasília-DF</p>
	<br />
	<h2><strong>PESQUISAR PROTOCOLO</strong></h2> <br />
	<!--<small>Os campos com <small style="color:white;">*</small>  são de preenchimento obrigatório.</small><br /><br /> -->

	</div>
    </div>		
	
<div class="row">
    <div class="col-6 form-group text-center">
    <form method="get" action="/pesquisa" style="font-weight: bold;"> 
        <!--<form method="post" action="teste.php" style="font-weight: bold;">   <div class="row form-group" align="center" style="background-color: ; height: "> -->
        <div class="row">
            <div class="col-3"></div>    
            <div class="col-6 border pl-8 pr-8 m-3  p-3 form-group"> 
                    
                    <label for="cpf">CPF/CNPJ </label> <br />
                    <input class="form-control" required="true" for="cpf" type="text" id="cpf" name="search" placeholder="000.000.000-00"  />
                    
            </div>
            <div class="col-3"></div>    
        </div> 
            <div class="row form-group">
                <div class="col-2"></div>
                <div class="col-8">
                    <button type="submit" name="enviar" class="btn btn-success" value="enviar">Pesquisar</button>
                    <button type="reset" name="reset" class="btn btn-warning" value="reset">Limpar campos</button>				
                </div>
                <div class="col-2"></div>		
            </div> 
        </form>
    </div>
    <div class="col-6 form-group text-center">
    <form method="get" action="/pesquisanome" style="font-weight: bold;"> 
        <!--<form method="post" action="teste.php" style="font-weight: bold;">   <div class="row form-group" align="center" style="background-color: ; height: "> -->
        <div class="row">
        <div class="col-3"></div>    
        <div class="col-6 border pl-8 pr-8 m-3  p-3 form-group"> 
                
                <label for="cpf">Nome do Cidadão</label> <br />
                <input class="form-control" required="true" for="cpf" type="text" id="cpf" name="search" placeholder="Ex.: João Da silva"  />
                
            </div>
            <div class="col-3"></div>    
            </div> 
            <div class="row form-group">
                <div class="col-2"></div>
                <div class="col-8">
                    <button type="submit" name="enviar" class="btn btn-success" value="enviar">Pesquisar</button>
                    <button type="reset" name="reset" class="btn btn-warning" value="reset">Limpar campos</button>				
                </div>
                <div class="col-2"></div>		
            </div> 
        </form>
    </div>
</div>		
   
 
 <!-- Resultado da Pesquisa-->
@if($search)
Você pesquisou {{$tipo}}: {{$search}} <br><br>

<table class='table table-striped table-hover text-center'>
    <thead class='thead-dark'>
        <tr>
            <th scope='col'>Protocolo</th>
            <th scope='col'>Nome</th>
            <th scope='col'>CPF/CNPJ</th>							   
            <th scope='col'>Meio de Entrada</th>
            <th scope='col'>Código de Entrada</th>
            <th scope='col'>Data de Entrada</th>
            <th scope='col'>Responsável pelo Cadastro</th>
            <th scope='col'>Observação</th>
            <th scope='col'>Editar</th>
            <th scope='col'>Reimprimir</th>
        </tr>
    </thead>
    <tbody>
    @foreach($events as $event) 
        <tr>
            <td>{{$event->protocolo}}</td>
            <td>{{$event->nome}}</td>
            <td>{{$event->cpf}}</td>
            <td>{{$event->meio_entrada}}</td>
            <td>{{$event->codigo_entrada}}</td>
            <td>{{$event->data_entrada}}</td>
            <td>{{$event->responsavel_cadastro}}</td>
            <td>{{$event->observacao}}</td>
            <td><a href="/editar/{{$event->id}}">Editar</a></td>
            <td><a href="/imprimir/{{$event->id}}">Reimprimir</a></td>
        </tr>
@endforeach
    </tbody>
</table>

@else

@endif






</body>
</html>