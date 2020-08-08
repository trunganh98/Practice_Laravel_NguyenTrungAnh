@extends('user_layout')
@section('content')
    <h1>Result</h1>
                <table class="table">
                    <thead>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                    </thead>
                    <tbody>
                    @foreach($result as $p)
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
                        </tr>
                    @endforeach
                    </tbody>

                </table>
    <a href="{{URL::to('/')}}"><input type="submit" value="Back"></a>

                @endsection
