<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
</head>
<body>
    <button onclick="back()">Back</button>
    <h2>Thanks for Using This Application!</h2>
    <p>You submitted: <strong>{{ $email }}</strong></p>

    <script>
        function back(){
            window.location.href = "/";
        }
    </script>
</body>
</html>
