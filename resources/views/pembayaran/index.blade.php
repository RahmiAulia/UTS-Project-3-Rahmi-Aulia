@extends('layouts.main')
@section('title', 'Pembayaran')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Pembayaran</h3>

                        @if (session()->has('pesan'))
                            <div class="alert alert-success mt-3" role="alert">
                                {{ session('pesan') }}
                            </div>
                        @endif
                        <div class="row table-responsive">

                            <table class="table my-4">
                                <tr>
                                    <th>No</th>
                                    <th>Pengguna </th>
                                    <th>Jenis Pembayaran</th>
                                    <th>Total Transaksi</th>
                                    <th>Biaya Pengiriman</th>
                                    <th>Total Pembayaran</th>
                                    <th>Kategori Pembayaran</th>
                                    <th>Tanggal Pembayaran</th>

                                </tr>
                                @foreach ($pembayarans as $bayar)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bayar->shipping->transaksi->pengguna->nama}}</td>
                                        <td>{{ $bayar->shipping->transaksi->total_harga}}</td>
                                        <td>{{ $bayar->shipping->biaya}}</td>
                                        <td>{{ $bayar->total_pembayaran }}</td>
                                        <td>{{ $bayar->kategoriPembayaran->jenis_pembayaran }}</td>
                                        <td>{{ $bayar->tanggal_pembayaran }}</td>

                                        {{-- <td>

                                            <form action="pembayaran/{{ $pembayaran->id_pembayaran }}" method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure want to delete this data?')">
                                                    <span data-feather="trash-2"></span>Delete</button>
                                            </form>
                                        </td> --}}

                                    </tr>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- {{ $ulasans->links() }} --}}
@endsection
