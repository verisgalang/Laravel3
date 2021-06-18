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
<body>
    <div class="container">
        <table class="table table-bordered">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h2>Ganti Data Pelanggan</h2>
                    </div>
                    <div class="modal-body">
                        
                        <form method="POST" action="/customers/{{$datapelanggan->id}}">
                            @csrf

                            {{ method_field('PUT')}}
                            <div class="form-group">
                                Foto :
                                <input type="file" name="image" class="form-control" value="{{$datapelanggan->image}}">
                            </div>
                            <div class="form-group">
                                Nama :
                                <input type="text" name="name" class="form-control" value="{{$datapelanggan->name}}">
                            </div>
                            <div class="form-group">
                                Jenis Kelamin :
                                <select  class="form-control" name="gender" value="{{$datapelanggan->gender}}">
                                    <option value="{{$datapelanggan->gender}}">{{$datapelanggan->gender}}</option>
                                    <option value="L" >L</option>
                                    <option value="P" >P</option>
                                </select>
                            </div>
                            <div class="form-group">
                                Umur :
                                <input type="text" name="age" class="form-control" value="{{$datapelanggan->age}}">
                            </div>
                            <div class="form-group">
                                No.Hp :
                                <input type="text" name="phone" class="form-control" value="{{$datapelanggan->phone}}">
                            </div>
                            <div class="form-group">
                                Alamat :
                                <input type="text" name="address" class="form-control" value="{{$datapelanggan->address}}">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-info">Simpan</button>
                            <div class="modal-footer">
                                    <a href="/customers">
                                        <button class="btn btn-warning">Batal</button>
                                    </a>
                        </div>
                        </form>
                    </div>

            </div>
        </table>
    </div>
</body>
@endsection
</html>
