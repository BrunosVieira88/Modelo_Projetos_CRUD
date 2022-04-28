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
<body style="width: 100%;">
   <section class="container">
    <div class="row">
        @foreach ($resultado as $item)
        <div class="col-md-3">
            {{$item->nome}}  
            
            <br>
        <img src="/storage/{{$item->foto}}" width="60%" >
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