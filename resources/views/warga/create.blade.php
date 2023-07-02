<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Create warga</title>
</head>

<style>
    form div{
        margin-bottom: 5px;
    }
</style>

<body>
    <div class="container">
        <h1 class="text-center my-5"> create warga </h1>
        <form action="/warga/store" method="POST">
            @csrf

            <div>
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div>
                <label for="nik" class="form-label">NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" required>
            </div>
            <div>
                <label for="no_kk" class="form-label">No_KK</label>
                <input type="text" name="no_kk" id="no_kk" class="form-control" required>
            </div>
            <div>
            <label for="jenis_kelamin" class="form-label">jenis_kelamin</label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
            </div>
            <label for="alamat" class="form-label">alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>
                <div class="container">
                    <input class="btn btn-info" type="submit" name="submit" value="Save">
                </div>
                <div class="container">
                <a class="btn btn-dark" href="/warga">Back</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
    