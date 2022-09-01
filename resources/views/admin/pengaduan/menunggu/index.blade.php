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
                <li class="breadcrumb-item active" aria-current="page">Pengaduan Menunggu
                </li>
            </ol>
        </div>
    </div>
    <section>
        <hr>
        <div class="d-flex justify-content-between align-items-center p-1 mb-3">
            <p class="font-weight-bold">Tabel Pengaduan Menunggu</p>
            <a href="/admin/pengaduan/menunggu/make/export" class="btn btn-success"><i class="fa fa-download mr-2"></i>Excel</a>
        </div>

        <table id="table-data" class="display w-100 table table-bordered">
            <thead>
            <tr>
                <th width="5%" class="text-center">#</th>
                <th width="10%">Tanggal</th>
                <th>Nama</th>
                <th>No. Hp</th>
                <th>Aduan</th>
                <th width="10%" class="text-center">Action</th>
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
                    <td class="text-center">
                        <a href="/admin/pengaduan/menunggu/{{ $v->id }}" class="btn btn-sm btn-info btn-edit"
                           data-id="{{ $v->id }}"><i class="fa fa-info"></i></a>
                    </td>
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
            $('#table-data').DataTable({
                "scrollX": true
            });
        });
    </script>
@endsection
