@extends('layout.navbar')

@section('content')
    <div class="container">
        <h1 align="center">Data Pelanggan</h1>
        <a href="/customers/create">
            <button class="btn btn-success">Tambahkan Data Pelanggan</button>
        </a>
        <br>
        <table style="background-color: white" class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>No.Hp</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
            <?php
                $nomer=1;
            ?>
            @foreach ($datapelanggan as $isi )
            <tr>
                <td>{{$nomer++}}</td>
                <td>
                    <img src="{{ asset('storage/customer/' . $isi->image) }}" width="90" height="120"/>
                </td>
                <td>{{$isi->name}}</td>
                <td>{{$isi->gender}}</td>
                <td>{{$isi->age}}</td>
                <td>{{$isi->phone}}</td>
                <td>{{$isi->address}}</td>
                <td>
                    <a href="/customers/{{$isi->id}}/edit" class="btn btn-warning" title="edit data : {{$isi->id}}">Edit
                    </a>
                    <form method= "POST" action="customers/{{$isi->id}}">
                    @csrf
                    {{ method_field('DELETE')}}
                        <button class="btn btn-danger" title="hapus data  : {{$isi->id}}">Hapus</button>    
                    </form>

                </td>
            </tr>
            
            @endforeach
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
      crossorigin="anonymous"></script>
    </body>
</html>
@endsection