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
                <form action="{{ action('User\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="user_name">ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="user_name" value="{{ old('user_name' )}}">
                        </div>
                    </div>
                    
                    <form id="logical">
                        <p style="display:inline-block; width:150px;">
                            <input type="radio" value="and" name="radiogroup2" checked />男</p>
                            
                        <p style="display:inline; ">
                            <input type="radio" value="or" name="radiogroup2" />女
                            
                    </form>
                
                    
                </form>
            </div>
        </div>
    </div>
@endsection