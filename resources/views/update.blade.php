
<html>

<head>
    <title>curd</title>
</head>

<body>
    <form action="{{url('updatedata/'.$datas->id)}}}" method="post">
        <input type="text" name="name" value="{{$datas->name}}">
        <br>
        @csrf
        <br>
        <button>Update</button>
    </form>
</body>
</html>