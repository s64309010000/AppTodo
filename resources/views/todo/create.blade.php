<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO APP | Creat</title>
</head>
<body>
    <h3>
       หน้าเพิ่มรายการข้อมูล
    </h3>
    <h3>
        <x-alert/>
    </h3
    <form action="/upload" method="post">
        @csrf
        <input type="text" name="title" />
        <input type="submit" value="เพิ่มข้อมูล" />
    </form>
    <br>
    <a href="/index">กลับหน้าแรก</a>
</body>
</html>