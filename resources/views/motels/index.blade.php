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
                background-color: #f9fafb;
                color: #333;
                margin: 0;
                padding: 0;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px 0;
            }
            th, td {
                padding: 10px;
                text-align: left;
                border: 1px solid #ddd;
            }
            th {
                background-color: #f4f4f4;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
            button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 15px;
                cursor: pointer;
                border-radius: 5px;
            }
            button:hover {
                background-color: #45a049;
            }
            input[type="text"] {
                padding: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="">
        
            <table border="1px" class="w-full max-w-7xl mx-auto mt-16 bg-white dark:bg-gray-800 shadow-2xl rounded-lg">
                <thead class="bg-gray-50 dark:bg-gray-800">
                    <tr>
                        <th colspan="8">Danh sách phòng trọ</th>
                    </tr>
                <thead>
                    <tr>
                    <button onclick="window.location='/motels/create'" >
                                Tao moi
                    </button>
                    </tr>
                    <tr>
                        <th>STT</th>
                        <th>Ma phong tro</th>
                        <th>Ten nguoi thue</th>
                        <th>So dien thoai</th>
                        <th>Ngay bat dau thue</th>
                        <th>Hinh thuc thanh toan</th>
                        <th>Ghi chu</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <form action="" method="get">
                            <input type="text" placeholder="search" name="search" />
                        </form>
                        

                    </td>
                    </tr>
                    @foreach($motels as $motel)
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                            <td>1</td>
                            <td>PT-{{ $motel->id }}</td>
                            <td>{{ $motel->nameOfPerson }}</td>
                            <td>{{ $motel->phoneNumber }}</td>
                            <td>{{ $motel->rentDate }}</td>
                            <td>{{ "cua lam kip" }}</td>
                            <td>{{ $motel->remark }}</td>
                            <td><input type="checkbox"></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <button onclick="window.location='/motels/create'" >
                                Xoa
                </button>
                </tfoot>
            </table>
        </div>
    </body>
</html>
