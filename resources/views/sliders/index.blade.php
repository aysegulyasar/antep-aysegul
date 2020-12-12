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
        <th>Adı</th>
        <th>resim</th>
        <th>işlem</th>
    </tr>

    @foreach($sliders as $slider)
        <tr>
            <td>{{$slider->name}}</td>
            <td>{{$slider->photo}}</td>
            <td>
                <form action="{{route('product.export')}}" method="get">
                    <button type="submit" class="btn btn-primary">İndir</button>
                </form>
            </td>
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
