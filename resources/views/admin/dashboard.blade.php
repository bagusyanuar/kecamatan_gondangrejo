@extends('admin.layout')

@section('css')
@endsection

@section('content')
    @if (\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire("Berhasil!", '{{\Illuminate\Support\Facades\Session::get('success')}}', "success")
        </script>
    @endif
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <p class="font-weight-bold mb-0" style="font-size: 20px">Dashboard</p>
            <ol class="breadcrumb breadcrumb-transparent mb-0">
                <li class="breadcrumb-item active" aria-current="page">Dashboard
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card bg-warning" style="height: 150px;">
                <div class="card-body d-flex align-items-center">
                    <i class="fa fa-bell" style="font-size: 60px;"></i>
                    <div class="ml-4">
                        <p class="font-weight-bold mb-0" style="letter-spacing: .2em;">Aduan Menunggu</p>
                        <p class="font-weight-bold" style="font-size: 32px;">{{ $menunggu }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card bg-success" style="height: 150px;">
                <div class="card-body d-flex align-items-center">
                    <i class="fa fa-check" style="font-size: 60px;"></i>
                    <div class="ml-4">
                        <p class="font-weight-bold mb-0" style="letter-spacing: .2em;">Aduan Di Terima</p>
                        <p class="font-weight-bold" style="font-size: 32px;">{{ $terima }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card bg-danger" style="height: 150px;">
                <div class="card-body d-flex align-items-center">
                    <i class="fa fa-close" style="font-size: 60px;"></i>
                    <div class="ml-4">
                        <p class="font-weight-bold mb-0" style="letter-spacing: .2em;">Aduan Di Tolak</p>
                        <p class="font-weight-bold" style="font-size: 32px;">{{ $tolak }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="mt-2">
        <hr>
        <p class="font-weight-bold">Tabel Aduan Menunggu</p>
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
                        <a href="/admin/pengaduan/{{ $v->id }}" class="btn btn-sm btn-info btn-edit"
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
            $('#table-data').DataTable();
        });
    </script>
@endsection
