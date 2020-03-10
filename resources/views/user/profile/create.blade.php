{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'新規登録ページ'を埋め込む --}}
@section('title', '新規登録ページ')

{{-- profile.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>新規登録ページ</h2>
            </div>
        </div>
    </div>
@endsection