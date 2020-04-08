{{-- layouts/user.blade.phpを読み込む --}}
@extends('layouts.user')

{{-- user.blade.phpの@yield('title')に'コーディネート投稿'を埋め込む --}}
@section('title', 'コーディネイト投稿')

{{-- user.blade.phpの@yield('content')に以下タグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>コーディネート投稿</h2>
                
                   <div id="gbl_body" class="clearfix">
                       <div id="content">
                           <form action="/user/upload/coordination" name="regist_coordination" method="post">
                               <div id="upload_container">
                                   <section id="upload_img" class="clearfix">
                                       <div class="section_sub required">
                                           <h2>コーディネート画像</h2>
                                       </div>
                                       <div class="section_main clearfix">
                                           <div class="sub">
                                               <div class="img_box">
                                                   <span class="ico"></span>
                                                   <span class="txt">NO IMAGE</span>
                                                   
                                                   <!--
                                                   <p class="img">
                                                     <img src(unknown) alt width="276" height="368">
                                                   </p>

                                                   <p class="loading">
                                                       <span>Loading...</span>
                                                   </p>
                                                   -->
                                                   
                                                   
                                               </div>
                                           </div>
                                           <div class="main">
                                               <div id="ajax_mes"></div>
                                               <p class="select over">
                                                   
                                                   <!--
                                                   <input type="file" id="img_upload_file" name="img_upload_file">
                                                   -->
                                                   
                                                   <span class="txt">写真をアップロード</span>
                                               </p>
                                               <p class="notes">
                                                   推奨サイズ：横500px × 縦：667px
                                                   <br>
                                                   容量：10MB以内
                                               </p>
                                           </div>
                                           <input type="hidden" name="coordination_imgfile" id="coordination_imgfile">
                                       </div>
                                   </section>
                                   
                                   <div id="secondary">
                                       <section id="upload_item" class="clearfix">
                                           <div class="section_sub required">
                                               <h2>着用アイテム</h2>
                                           </div>
                                           <div class="section_main clearfix">
                                               <div id="regist_item">
                                                   
                                               </div>
                                               <div id="add_item">
                                                   <div id="add_btn">
                                                       <p class="trigger over">
                                                           <span class="ico">+</span>
                                                           <span class="txt">アイテムを追加</span>
                                                       </p>
                                                   </div>
                                               
                                               <p class="notes">
                                                   最大６アイテムまで追加できます (残り
                                                   <span class="num">6</span>
                                                   )
                                               </p>
                                               </div>
                                           </div>
                                       </section>
                                       
                                       <section id="coordination_detail" class="clearfix">
                                           <div class="section_sub">
                                               <h2>コーディネート詳細</h2>
                                           </div>
                                           <div class="section_main clearfix">
                                                <div class="list summary">
                                                    <h3>コーディネート紹介文</h3>
                                                     <div class="detail">
                                                        <textarea name="coordination_summary" id="coordination_summary">
                                                        </textarea>
                                                      </div>
                                                 </div>
                                            </div>           
                                       </section>
                                   </div>
                               </div>
                               
                               <div id="processing">
                                   <ul class="clearfix">
                                       <il class="upload">
                                         <a href="#" class="over">投稿する</a>
                                       </il>
                                   </ul>
                               </div>
                           </form>
                       </div>
                       
                   </div>
            </div>
        </div>
    </div>
@endsection