@extends('layouts.main')

@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Card</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    
</head>

<body>
    <div class="box">
        <div class="imgBx">
            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/d/df/UAJY_LOGOGRAM.svg/1200px-UAJY_LOGOGRAM.svg.png">
        </div>
        <div class="content">
            <h2>Lembaga 1<br><span>Nama Lembaga 1</span></h2>
        </div>
    </div>

    <a href="https://www.youtube.com/watch?v=HqAMb6kqlLs&list=PLFIM0718LjIWiihbBIq-SWPU6b6x21Q_2">
        <div class="box">
            <div class="imgBx">
            
                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/d/df/UAJY_LOGOGRAM.svg/1200px-UAJY_LOGOGRAM.svg.png">
                
            </div>
            <div class="content">
                <h2>Lembaga 2<br><span>Nama Lembaga 2</span></h2>
            </div>
        </div>
    </a>


    <div class="box">
        <div class="imgBx">
            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/d/df/UAJY_LOGOGRAM.svg/1200px-UAJY_LOGOGRAM.svg.png">
        </div>
        <div class="content">
            <h2>Lembaga 3<br><span>Nama Lembaga 3</span></h2>
        </div>
    </div>

    <div class="box">
        <div class="imgBx">
            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/d/df/UAJY_LOGOGRAM.svg/1200px-UAJY_LOGOGRAM.svg.png">
        </div>
        <div class="content">
            <h2>Lembaga 4<br><span>Nama Lembaga 4</span></h2>
        </div>
    </div>
</body>
</html>
@endsection