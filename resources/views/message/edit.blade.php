@extends('layouts.message_app')

@section('title', 'メッセージ編集')

@section('content')
<a href="{{route('messages.index')}}">戻る</a>
<form action="{{url("messages/{$message->id}")}}" method="post">
    @csrf
    @method('PATCH')
    ID:{{$message->id}}<br>
    ユーザー:{{$message->user->name}}<br>
    カテゴリー:
    <select name="category_id" id="">
        @foreach ($categories as $category)
            @if ($category->id == old('category_id', $message->category_id))
                <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @else
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
        @endforeach
    </select><br>
    タイトル:<input type="text" name="title" id="" value="{{old('title') ? old('title') : $message->title}}"><br>
    本文:<br>
    <textarea name="body" id="" cols="10" rows="5">{{old('body') ? old('body') : $message->body}}</textarea><br>
    <input type="submit" value="送信">
</form>
@endsection
