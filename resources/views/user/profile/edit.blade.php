{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'プロフィール変更'を埋め込む --}}
@section('title', 'プロフィール変更')

{{-- profile.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール変更</h2>
            </div>
        </div>
    </div>
@endsection