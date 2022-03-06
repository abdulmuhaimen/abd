

@extends('layouts.app')

@section('content')
<table border="1" >
    <tr>
        <th>
            id
      </th>
        <th>
                 name
        </th>
        <th>
           price

        </th>
        <th>
            edit

        </th>
        <th>
               Delete
        </th>

    </tr>
@foreach ($p as $product)
<tr>
    <td>
        {{$product->id}}
</td>
    <td>
          {{$product->name}}
    </td>
    <td>
       {{$product->price}}

    </td>
    <td>
        <a href="edit/{{$product->id}}">Edit</a>

    </td>
    <td>
            <a href="add/{{$product->id}}">Delete</a>
    </td>

</tr>
@endforeach

</table>

<a href="add">add</a>

@endsection
