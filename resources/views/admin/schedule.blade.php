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
                            <th>Hari</th>
                            <th>Buka</th>
                            <th>Tutup</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($schedule as $a)
                            <tr>
                                <td>
                                    <p class="">{{ $a->day }}</p>
                                </td>
                                <td>
                                    <p class="">{{ substr($a->open, 0, -3) }}</p>
                                </td>
                                <td>
                                    <p class="">{{ substr($a->close, 0, -3) }}</p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#editSchedule{{ $a->id }}"><i
                                            class="bx bx-edit-alt me-2"></i></button>
                                    @include('admin.modalSchedule')
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
