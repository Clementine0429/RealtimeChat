
<html>
<head>
<title>Demo chat</title>
</head>
<body>

    <div>
        @foreach($messages as $message)
        <p><strong>{{$message->author}}</strong>:{{$message->content}}</p>
        @endforeach
    </div>
    <div>
        <form action="send-message" method="POST">
        {{csrf_field()}}
        Name: <input type="text" name="author">
        <br>
        <br>
        Content: <textarea name="content" rows="5" style="width:100%"></textarea>
        <button type="submit" name="send">Send</button>
        </form>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.0.1/socket.io.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script>
        var socket = io('http://demorealtimechat.test:80')
        socket.on('chat:message', function(data){
            console.log(data)
        })
        </script>
        

    </div>
</body>
</html>