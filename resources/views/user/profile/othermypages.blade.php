{{-- layouts/othermypages.blade.phpを読み込む --}}
@extends('layouts.othermypages')

{{-- othermypages.blade.phpの@yield('title')に'他マイページ'を埋め込む --}}
@section('title', 'マイページ')

{{-- othermypages.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>他マイページ</h2>
                <form action="{{ action('User\ProfileController@othermypages') }}" method="get" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                       ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div id="user_header" class="clearfix">
                        <div id="user_sub">
                            <div class="image">
                                <p class="img">
                                    <img src="//cdn.wimg.jp/content/no_image/profile/nu_200.gif" srcset="//cdn.wimg.jp/content/no_image/profile/nu_640.gif 2x" width="148" height="148">
                                </p>
                            </div>
                            <div class="btn_follow">
                                <p class="btn mypages">
                                    <a href="#" class="over">フォローする</a>
                                </p>
                            </div>
                            <div id="user_menu">
                                <nav class="clearfix">
                                    <div class="main">
                                        <ul class="clearfix">
                                            
                                            <li class="current">
                                                <a href="/user/" rel="nofollow">
                                                    <span>コーディネート</span>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="/user/favorite/" rel="nofollow">
                                                    <span>お気に入り</span>
                                                </a> 
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="sub">
                                        <ul class="clearfix">
                                            <li>
                                                <a href="/user/follower" rel="nofollow">
                                                    <span>フォロワー</span>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="/user/follow/">
                                                    <span>フォロー</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection