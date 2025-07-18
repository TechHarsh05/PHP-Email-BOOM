<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/verification.css') }}">
</head>
<body>

    <button onclick="openPopup()">Verify Your Email</button>

    <div class="popup" id="emailPopup" style="display: none;">
        <div class="popup-content">
            <span class="close" onclick="closePopup()">&times;</span>
            <h3>Enter your email</h3>

            <form method="POST" action="{{ route('submit.email') }}">
                @csrf
                <input type="email" name="email" id="emailInput" class="input" placeholder="example@email.com" 
                required autofocus><br>
                <input type="number" name="email_count" id="CountInput" class="input" placeholder="number of email less 100" required>
                <button type="submit" class="submit">Submit</button>
            </form>

        </div>
    </div>

    <script src="{{asset('Js/verification.js')}}"></script>

</body>
</html>
