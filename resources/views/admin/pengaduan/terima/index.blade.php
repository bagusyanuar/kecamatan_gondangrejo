@extends('admin.layout')

@section('content')
    @if (\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire("Berhasil!", '{{\Illuminate\Support\Facades\Session::get('success')}}', "success")
        </script>
    @endif
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <p class="font-weight-bold mb-0" style="font-size: 20px">Pengaduan</p>
            <ol class="breadcrumb breadcrumb-transparent mb-0">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Pengaduan Di Terima
                </li>
            </ol>
        </div>
    </div>
    <section>
        <hr>
        <p class="font-weight-bold">Tabel Pengaduan Di Terima</p>
        <table id="table-data" class="display w-100 table table-bordered">
            <thead>
            <tr>
                <th width="5%" class="text-center">#</th>
                <th width="10%">Tanggal</th>
                <th>Nama</th>
                <th>No. Hp</th>
                <th>Aduan</th>
                <th>Tanggapan</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $v)
                <tr>
                    <td width="5%" class="text-center">{{ $loop->index + 1 }}</td>
                    <td>{{ $v->tanggal }}</td>
                    <td>{{ $v->nama }}</td>
                    <td>{{ $v->no_hp }}</td>
                    <td>{{ $v->pengaduan }}</td>
                    <td>{{ $v->tanggapan }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <hr>
    </section>
@endsection

@section('js')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table-data').DataTable();
        });
    </script>
@endsection
