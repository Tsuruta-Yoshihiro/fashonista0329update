{{-- layouts/othermypages.blade.phpを読み込む --}}
@extends('layouts.othermypages')

{{-- othermypages.blade.phpの@yield('title')に'他マイページ'を埋め込む --}}
@section('title', '他マイページ')

{{-- othermypages.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>他マイページ</h2>
                
                  <header id="gbl_title" class="othermypages">
                      <div id="user_header" class="clearfix">
                          <div id="user_sub">
                              <div class="image">
                                  <p class="img">
                                      <img src="###" alt="###" width="148" height="148">
                                  </p>
                              </div>
                              <!-- フォロー機能ボタン -->
                              <div class="btn_follow">
                                  <p class="btn"></p>
                              </div>
                              
                              <div id="user_main">
                                  <section class="intro">
                                      <h1 class="name">
                                      </h1>
                                  </section>
                              </div>
                              
                          </div>
                      </div>
                  </header>
                  
            </div>    
        </div>
    </div>
@endsection    