<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f8fafc;
                color: #333;
                margin: 0;
                padding: 20px;
            }
            form {
                background: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                max-width: 400px;
                margin: 0 auto;
            }
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: 600;
            }
            input, select, button {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            button {
                background-color: #4CAF50;
                color: white;
                border: none;
                cursor: pointer;
            }
            button:hover {
                background-color: #45a049;
            }
            .error-messages {
                color: red;
                margin-bottom: 20px;
            }
        </style>
    </head>
    <body class="antialiased">
    @if ($errors->any())
    <div class="error-messages">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="">
            <form method="POST" action="/motels/store">

                @csrf
                    <label for="nameOfPerson">Ten nguoi cho thue</label>
                    <input type="text" name="nameOfPerson" id="nameOfPerson">
                    <label for="phoneNumber">So dien thoai</label>
                    <input type="text" name="phoneNumber" id="phoneNumber">
                    <label for="rentDate">Ngay cho thue</label>
                    <input type="date" name="rentDate" id="rentDate">
                    <label for="type">Hinh thuc thanh toan</label>
                    <select name="type" id="type">
                        <option value="Theo thang">Theo thang</option>
                        <option value="Theo quy">Theo quy</option>
                        <option value="Theo nam">Theo nam</option>
                    </select>
                    <label for="remark">Ghichu</label>
                    <input type="text" name="remark" id="remark">
                    <button type="submit">ok</button>
                </form>
        </div>
    </body>
</html>
