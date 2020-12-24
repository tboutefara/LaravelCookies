<html>
<head>
    <title>Laravel Cookies</title>
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
            border-radius : 10px;
        }

        .btn {
            background-color : #1045b9;
            color : white;
            border : none;
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
            <form action="subscribe">
                <input type="text" name="name" class="input"/><br>
                <input type="submit" value="Subscribe" class="input btn"/>
            </form>
        @endif
    </div>
</body>
</html>