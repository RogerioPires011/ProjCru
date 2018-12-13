@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listagem de Clientes</div>
                <table class="table">
                           <th class="border-right border-left" >ID</th>
                           <th class="border-right" >NOME</th>
                           <th class="border-right" >CONSULTAR</th>
                           <tbody>
                           @foreach($clientes as $cliente)
                               <tr>
                                   <td class="border-right border-left border-bottom">{{$cliente->id}}</td>
                                   <td class="border-bottom">{{$cliente->nome}}</td>

                                   <td class="border-left border-right border-bottom">
                                       <a href="clientes/{{$cliente->id}}/novo"
                                          style="color:black">DADOS</a>
                                       {!! Form::open(['url'=>'/clientes/'.$cliente->id]) !!}
                                       {!! Form::close() !!}
                                   </td>
                               </tr>
                           @endforeach
                           </tbody>
                       </table>
                
                <!--<tr><a class ="float-right" href="{{url('clientes/novo')}}">DADOS</a></tr>-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
