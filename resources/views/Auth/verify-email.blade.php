<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Email</title>
</head>

<body>
    <h1>Please verify your email</h1>
    <p>we sent a verification link to your email address. plase click it to procced</p>



    <form method="post" action="{{ route('verification.send') }}">

        @csrf

        <button type="submit">Resend verification email</button>


    </form>
</body>

</html>
