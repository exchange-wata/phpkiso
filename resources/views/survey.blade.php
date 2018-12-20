@extends('layout')
 
@section('content')
    <h1>お問い合せ</h1>
 
    <hr/>
 
    <form action="list" method="POST">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="subject">お問い合わせタイトル</label>
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">お問い合わせ内容</label>
                    <textarea name="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="name">お名前</label>
                    <input name="name" class="form-control" placeholder="enter your name">
                </div>
                <div class="form-group">
                    <input type="submit" value="お問い合わせ" class="form-control btn-info">
                </div>
            </form>

@endsection