<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Product List</title>
    <style>
        .card{
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach($data as $item)
        <div class="card" style="width: 30%; margin:10px auto;">
        
            <img src="{{$item['image']}}" style="height:14rem;"class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$item['title']}}</h5>
                <p class="card-text">{{$item['description']}}</p>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
            </div>
        
               
        </div>
        @endforeach
    </div>
       
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>