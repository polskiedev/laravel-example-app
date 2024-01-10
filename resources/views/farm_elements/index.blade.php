<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Farm Elements</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div><a href="{{route('farm_element.create')}}">Create Farm Element</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Variant</th>
                <th>Type</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($farm_elements as $farm_element)
                <tr>
                    <td>{{$farm_element->id}}</td>
                    <td>{{$farm_element->element_name }}</td>
                    <td>{{$farm_element->variant}}</td>
                    <td>{{$farm_element->type->element_type_name}}</td>
                    <td>{{$farm_element->description}}</td>
                    <td>
                        <a href="{{route('farm_element.edit', ['farm_element' => $farm_element])}}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('farm_element.destroy', ['farm_element' => $farm_element])}}">
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