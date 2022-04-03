<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
    <a href="{{url('messages')}}">戻る</a>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    <form action="{{url('messages')}}" method="post">
        @csrf
        <p>カテゴリー:<input type="text" name="category_id" id="" value="{{old('category_id')}}"></p>
        <p>タイトル:<input type="text" name="title" id="" value="{{old('title')}}"></p>
        <p>本文:</p>
        <textarea name="body" id="" cols="10" rows="5">{{old('body')}}</textarea><br>
        <input type="submit" value="送信">
    </form>
</body>
</html>