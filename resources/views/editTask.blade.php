@extends('user_layout')
@section('content')
    <h1>Update Task</h1>
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

@endsection
