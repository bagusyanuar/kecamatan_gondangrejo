@extends('admin.layout')

@section('content')
    @if (\Illuminate\Support\Facades\Session::has('failed'))
        <script>
            Swal.fire("Gagal!", '{{\Illuminate\Support\Facades\Session::get('failed')}}', "error")
        </script>
    @endif
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <p class="font-weight-bold mb-0" style="font-size: 20px">Pengaduan</p>
            <ol class="breadcrumb breadcrumb-transparent mb-0">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/pengaduan/menunggu">Pengaduan Menunggu</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Detail
                </li>
            </ol>
        </div>
    </div>
    <section>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <p class="font-weight-bold mb-0">Data Pengaduan</p>
                    </div>
                    <div class="card-body">
                        <table border="0" class="w-100">
                            <tr>
                                <td width="20%">Tanggal</td>
                                <td width="80%">: {{  date('j F Y', strtotime($data->tanggal)) }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Nama</td>
                                <td width="80%">: {{ $data->nama }}</td>
                            </tr>
                            <tr>
                                <td width="20%">No. Hp</td>
                                <td width="80%">: {{ $data->no_hp }}</td>
                            </tr>
                            <tr>
                                <td width="20%">Isi Pengaduan</td>
                                <td width="80%">: {{ $data->pengaduan }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="card">
                    <div class="card-header bg-success"><p class="font-weight-bold mb-0">Tanggapan</p></div>
                    <div class="card-body">
                        <form method="post">
                            @csrf
                            <div class="form-group w-100 mb-1">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="1">Terima</option>
                                    <option value="6">Tolak</option>
                                </select>
                            </div>
                            <div class="form-group w-100 d-block" id="reason">
                                <label for="tanggapan">Tanggapan</label>
                                <textarea class="form-control" rows="3" name="tanggapan" id="tanggapan"></textarea>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success w-100" id="btn-submit">
                                <i class="fa fa-check mr-2"></i>Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('/js/helper.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#status').on('change', function () {
                let val = this.value;
                if (val === '6') {
                    $('#reason').removeClass('d-block')
                    $('#reason').addClass('d-none')
                } else {
                    $('#reason').removeClass('d-none')
                    $('#reason').addClass('d-block')
                }
            })
        });
    </script>
@endsection
