<!DOCTYPE html>
<html lang="en">
@extends('layout.navbar')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color:Turquoise">
    <div class="container">
        <table class="table table-bordered">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div  class="modal-header bg-primary" >
                        <h2 align="center">Masukan Data Mobil</h2>
                    </div>
                    <div  class="modal-body ">
                        <form method="POST" action="/cars" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                Foto :
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                Kode :
                                <input type="text" name="code" class="form-control">
                            </div>
                            <div class="form-group">
                                Merek :
                                <input type="text" name="brand" class="form-control">
                            </div>
                            <div class="form-group">
                                Warna :
                                <input type="text" name="color" class="form-control">
                            </div>
                            <div class="form-group">
                                Tipe :
                                <input type="text" name="type" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-info">Simpan</button>
                            <div class="modal-footer">
                                <button class="btn btn-warning" type="reset">
                                    <a href="/cars">
                                        Kembali
                                    </a>
                                </button>
                            </div>
                        </form>
                    </div>

            </div>
        </table>
    </div>
</body>
@endsection
</html>
