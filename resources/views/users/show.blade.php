<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show All Message</title>
    <style>

        body{
            font-family: calibri;
        }

        .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 80%;
        padding: 10px 10px 10px 10px;
        }

        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
        padding: 2px 16px;
        }

        
    </style>
</head>
<body>
    <h1 align="center">All Messages</h1>
    <br />
    
    @foreach($myusers as $item)
    <div align="center">
        <div class="card">
            <p>{{ $item->message}}</p>
            <div class="container" >
                <h4><b>{{ $item->fname }} {{ $item->lname }}</b></h4> 
                <p>{{ $item->email }} | {{ $item->phone}}</p> 
        </div>
    </div>
    <br />
    @endforeach
    <br />
    <br />
    <a href="{{URL::to('/create')}}">
    <input type="button" value="New Message" class="button button2">
    </a>

</div>
</body>
</html>