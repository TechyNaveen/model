@php 

use App\Models\CurdModel;

@endphp

<html>

<head>
    <title>curd</title>
</head>

<body>
    <form action="insert" method="post">
        <input type="text" name="name">
        <br>
        @csrf
        <br>
        <button>Submit</button>
    </form>
</body>

@php 

$allData = CurdModel::all();

@endphp

<table>
@foreach($allData as $data)
    <!-- Display your data here -->
    <tr>

<td>
{{ $data->name }}
</td>
<td>
<a href="{{url('edit/'.$data->id)}}"> Edit </a>
</td>
<td>
<a href="{{url('delete/'.$data->id)}}"> Delete </a>

</td>
    </tr> 
   
@endforeach
</table>
</html>