@extends('layout.navbar')

@section('content')
    <div class="container">
        <h1 align="center">Data Mobil</h1>
        <a href="/cars/create">
            <button class="btn btn-success">Tambahkan Mobil Baru</button>
        </a>
        <br>
        <table style="background-color: white" class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Kode</th>
                <th>Merek</th>
                <th>Warna</th>
                <th>Tipe</th>
                <th>Action</th>
            </tr>
            <?php
                $nomer=1;
            ?>
            @foreach ($datamobil as $isi )
            <tr>
                <td>{{$nomer++}}</td>
                <td>
                    <img src="{{ asset('storage/car/' . $isi->image) }}" width="100" height="90"/>
                </td>
                <td>{{$isi->code}}</td>
                <td>{{$isi->brand}}</td>
                <td>{{$isi->color}}</td>
                <td>{{$isi->type}}</td>
                <td>
                    <a href="/cars/{{$isi->id}}/edit" class="btn btn-warning" title="edit data : {{$isi->id}}">Edit
                    </a>
                    <form method= "POST" action="cars/{{$isi->id}}">
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