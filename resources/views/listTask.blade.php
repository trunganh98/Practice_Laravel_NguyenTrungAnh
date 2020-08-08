@extends('user_layout')
@section('content')
                <form action="{{URL::to('find_task')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="value" placeholder="Enter id or name" required=""><br>
                    <div class="clearfix"></div>
                    <input class="btn-info" type="submit" value="Find Task" name="find_task" data-target="#exampleModal">
                </form>
                <br>
                <form action="{{URL::to('add_task')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="name" placeholder="name" required=""><br>
                    <input type="text" class="form-control" name="price" placeholder="price" required=""><br>
                    <input type="text" class="form-control" name="desc" placeholder="desc" required=""><br>

                    <div class="clearfix"></div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="Add Task" name="add_task" data-target="#exampleModal">
                </form>

                @if(count($tasks) > 0)
                    <h2>Current task</h2>

                    <table class="table">
                        @foreach($tasks as $p)
                        <tr>
                            <td>
                                {{$p->name}}
                            </td>
                            <td>
                                {{$p->price}}
                            </td>
                            <td>
                                {{$p->description}}
                            </td>
                            <td>
                                <a href="{{URL::to('edit_task/'.$p->id)}}">
                                    <input class="btn btn-success" type="submit" value="edit value" name="edit_value">
                                </a>
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete ?')" href="{{URL::to('delete_task/'.$p->id)}}">
                                    <input class="btn btn-danger" type="submit" value="delete value" name="delete_value">
                                </a>
                            </td>


                        </tr>
                        @endforeach
                    </table>
                @endif
                @endsection
