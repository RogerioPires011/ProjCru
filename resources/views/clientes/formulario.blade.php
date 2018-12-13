@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
               Informações do Cliente
                <a class ="float-right" href="{{url('lista')}}">VOLTAR</a></div>
                <div class="card-body">
                <table class="table">
                           <th class="border-right border-left" >ID</th>
                           <th class="border-right" >NOME</th>
                           <th class="border-right" >CPF</th>
                           <th class="border-right" >ENDEREÇO</th>
                           <tbody>
                               <tr>
                                   <td class="border-right border-left border-bottom">{{$cliente->id}}</td>
                                   <td class="border-right border-left border-bottom">{{$cliente->nome}}</td>
                                   <td class="border-right border-left border-bottom">{{$cliente->cpf}}</td>
                                   <td class="border-right border-left border-bottom">{{$cliente->endereco}}</td>
                               </tr>
                           </tbody>
                       </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
