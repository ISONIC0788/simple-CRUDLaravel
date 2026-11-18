<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create post</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="">title</label>
        <input type="text" name="title" value="{{old('title')}}" id="">
        <label for="">Body:</label>
        <textarea name="body" id="" cols="30" rows="10"  >{{old('body')}}</textarea>
        <button type="submit">save</button>
    </form>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{$error}}
        </li>
            
        @endforeach
    </ul>
        
    @endif
    
</body>
</html>