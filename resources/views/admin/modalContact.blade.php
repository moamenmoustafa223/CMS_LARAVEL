<div class="modal fade" id="editContact{{ $a->id }}" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('contact.update', $a->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" value="{{ $a->address }}"
                                class="form-control @error('address') is-invalid @enderror" id="basic-default-name">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">WhatsApp</label>
                        <div class="col-sm-10">
                            <input type="text" name="whatsapp" value="{{ $a->whatsapp }}"
                                class="form-control @error('whatsapp') is-invalid @enderror" id="basic-default-name">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{ $a->email }}"
                                class="form-control @error('email') is-invalid @enderror" id="basic-default-name">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
