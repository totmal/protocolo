

    <br />

<hr></hr>

 <br />
<div class="container">
    <div class="row justify-content-center">
        <div class="title col-12 col-lg-8">
            <h5 class="text-center">Abaixo serão listado os 30 ultimos cadastros</h5>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="media-container-column col-lg-8" data-form-type="formoid">
            
            
            
                
             <table class='table table-striped table-hover text-center'>
                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>Item</th>
                            <th scope='col'>PROTOCOLO</th>
                            <th scope='col'>Data Cad.</th>
                            <th scope='col'>Nome</th>
                            <th scope='col'>CPF/CNPJ</th>
                            <th scope='col'>Observação</th>
                            <th scope='col'>Editar</th>
                            <th scope='col'>Reimprimir</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php $contador = 1 ?>

                    @foreach($protocolo as $equipamento)
                <form action='/editarCadastro' method='post' target='_blank'><tbody class='table-hover'>
                    @csrf
                <tr>
                    <input type='hidden' name='_token0' value='{{$equipamento->_token}}'>
                    <td name="contador">{{ $contador }}</td><input type="hidden" name="contador" value="{{ $contador }}">
                    <td name="protocolo" >{{ $equipamento->protocolo }}</td><input type="hidden" name="protocolo" value="{{ $equipamento->protocolo }}">
                    <td name="datas" >{{ $equipamento->datas }}</td><input type="hidden" name="datas" value="{{ $equipamento->datas }}">
                    <td name="nome" >{{ $equipamento->nome }}</td><input type="hidden" name="nome" value="{{ $equipamento->nome }}">
                    <td name="cpf" >{{ $equipamento->cpf }}</td><input type="hidden" name="cpf" value="{{ $equipamento->cpf }}">
                    <td name="observacao" >{{ $equipamento->observacao }}</td><input type="hidden" name="observacao" value="{{ $equipamento->observacao }}">
                    <!-- <td><button type='submit' name='imprimircarta' class='btn btn-primary' value='alterar'>Editar</button></td> -->
                    <td>

                        @if($equipamento->tipoCarta == 'naoEmitir')
                        <?php $botaodeimpressao = "<td class='index5'></td>";?>
                        @else
                        <?php $botaodeimpressao = "<td class='index5'><button type='submit' name='imprimircarta' class='btn btn-success' value='imprimircarta'>Imprimir</button></td>"; ?>
                        @endif
                      <input type="hidden" name="tipodecarta" value="{{$equipamento->tipoCarta}}">
                      <input type="hidden" name="id" value="{{$equipamento->id}}">
                      <?php  
					
					print "<button type='submit' name='imprimircarta' class='btn btn-primary' value='alterar'>Editar</button></td>
								$botaodeimpressao ";	?>
                    </td>
                </tr>
                <?php $contador++; ?>
                </form>
            @endforeach
            </tbody>
                </table>

            
        </div>
    </div>
</div>
<br />
@extends('layouts.rodape')

</body>
</html>