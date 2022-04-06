@extends('layouts.message_app')

@section('title', 'メッセージ一覧')

@section('content')
<a href="{{url('/messages/create')}}">メッセージ作成</a>
<table border="1">
    <tr>
        <th>ID</th><th>カテゴリー</th><th>タイトル</th><th>ユーザー</th><th>編集</th><th>削除</th>
    </tr>
    @forelse ($messages as $message)
    <tr>
        <td>{{$message->id}}</td>
        <td>{{$message->category->name}}</td>
        <td><a href="{{url("/messages/{$message->id}")}}">{{$message->title}}</a></td>
        <td>{{$message->user->name}}</td>
        <td>
            @if ($message->user_id == Auth::id())
                <a href="{{url("/messages/{$message->id}/edit")}}">編集</a></td>
            @endif
        </td>
        <td>
            @if ($message->user_id == Auth::id())
                <form action="{{url("/messages/{$message->id}")}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除">
                </form>
            @endif
        </td>
    </tr>
    @empty
        <tr>
            <td colspan="6">メッセージがありません</td>
        </tr>
    @endforelse
</table>
@unless (is_null($messages->previousPageUrl()))
    <a href="{{$messages->previousPageUrl()}}">前へ</a>
@endunless
{{$messages->currentPage()}}/{{$messages->lastPage()}}
@unless (is_null($messages->nextPageUrl()))
    <a href="{{$messages->nextPageUrl()}}">次へ</a>
@endunless
<br>
@endsection
