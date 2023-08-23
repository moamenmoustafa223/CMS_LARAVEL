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
                            <th>Address</th>
                            <th>WhatsApp</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($contact as $a)
                            <tr>
                                <td>
                                    <p class="">{{ $a->address }}</p>
                                </td>
                                <td>
                                    <p class="">{{ $a->whatsapp }}</p>
                                </td>
                                <td>
                                    <p class="">{{ $a->email }}</p>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#editContact{{ $a->id }}"><i
                                            class="bx bx-edit-alt me-2"></i></button>
                                    @include('admin.modalContact')
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
