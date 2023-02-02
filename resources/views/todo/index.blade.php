<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO APP | Home</title>
</head>
<body>

    <h1>รายการข้อมูลทั้งหมด</h1>
    <h3>
        <a href="/create">เพิ่มข้อมูล</a>
    </h3>
    <h3>
        <x-alert/>
    </h3>
    @foreach($todos as $todo)
        <li>
            @if($todo->completed)
                <span>{{ $todo->title }}</span>
            @else
                {{ $todo->title }}
            @endif
            <a href="{{ asset('/'.$todo->id.'/edit') }}">แก้ไข</a>
            <a href="{{ asset('/'.$todo->id.'/comleted') }}">สำเร็จ</a>
            <a href="{{ asset('/'.$todo->id.'/delete') }}">ลบ</a>
        </li>
    @endforeach
    
</body>
</html>