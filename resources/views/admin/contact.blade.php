@extends('admin.layout.app')

@section('content')
    <div class="container mt-5">
        @if (Session::has('success'))
        <div id="myalert" class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
        <div class="card mb-5">

            <h3 class="card-header">Contact Information</h3>
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Phone Number</th>
                            <th>WhatsApp</th>
                            <th>Email</th>
                            <th>Address (EN)</th>
                            <th>Address (AR)</th>
                            <th>Address Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($contact as $a)
                            <tr>
                                <td>{{ $a->phone }}</td>
                                <td>{{ $a->whatsapp }}</td>
                                <td>{{ $a->email }}</td>
                                <td>{{ $a->address_en }}</td>
                                <td>{{ $a->address_ar }}</td>
                                <td>{{ $a->address_link }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#editContact{{ $a->id }}"><i
                                            class="bx bx-edit-alt me-2"></i></button>
                                    @include('admin.modalContact')
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No contact information found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <h3 class="card-header">Contact Form Responses</h3>
            <div class="table-responsive text-nowrap">
                @if (count($responses) > 0)
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($responses as $response)
                            <tr>
                                <td>{{ $response->name }}</td>
                                <td>{{ $response->phone }}</td>
                                <td>{{ $response->email }}</td>
                                <td>{{ $response->message }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No responses found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                    
                @else
                    <p>No responses found.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
