@extends('admin.layout.app')

@section('content')
    <div class="container mt-3">
        <div class="card">
            @if (Session::has('success'))
                <div id="myalert" class="alert alert-success alert-dismissible" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Brief (AR)</th>
                            <th>Brief (EN)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($logo as $a)
                            <tr>
                                <td>
                                    <img width="200px" src="{{ asset('storage/logo/' . $a->image) }}"
                                        class="img-fluid rounded-3" alt="">
                                </td>
                                <p></p>

                                <td>{{ \Illuminate\Support\Str::limit($a->brief_ar, 25, '...') }}</td>
                                <td>{{ \Illuminate\Support\Str::limit($a->brief_en, 25, '...') }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#editLogo{{ $a->id }}">
                                        <i class="bx bx-edit-alt me-2"></i>
                                    </button>
                                </td>
                                @include('admin.modaledit')
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <strong>No data found!</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
