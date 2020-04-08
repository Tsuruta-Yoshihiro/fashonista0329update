{{-- layouts/upload.blade.phpを読み込む --}}
@extends('layouts.upload')

{{-- upload.blade.phpの@yield('title')に'投稿が完了しました'を埋め込む --}}
@section('title', '投稿が完了しました')

{{-- upload.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>投稿が完了しました</h2>
                   
                   <!-- 小さいユーザー情報を表示 -->
                   <div id="user_header_mini" class="sticky">
                        <div class="container clearfix">
                            <div class="main clearfix">
                                <div class="avatar">
                                    <p>
                                        <a href="#" class="over">
                                            <img src="//cdn.wimg.jp/content/no_image/profile/nu_80.gif" alt="#" width="48" height="48">
                                        </a>
                                    </p>
                                </div>
                                
                                <div class="content">
                                    <p class="name">###</p>
                                    <div class="meta clearfix">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   <div id="gbl_body" class="clearfix">
                       <div id="content_container" class="clearfix">
                           
                       </div>
                   </div>
            </div>
        </div>
    </div>
@endsection