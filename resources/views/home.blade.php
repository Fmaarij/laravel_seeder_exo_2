<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Company name</th>
            <th>Company Adresse</th>
            <th>Company Email</th>
            <th>Contact personne's name</th>
            <th>Contact personne's lastname</th>
        </tr>
        @foreach ($company as $item)
            <tr>
                <td>{{ $item->c_nom }}</td>
                <td>{{ $item->c_adresse }}</td>
                <td>{{ $item->c_tel }}</td>
                <td>{{ $item->c_email }}</td>
                <td>{{ $item->c_p_nom }}</td>
                <td>{{ $item->c_p_pnom }}</td>
                <td>{{ $item->c_p_image }}</td>
                {{-- <td>
                    <img src="assets/img/{{ $item->c_p_image }}" width='50' height='50'
                        class="img img-responsive" />
                </td> --}}
            </tr>
        @endforeach
    </table>
</body>

</html>
