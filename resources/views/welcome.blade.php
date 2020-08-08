<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <form action="{{URL::to('add_task')}}" method="post">
                    {{csrf_field()}}
                    <input type="text" class="ggg" name="name" placeholder="name" required=""><br>
                    <input type="text" class="ggg" name="price" placeholder="price" required=""><br>
                    <input type="text" class="ggg" name="desc" placeholder="desc" required=""><br>

                    <div class="clearfix"></div>
                    <input type="submit" value="add task" name="add_task" data-target="#exampleModal">
                </form>

                @if(count($tasks) > 0)
                    <br>Current task    <br>

                    <table>
                        @foreach($tasks as $p)
                        <tr>
                            <td>
                                {{$p->name}}
                            </td>
                            <td>
                                {{$p->price}}
                            </td>
                            <td>
                                {{$p->desciption}}
                            </td>
                            <td>
                                <a href="{{URL::to('edit_task/'.$p->id)}}">
                                    <input type="submit" value="edit value" name="edit_value">
                                </a>
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete ?')" href="{{URL::to('delete_task/'.$p->id)}}">
                                    <input type="submit" value="delete value" name="delete_value">
                                </a>
                            </td>


                        </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </body>
</html>
