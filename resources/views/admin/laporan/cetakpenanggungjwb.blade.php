<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<style>
    table {
        width: 100%;
        /* border: 2px solid #000; */
        /* border: 1px inset #000; */
    }

    h1,
    h3 {
        text-align: center;
    }
    footer{
        position: fixed;
        /* display: flex; */
        /* flex-direction: column; */
        /* align-content: center; */
        /* align-items: center; */
        /* gap: 6rem; */
        /* justify-content: center; */
        bottom: 0;
        right: 0;
        margin-right: 20px;
    }
</style>

<body>
    
    {{-- <img src="{{ public_path('assets/user.jpg') }}" style="width: 500px; height: 50px" alt="" srcset=""> --}}
    <img src="{{ public_path('assets/kopsurat.png') }}" style="width: 100%; height: 70px" alt="" srcset="">
    <hr>
    <h1>{{ $title }}</h1>
    <table border="1">
        <thead style="position: sticky; top:0;">
            <tr>
                <th scope="col">Pengguna</th>
                <th scope="col">Infrastruktur</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td>ucup</td>
                <td>laptop</td>
            </tr>
            <tr>
                <td>ucup</td>
                <td>laptop</td>
            </tr>
            <tr>
                <td>ucup</td>
                <td>laptop</td>
            </tr>
            <tr>
                <td>ucup</td>
                <td>laptop</td>
            </tr>
        </tbody>
    </table>
    <footer>
        <p style="margin-bottom: 6rem;">Jakarta, {{ date('l d-m-Y') }}</p>
        <p>(.........................................)</p>
    </footer>
</body>

</html>
