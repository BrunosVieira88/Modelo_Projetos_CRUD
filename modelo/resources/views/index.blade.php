<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.maiusculo{
    text-transform: uppercase;
}



.card_personalizado{
    border: 1px solid black;
    padding:1%; 
    margin-right:1%;
    box-shadow: 2px 2px 2px black;
}
</style>
<body style="width: 100%;">
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
                    <img src="/storage/{{$item->foto}}" width="60%" >
                    <br>
                    {{$item->descricao}}
                    <br>
                    <h3>{{$item->preco}}</h3> 
                    <form action="/deletar/produto/{{$item->id}}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button>Deletar</button>
                    </form>
                   
                </div>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal_{{$item->id}}">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal_{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              
            </div>
              
           
        @endforeach
    </div>

</section>

   
   
 
    <button onclick="redireciona()">Cadastrar</button>
</body>
</html>
<script>
    function redireciona(){
        window.location.href = "/cadastro";
    }
</script>