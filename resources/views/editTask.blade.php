<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >


    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>


<h1 class="flex-center">Update Task</h1>
<div class="flex-center">


    <div class="content">
        @foreach($tasks as $p)
            <form action="{{URL::to('update_task/'.$p->id)}}" method="post">
                {{csrf_field()}}
                Name<input type="text" class="form-control" name="name" value="{{$p->name}}" required=""><br>
                Price<input type="text" class="form-control" name="price" value="{{$p->price}}" required=""><br>
                Description<input type="text" class="form-control" name="description" value="{{$p->description}}" required=""><br>
                <div class="clearfix"></div>
                <input type="submit" class="btn btn-success" value="Update Task" name="update_task" data-target="#exampleModal">
            </form> <br><br>
        @endforeach


    </div>
</div>
</body>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
</html>
