<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ $data }}">リンク</a>

    @foreach($media_data as $m_data)
        <img style="width:200px;height:auto;" src="{{ $m_data['media_url'] }}">
    @endforeach

</html>