<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Farm Element Types</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div><a href="{{route('farm_element_type.create')}}">Create Element Types</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($farm_element_types as $farm_element_type)
                <tr>
                    <td>{{$farm_element_type->id}}</td>
                    <td>{{$farm_element_type->element_type_name}}</td>
                    <td>
                        <a href="{{route('farm_element_type.edit', ['farm_element_type' => $farm_element_type])}}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('farm_element_type.destroy', ['farm_element_type' => $farm_element_type])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>