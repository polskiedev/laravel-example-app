<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a Farm Element</h1>
    <div>
        @if($errors->any()) 
        <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('farm_element.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="element_name" placeholder="Name">
        </div>
        <div>
            <label>Variant</label>
            <input type="text" name="variant" placeholder="Variant">
        </div>
        <div class="form-group">
            <label for="type">Farm Element Type:</label>
            <select name="type_id" id="type_id" class="form-control">
                @foreach($farm_element_types as $type)
                    <option value="{{ $type->id }}">{{ $type->element_type_name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description">
        </div>
        <div>
            <input type="submit" value="Save a Farm Element">
        </div>
    </form>
</body>
</html>