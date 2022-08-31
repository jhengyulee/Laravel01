<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    this is index blade....

    {{-- 新增  方法一 --}}
    {{-- <a href="/bikes/create">create</a> --}}

    {{-- 方法二 --}}
    <a href="{{route('bikes.create')}}">create</a>

    {{-- 編輯 --}}
    {{-- <a href="/bikes/123456/edit">edit</a> --}}
    <a href="{{route('bikes.edit',['bike'=>2222])}}">edit</a><br>
    <a href="{{route('bikes.edit',['bike'=>1])}}">edit1</a><br>
    <br>
    <a href="{{route('student123')}}">student123</a>



    @@foreach ($data as $key => $val){
        
    }
        
    @endforeach
</body>
</html>