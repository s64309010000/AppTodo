<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO APP | Edit</title>
</head>
<body>
    <h1> แก้ไขข้อมูลของตนเอง</h1>
    <h3>
        <x-alert/>
    </h3>
    <form action="/update" method="post">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{ $todo=>title }}" />
        <input type="number" name="id" value="{{ $todo->id }}">
        <input type="submit" value="แก้ไขข้อมูล" />
    </form>
    <br>
    <a href="/index">กลับหน้าแรก</a>
</body>
</html>