<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
    <a href="{{url()->previous()}}">戻る</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <td>{{$message->id}}</td>
        </tr>
        <tr>
            <th>カテゴリー</th>
            <td>{{$message->category->name}}</td>
        </tr>
        <tr>
            <th>ユーザー</th>
            <td>{{$message->user->name}}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{$message->title}}</td>
        </tr>
        <tr>
            <th>本文</th>
            <td>{{$message->body}}</td>
        </tr>
        <tr>
            <th>作成日時</th>
            <td>{{$message->created_at}}</td>
        </tr>
        <tr>
            <th>更新日時</th>
            <td>{{$message->updated_at}}</td>
        </tr>
    </table>
</body>
</html>