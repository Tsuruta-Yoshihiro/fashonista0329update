{{-- layouts/upload.blade.phpを読み込む --}}
@extends('layouts.upload')

{{-- upload.blade.phpの@yield('title')に'投稿が完了しました'を埋め込む --}}
@section('title', '投稿が完了しました')

{{-- upload.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                
                 <div class="title_upload">投稿が完了しました</div>
                   
                   <form action="{{ action('User\CoordinationController@upload') }}" method="get" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
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
                                <p class="btn_profileupdate">
                                    <a href="/profile/edit/" class="over">プロフィール変更</a>
                                </p>
                            </div>
                            
                                <div id ="gbl_body" class="clearfix">
                                    <div id="user_menu">
                                        <nav class="clearfix">
                                            <div class="main">
                                                <ul class="clearfix">
                                                    
                                                    <li>
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
                                <div id="content">
                                    <p class="btnAdd">
                                        <a href="/user/upload/item/" class="over">コーディネートを投稿する</a>
                                    </p>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection