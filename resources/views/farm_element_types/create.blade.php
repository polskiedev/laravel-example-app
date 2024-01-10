<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Farm Element Type</h1>
    <div>
        @if($errors->any()) 
        <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('farm_element_type.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="element_type_name" placeholder="Name">
        </div>
        <div>
            <input type="submit" value="Save a Farm Element Type">
        </div>
    </form>
</body>
</html>