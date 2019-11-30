@extends('layouts.login')

@section('userType', 'Professor')

@section('content')
    <form role="form" method="post" action="{{ route('post.teacher.login') }}">
        @csrf
        <div class="form-group mb-3">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input class="form-control" name="ra" placeholder="RA" type="text">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input class="form-control" name="password" placeholder="Senha" type="password">
            </div>
        </div>
        <div class="custom-control custom-control-alternative custom-checkbox">
            <input class="custom-control-input" id="customCheckLogin" type="checkbox">
            <label class="custom-control-label" for="customCheckLogin">
                <span class="text-muted">Lembrar-me</span>
            </label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary my-4">Entrar</button>
        </div>
    </form>
@endsection
