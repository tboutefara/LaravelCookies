<html>
<head>
    <title>Laravel Cookies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <style>
        
        .content {
            width : 600px;
            margin-left: auto;
            margin-right : auto;
        }

        .input {
            width : 300px;
            height : 30px;
            margin : 5px;
        }

    </style>
</head>
<body>
    <div class="content">
        @if(isset($_COOKIE['name']))
            <h1>Hello {{ $_COOKIE['name'] }}</h1>
            <p><a href="/unsubscribe">Unsubscribe</a></p>
        @else
            <h1>I do not know you</h1>
            <p>Enter your name to subscribe :</p>
            <form action="subscribe" class="form-group">
                <input type="text" name="name" class="form-control input"/><br>
                <input type="submit" value="Subscribe" class="btn btn-primary input"/>
            </form>
        @endif
    </div>
</body>
</html>