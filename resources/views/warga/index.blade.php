<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Warga</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4"> Data Warga </h1>
<a class="btn btn-primary" href="/warga/create">add Warga</a>
<table class="text-center table table-striped" border="1">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>NIK</th>
        <th>NO.KK</th>
        <th>JENIS KELAMIN</th>
        <th>ALAMAT</th>
        <th>ACTION</th>
    </tr>
    @foreach($warga as $w)
        <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->nama}}</td>
            <td>{{$w->nik}}</td>
            <td>{{$w->no_kk}}</td>
            <td>{{$w->jenis_kelamin}}</td>
            <td>{{$w->alamat}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                     <div class="container">
                        <a class="btn btn-primary" href="/warga/{{$w->id}}/edit">Edit</a>
                     </div>
                    <div class="container">
                        <from action="/warga/{{$w->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </from>
                    </div>
                </div>
            </td>
        </tr>
         @endforeach
    </table>
</div>
</body>
</html>