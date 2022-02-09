<?php
$id = $_GET['_token'];


$nome = $_GET['nome'];

$codigo_entrada = $_GET['codigo_entrada'];
$observacao = $_GET['observacao'];

$endereco = $_GET['endereco'];
$bairro = $_GET['bairro'];
$numero = $_GET['numero'];
$cep = $_GET['cep'];
$uf = $_GET['uf'];
$cidade = $_GET['cidade'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Carta Empresa</title>
    <style type="text/css" media="print">
   .no-print { display: none; }
</style>

</head>
<body>
<div class="container">
	
	<div class="" style="font-family: Times New Roman;">
			<br /><br /><br />
			<div style="align-items: center; text-align: center;">
            <img src="{{ asset('storage/img/armasBr.png') }}" style="width: 100px;"><br />
				<p style="font-family: Times New Roman, Times, serif;">
					<b>MINISTÉRIO DA ECONOMIA</b> <br />
					Secretaria Executiva <br />
					Ouvidoria <br />
					
					
				</p>
			</div>
			<br /><br />
			<div>
				<p style="text-align: right;">				
				<!--< ?php echo "Brasília/DF, $datacarta"?>
				<br /><br /> -->
				<?php
				
				setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
				date_default_timezone_set('America/Sao_Paulo');
				echo ("Brasília,");
				echo strftime (' %d de %B de %Y.', strtotime('today'));
				?>
				
				</p>
			</div>
            <div class="content-inside">
		
        <p>
        <br /><br />
            <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Senhor (a) <label class="text-uppercase"> < ?php echo "$nome" ?></label>,<br /><br /> -->
            <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Senhor (a) <label class="text-capitalize"><php echo "$nome" ?></label>,<br /><br /> -->
                Ao Senhor (a), <br /><label class="text-capitalize"> <?php echo "$nome" ?></label> <br />			
                <?php echo "$endereco - $bairro - $numero <br />
                     CEP: $cep - $cidade - $uf" ?><br /> <br />
            
            <p class="text-justify">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comunicamos que a carta dirigida ao Exmo. Sr. Presidente da República foi cadastrada nesta Ouvidoria, sob o número de protocolo <?php echo "$codigo_entrada"; ?>, e será levada ao conhecimento da área responsável para análise dos fatos. <br />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A resposta final poderá ser consultada, mediante o fornecimento do número do protocolo e do código de acesso, por meio do seguinte link: <br />
                
            </p>	
            
            <p class="text-justify">
                https://sistema.ouvidorias.gov.br/publico/Manifestacao/ConsultarManifestacaoLogin.aspx <br />
                
            </p>
            
            <p class="text-justify">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Por oportuno, sugerimos que, caso seja de seu interesse, para futuras manifestações, utilize o FalaBr - Plataforma que permite aos cidadãos fazer pedidos de informações públicas e manifestações de ouvidoria, em conformidade
                com a Lei de Acesso à Informação e o Código de Defesa dos Usuários de Serviços Público diretamente na internet.  <br />
                
            </p>
            
            <p class="text-justify">
            <?php
            if($observacao != ""){
            
            echo "Observação: $observacao";
            }
            ?>
            </p>
            
            <br />
            <p style="text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A Ouvidoria do Ministério da Economia agradece o seu contato. <br /> </p> 
            
                            
    </div>
				<div class="footer">
				   <p> Esplanada dos Ministérios, Bloco F, Ed. Anexo, Ala A, Térreo - Bairro Zona Cívica, CEP 70.059-900 - Brasília/DF <br /></p>
				</div>	
				
	</div>
	
</div>
<a href="/" class="btn btn-primary no-print">Voltar para o Sistema</a>
<script>
	window.print()
</script> 

	
<footer class="text-center" style="bottom:0; position:absolute; text-align:center;"><?php echo "id: $id"?></footer>
</body>
</html>