@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mssv</th>
                            <th>Favorities</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->mssv}}</td>
                            <td>{!!$messi->favorities!!}</td>
                            <td>{{$messi->email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection