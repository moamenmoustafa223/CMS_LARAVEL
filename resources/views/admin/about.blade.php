@extends('admin.layout.app')

@section('content')
    <div class="container mt-5">
        <div class="card ">
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
                            <th>Title (AR)</th>
                            <th>Title (EN)</th>
                            <th>Image</th>
                            <th>Description 1 (AR)</th>
                            <th>Description 1 (EN)</th>
                            <th>Description 2 (AR)</th>
                            <th>Description 2 (EN)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($about as $a)
                            <tr>
                                <td>
                                    <p>{{ $a->title_ar }}</p>
                                </td>
                                <td>
                                    <p>{{ $a->title_en }}</p>
                                </td>
                                <td>
                                    <img class="img-fluid" width="200px" src="{{ asset('storage/about/' . $a->image) }}" alt="">
                                </td>
                                <td>
                                    <p>{{ \Illuminate\Support\Str::limit($a->description1_ar, 25, '...') }}</p>
                                </td>
                                <td>
                                    <p>{{ \Illuminate\Support\Str::limit($a->description1_en, 25, '...') }}</p>
                                </td>
                                <td>
                                    <p>{{ \Illuminate\Support\Str::limit($a->description2_ar ?? 'N/A', 25, '...') }}</p>
                                </td>
                                <td>
                                    <p>{{ \Illuminate\Support\Str::limit($a->description2_en ?? 'N/A', 25, '...') }}</p>
                                </td>
                                
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#editAbout{{ $a->id }}"><i
                                            class="bx bx-edit-alt me-2"></i>Edit</button>
                                    @include('admin.modalAbout')
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">
                                    <div class="alert alert-danger alert-dismissible" id="myalert" role="alert">
                                        No data found
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
