<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
    <a href="{{route('messages.index')}}">戻る</a>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    <form action="{{url('messages')}}" method="post">
        @csrf
        カテゴリー:
        <select name="category_id" id="">
            @foreach ($categories as $category)
                @if ($category->id == old('category_id'))
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
            @endforeach
        </select><br>
        タイトル:<input type="text" name="title" id="" value="{{old('title')}}"><br>
        本文:<br>
        <textarea name="body" id="" cols="10" rows="5">{{old('body')}}</textarea><br>
        <input type="submit" value="送信">
    </form>
</body>
</html>