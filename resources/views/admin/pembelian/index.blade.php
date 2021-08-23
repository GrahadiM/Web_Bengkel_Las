@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Pembelian Jasa Pesanan') }}</div>

                    <div class="card-body">
                        <h3 class="text-secondary mb-3"><u>Tabel Pesanan</u></h3>
                        <div class="table-responsive">
                            <table class="table table-light table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama User</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Produk</th>
                                        <th>Gambar</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>Kode Post</th>
                                        <th>Nomer Handphone</th>
                                        <th>Chat via WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $key)
                                        <tr>
                                            <th>{{ $loop->iteration + $orders->firstItem() - 1 . '.' }}</th>
                                            <td>{{ $key->user->name }}</td>
                                            <td>{{ $key->full_name }}</td>
                                            <td>{{ $key->modeling->name }}</td>
                                            <td>
                                                <img src="{{ asset('product_images/' . $key->modeling->product->img) }}" style="width: 100px; height: 100px; object-fit: cover;" alt="productImg">
                                            </td>
                                            <td>{{ $key->address }}</td>
                                            <td>{{ $key->city }}</td>
                                            <td>{{ $key->district }}</td>
                                            <td>{{ $key->province }}</td>
                                            <td>{{ $key->postal_code }}</td>
                                            <td>{{ $key->phone }}</td>
                                            <td>
                                                <a href="https://wa.me/{{ $key->phone }}" target="_blank" rel="noopener noreferrer" class="btn btn-warning">Chat</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="12" class="text-danger text-center">Data Kosong!</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">{{ __('Daftar Pembelian Jasa Perbaikan') }}</div>

                    <div class="card-body">
                        <h3 class="text-secondary mb-3"><u>Tabel Perbaikan</u></h3>
                        <div class="table-responsive">
                            <table class="table table-light table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama User</th>
                                        <th>Nama Pembeli</th>
                                        <th>Jenis Perbaikan</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>Kode Post</th>
                                        <th>Nomer Handphone</th>
                                        <th>Chat via WhatsApp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($repairs as $key)
                                        <tr>
                                            <th>{{ $loop->iteration + $orders->firstItem() - 1 . '.' }}</th>
                                            <td>{{ $key->user->name }}</td>
                                            <td>{{ $key->full_name }}</td>
                                            <td>{{ $key->jenis }}</td>
                                            <td>{{ $key->address }}</td>
                                            <td>{{ $key->city }}</td>
                                            <td>{{ $key->district }}</td>
                                            <td>{{ $key->province }}</td>
                                            <td>{{ $key->postal_code }}</td>
                                            <td>{{ $key->phone }}</td>
                                            <td>
                                                <a href="https://wa.me/{{ $key->phone }}" target="_blank" rel="noopener noreferrer" class="btn btn-warning">Chat</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="12" class="text-danger text-center">Data Kosong!</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
