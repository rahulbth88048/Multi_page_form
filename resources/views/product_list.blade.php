<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Product List</title>
    <style>
        .containers{
            margin: 0px auto;
            max-width: 1300px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            background-color: rgb(244, 240, 240);
        }
        img{
            height: 15rem;
        }
        .card{
            height: 30rem;
            border-radius: 10px;
            box-shadow: 5px 10px rgb(139, 137, 137);
        }
        .text-dark{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="containers">
        @foreach($data as $item)
        <div class="card m-4" style="width: 18rem;">
            <img src="{{$item['image']}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$item['title']}}</h5>
              <h6>{{$item['category']}}</h6>
              <h6>${{$item['price']}}</h6>
              <!-- <p class="card-text">{{$item['description']}}</p> -->
              <div class="d-grid gap-2">
                <a href="#" class="btn btn-warning text-dark">BUY NOW</a>
            </div>
            </div>
          </div>
        @endforeach
    </div>
       
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>