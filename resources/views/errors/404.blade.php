@extends('layouts.master')
@section('title')
    页面没有找到
@endsection

@section('content')
<section id="hero">
    <div class="intro_title error">
        <h1 class="animated fadeInDown">404</h1>
        <p class="animated fadeInDown">页面不存在或者已经被删除</p>
        <a href="/" class="animated fadeInUp button_intro">返回首页</a> <a href="/tour" class="animated fadeInUp button_intro outline">查看所有路线</a>
    </div>
</section>
@endsection