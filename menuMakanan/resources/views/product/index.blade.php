<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fefcfb;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #6b705c;
            margin-bottom: 30px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            border-radius: 12px;
            overflow: hidden;
        }

        thead {
            background-color: #d8e2dc;
        }

        th, td {
            padding: 14px 20px;
            text-align: left;
        }

        th {
            color: #4a4e69;
            font-weight: bold;
        }

        tbody tr:nth-child(even) {
            background-color: #f0efeb;
        }

        tbody tr:hover {
            background-color: #e6ccb2;
            transition: 0.3s;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nama</th>
                <th>kategori</th>
                <th>stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $makanan)
            <tr>
                <td>{{ $makanan->id }}</td>
                <td>{{ $makanan->nama }}</td>
                <td>{{ $makanan->kategori }}</td>
                <td>{{ $makanan->stok }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
