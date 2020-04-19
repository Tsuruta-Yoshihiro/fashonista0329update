{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- profile.blade.phpの@yield('title')に'新規登録ページ'を埋め込む --}}
@section('title', '新規登録ページ')

{{-- profile.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')

@livewireStyles
@livewire('birthday')
@livewireScripts


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
                        <label class="col-md-2 col-form-label text-md-left" for="user_name">ニックネーム</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="user_name" value="{{ old('user_name' )}}">
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-left" for="gender">性別</label>
                        <div class="col-md-10">
                            <select class="form-control" id="gender" neme="gender">
                                <option value="1">男性</option>
                                <option value="2">女性</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-left" for="height">身長</label>
                        <div class="col-md-10">
                            <select class="form-control" id="height" name="height">
                                <?php
                                for ($i = 140; $i <=210; $i++) {
                                print ('<option value="' . $i. '">' . $i . 'cm</option>');
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                
                    
                    <div class="form-group-row">
                        <label class="col-md-2 col-form-label text-md-left" for="birthday">生年月日</label>
                        <div class="col-md-10">
                            
                            <!-- 年 -->
                            <select name="birth-year" wire:model="year" wire:change="onChange">
                                <option></option>
                                @for($i = 1900 ; $i <= date('Y') ; $i++)
                                <option value="{{ $i }}">{{ $i }}年</option>
                                @endfor
                            </select>
                            
                            <!-- 月 -->
                            <select name="birth-month" wire:model="month" wire:change="onChange">
                                <option></option>
                                @for($i = 1 ; $i <= 12 ; $i++)
                                <option value="{{ $i }}">{{ $i }}月</option>
                                @endfor
                            </select>
                            
                            <!-- 日 -->
                            <select name="birth-day" wire:model="day" wire:change="onChange">
                                <option></option>
                                @for($i = 1 ; $i <= $last_day_of_month ; $i++)
                                <option value="{{ $i }}">{{ $i }}日</option>
                                @endfor
                            </select>
                            
                            <!-- 年齢 -->
                            @if($age > -1)
                                &nbsp;/&nbsp;{{ $age }} 才
                            @endif
                            
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-left" for="age">年齢</label>
                        <div class="col-md-10">
                            <select class="form-control" id="age" neme="age">
                                <option value="1">表示する</option>
                                <option value="2" selected>表示しない</option>
                            </select>
                        </div>
                    </div>
                    
                    {{ csrf_field() }}
                    <input id="submit_button" type="submit" class="btn btn-primary" value="登録する">
                    
                </form>
            </div>
        </div>
    </div>
@endsection