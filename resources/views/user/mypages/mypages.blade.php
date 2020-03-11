{{-- layouts/mypages.blade.phpを読み込む --}}
@extends('layouts.mypages')

{{-- mypages.blade.phpの@yield('title')に'マイページ'を埋め込む --}}
@section('title', 'マイページ')

{{-- mypages.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>マイページ</h2>
            </div>
        </div>
    </div>
@endsection