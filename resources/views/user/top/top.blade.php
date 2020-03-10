{{-- layouts/top.blade.phpを読み込む --}}
@extends('layouts.top')

{{-- top.blade.phpの@yield('title')に'Welcome Fashonista'を埋め込む --}}
@section('title', 'Welcome Fashonista')

{{-- top.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Welcome Fashonista</h2>
            </div>
        </div>
    </div>
@endsection