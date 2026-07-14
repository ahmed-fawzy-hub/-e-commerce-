<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Verification</title>
    <style>
        .btn-verify {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3b82f6;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h2>Hello {{$user->name}}</h2>

    <a href="{{$url}}" class="btn-verify">Verify Email address</a>

</body>

</html>
