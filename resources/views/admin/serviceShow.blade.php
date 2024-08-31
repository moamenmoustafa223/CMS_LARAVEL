@extends('admin.layout.app')

@section('content')
<div class="container mt-5">
    <!-- Action Buttons -->
    <div class="row mb-4">
        <div class="col-md-12 d-flex justify-content-end">
            <!-- Edit Button -->
            <button type="button" class="btn btn-success me-2" data-bs-toggle="modal"
                    data-bs-target="#editService{{ $service->id }}">
                <i class="bx bx-edit-alt me-1"></i> Edit
            </button>
            
            <!-- Delete Form -->
            <form action="{{ route('service.destroy', $service->id) }}" method="post" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="bx bx-trash me-1"></i> Delete
                </button>
            </form>
        </div>
    </div>

    <!-- Service Details -->
    <div class="row">
        <div class="col-md-12 mb-4">
            <h2>{{ $service->name_en }} / {{ $service->name_ar }}</h2>
            <p><strong>Status:</strong> {{ $service->status}}</p>
            <div class="col-md-6 ">
                <!-- Service Image -->
                <img src="{{ asset('storage/service/' . $service->image) }}" alt="{{ $service->name_en }}" class="img-fluid rounded-4">
            </div>
        </div>
        
        <div class="col-md-6">
            <h4>Description (English)</h4>
            <p>{{ $service->description_en }}</p>
        </div>
        <div class="col-md-6">
            <h4>Description (Arabic)</h4>
            <p>{{ $service->description_ar }}</p>
        </div>

        <div class="col-md-6">
            <h5>Meta Tags (English)</h5>
            <p>{{ $service->meta_tags_en }}</p>
        </div>
        <div class="col-md-6">
            <h5>Meta Tags (Arabic)</h5>
            <p>{{ $service->meta_tags_ar }}</p>
        </div>

        <div class="col-md-6">
            <h5>Meta Description (English)</h5>
            <p>{{ $service->meta_description_en }}</p>
        </div>
        <div class="col-md-6">
            <h5>Meta Description (Arabic)</h5>
            <p>{{ $service->meta_description_ar }}</p>
        </div>

        <div class="col-md-12">
            <h5>Slug</h5>
            <p>{{ $service->slug }}</p>
        </div>
        
        <!-- Display Uploaded Images -->
        <div class="col-md-12 mt-4">
            <h4>Uploaded Images</h4>
            <div class="row">
                @foreach($images as $image)
                    <div class="col-md-3 mb-3">
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="Image" class="img-fluid rounded-4">
                        <p>{{ $image->name_en }} / {{ $image->name_ar }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Include Edit Modal -->
    @include('admin.modalService', ['service' => $service])
</div>
@endsection
