@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="cotainer">
            <div class="row justify-content-center">
            <table class="table table-bordered table-striped" >
                <div class="col-md-4">
                    <div class="card">
                        <br>
                        <h3 class="text-center">Màn hình cập nhật</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <div class="form-group mb-3">
                            <div class="row">
                            <div class="col-md-3">
                                <label for="name" class="form-label">Username</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{ $user->name }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                </div>
                            </div>
                            </div>
                            <div class="form-group mb-3">
                            <div class="row">
                            <div class="col-md-3">
                                <label for="name" class="form-label">Mssv</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" placeholder="mssv" id="mssv" class="form-control" name="mssv" value="{{ $user->mssv }}" required autofocus>
                                @if ($errors->has('mssv'))
                                    <span class="text-danger">{{ $errors->first('mssv') }}</span>
                                @endif
                                </div>
                            </div>
                            </div>
                            <div class="form-group mb-3">
                            <div class="row">
                            <div class="col-md-3">
                                <label for="name" class="form-label">Mssv</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" placeholder="favorities" id="favorities" class="form-control" name="favorities" value="{!! $user->favorities !!}" required autofocus>
                                @if ($errors->has('favorities'))
                                    <span class="text-danger">{!! $errors->first('favorities') !!}</span>
                                @endif
                                </div>
                            </div>
                            </div>
                            <div class="form-group mb-3">
                            <div class="row">
                                <div class="col-md-3">
                                <label for="password" class="form-label">Mật khẩu</label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" placeholder="Mật khẩu" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                <div class="col-md-3">
                                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                            </div>
                        <div class="col-md-9">
                            <input type="password" placeholder="Nhập lại mật khẩu" id="password_confirmation" class="form-control" name="password_confirmation" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="email_address" class="form-label">Email</label>
                            </div>
                                <div class="col-md-9">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control" value="{{ $user->email }}" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                    </div>
                                </div>
                                </div>
                                <br>
                                <br>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="{{ route('user.list') }}" class="me-md-2">Đã có tài khoản</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </table>
            </div>
        </div>
    </main>
@endsection