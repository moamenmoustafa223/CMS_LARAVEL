@extends('admin.layout.app')
@section('content')
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
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <form action="{{ route('admin.deleteAbout', $a->id) }}"
                                                onsubmit="return confirm('Yakin?')" method="post">
                                                <a class="dropdown-item" href="{{ route('admin.editAbout', $a->id) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"><i
                                                        class="bx bx-trash me-1"></i> Delete</button>
                                            </form>
                                        </div>
                                    </div>
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
