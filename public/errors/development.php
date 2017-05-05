<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ERROR</title>
    <style>
        .error{
            border: 3px solid red;
            padding: 0 50px;
            font-family: "Courier New", Monospace, sans-serif;
        }
    </style>
</head>
<body>
<div class="error">
    <h1>ERROR</h1>
    <p>Error cod: <b><?=$errno?></b></p>
    <p>Error text: <b><?=$errstr?></b></p>
    <p>Error file: <b><?=$errfile?></b></p>
    <p>Error string: <b><?=$errline?></b></p>
</div>

</body>
</html>