{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.user')

{{-- user.blade.phpの@yield('title')に'コーディネート投稿'を埋め込む --}}
@section('title', 'コーディネイト投稿')

{{-- user.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>コーディネート投稿</h2>
            </div>
        </div>
    </div>
@endsection