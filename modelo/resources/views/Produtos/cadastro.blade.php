<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(isset($atriz))
    <div>
        cadastrado com sucesso  {{$atriz->nome ?? ''}}
      IDADE {{$atriz->idade ?? ''}}
      CAPA {{$atriz->capa}}
    </div>
@endif
@if(isset($ERRO))
{{$ERRO}}
@endif
   
    <br>
   cadastro
    <form action="/cadastro/post" method="post" name="form1" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="">Nome</label>
        <input type="text" name="nome">
        <label for="">Descricao</label>
        <input type="text" name="descricao">
        <label for="">preco</label>
        <input type="text" name="preco">
        <label for="">Foto</label>
        <input type="file" name="foto" id="foto">
        <button type="submit" >Enviar</button>
    </form>
    <a href="/">Retorna</a>
</body>
</html>
