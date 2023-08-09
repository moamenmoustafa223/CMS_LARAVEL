@extends('admin.layout.app')

@section('content')
    <div class="container mt-3">
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Tambah Carousel</h5>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div id="myalert" class="alert alert-success alert-dismissible" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('carousel.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="col-sm-2 col-form-label" for="basic-default-message">Judul Carousel</label>
                            <div class="col-sm-10">
                                <textarea name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Isi Judul Dari Carousel"
                                    aria-label="Isi Judul Dari Carousel" aria-describedby="basic-icon-default-message2"></textarea>
                            </div>
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row justify-content-end">
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
                            <th>Image</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($carousel as $a)
                            <tr>
                                <td>
                                    <img width="300px" src="{{ asset('/storage/carousel/' . $a->image) }}"
                                        class="img-fluid rounded-3" alt="">
                                </td>
                                <td>{!! $a->title !!}</td>
                                <td>
                                    <form action="{{ route('carousel.destroy', $a->id) }}"
                                        onsubmit="return confirm('Yakin?')" method="post">
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#edit{{ $a->id }}"><i
                                                class="bx bx-edit-alt me-2"></i></button>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="bx bx-trash me-1"></i></button>
                                    </form>
                                </td>
                                @include('admin.modaledit')
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
