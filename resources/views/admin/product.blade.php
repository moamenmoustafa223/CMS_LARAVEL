@extends('admin.layout.app')

@section('content')
    <div class="container mt-3">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Tambah Product</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div id="myalert" class="alert alert-success alert-dismissible" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror" id="basic-default-name">
                            </div>
                            @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Nama Produk</label>
                            <div class="col-sm-10">
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="basic-default-name">
                            </div>
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Deskripsi Produk</label>
                            <div class="col-sm-10">
                                <input type="text" name="description"
                                    class="form-control @error('description') is-invalid @enderror" id="basic-default-name">
                            </div>
                            @error('description')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Harga Produk</label>
                            <div class="col-sm-10">
                                <input type="text" name="price"
                                    class="form-control @error('price') is-invalid @enderror" id="basic-default-name">
                            </div>
                            @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Kategori Produk</label>
                            <div class="col-sm-10">
                                <select class="form-select form-select-lg" name="category_id" id="basic-default-message">
                                    <option selected>Pilih Kategori</option>
                                    @foreach ($category as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('price')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row justify-content-end mt-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="card ">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($product as $a)
                            <tr>
                                <td>
                                    <img width="300px" src="{{ asset('/storage/product/' . $a->image) }}"
                                        class="img-fluid rounded-3" alt="">
                                </td>
                                <td>{{ $a->name }}</td>
                                <td>{{ $a->description }}</td>
                                <td>{{ $a->price }}</td>
                                @foreach ($category as $c)
                                    @if ($c->id === $a->category_id)
                                        <td>{{ $c->name }}</td>
                                    @endif
                                @endforeach
                                <td>
                                    <form action="{{ route('product.destroy', $a->id) }}"
                                        onsubmit="return confirm('Yakin?')" method="post">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#editProduct{{ $a->id }}"><i
                                                class="bx bx-edit-alt me-2"></i></button>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="bx bx-trash me-1"></i></button>
                                    </form>
                                    @include('admin.modalProduct')

                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger alert-dismissible" id="myalert" role="alert">
                                Data Kosong
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
