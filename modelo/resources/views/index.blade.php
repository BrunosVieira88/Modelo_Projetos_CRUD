@extends('layouts.app')

@section('content')


@if(isset($msg))
{{$msg}}
@endif
<section class="container">
    <div class="row" style="margin-left:15%;">
        @foreach ($resultado as $item)
            <div class="col-md-3 text-center mt-2 mb-2 card_personalizado">
                <div>
                    <p class="mt-5 maiusculo">{{$item->nome}}</p>                  
                    <br>
                    <div style="height: 5em;">
                        <img src="/storage/{{$item->foto}}" width="75em" >
                    </div>
                    <br><br>
                        {{$item->descricao}}
                    <h3>{{$item->preco}}</h3> 

                </div>
                <div style="height: 5em;">
                    <form action="/deletar/produto/{{$item->id}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button>Deletar</button>
                    </form>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{$item->id}}">
                        Launch demo modal
                    </button>
                </div>
            </div>
             <!-- Modal -->
    <div class="modal fade" id="{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/edita/produto/{{$item->id}}" method="post" name="form1" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label for="">Nome</label>
                    <input type="text" name="nome" value="{{$item->nome}}">
                    <label for="">Descricao</label>
                    <input type="text" name="descricao" value="{{$item->descricao}}">
                    <label for="">preco</label>
                    <input type="text" name="preco" value="{{$item->preco}}">
                    <button type="submit" >Enviar</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </form>
            </div>
            </div>
        </div>
    </div>
        @endforeach
    </div>
   
</section>

   
   
 
    <button onclick="redireciona()">Cadastrar</button>

<script>
    function redireciona(){
        window.location.href = "/cadastro";
    }
</script>

@endsection