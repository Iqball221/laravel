<html>
<head>
<tittle>data</tittle>
</head>
</html>
<ui>
@foreach($data => $data2)
    id :{{ $data2['id']}}<br>
    title :{{ $data2['title']}}<br>
    content :{{ $data2['content']}}<br>
@endforeach
</ui>
</body>
</head>

