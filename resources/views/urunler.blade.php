<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>Ürünler</h2>

<table>
    <tr>
        <th>Alıcı</th>
        <th>Ürün</th>
        <th>Fiyatı</th>
    </tr>

    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->urun}}</td>
            <td>{{$product->price}}</td>

        </tr>
    @endforeach
    <tr>

    </tr>
    <tr>

    </tr>
    <tr>

    </tr>
    <tr>

    </tr>
    <tr>

    </tr>
</table>

</body>
</html>
