<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>maxacnhan</title>
    <link rel="stylesheet" href="/frontend/css/maxacnhan.css">
</head>
<body>
    <form action="{{URL::to('/maxacnhan/store')}}" method="POST" class="text-field">
        <input autocomplete="off" type="text" id="maxacnhan" name="maxacnhan" placeholder="Enter your code" />
        <button>Sumit</button>
        @csrf
    </form>

</body>
</html>
