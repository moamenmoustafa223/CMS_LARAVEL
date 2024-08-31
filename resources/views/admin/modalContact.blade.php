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
                        <label class="col-sm-2 col-form-label" for="address_ar">Address (AR)</label>
                        <div class="col-sm-10">
                            <input type="text" name="address_ar" value="{{ $a->address_ar }}"
                                class="form-control @error('address_ar') is-invalid @enderror" id="address_ar">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="address_en">Address (EN)</label>
                        <div class="col-sm-10">
                            <input type="text" name="address_en" value="{{ $a->address_en }}"
                                class="form-control @error('address_en') is-invalid @enderror" id="address_en">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="address_link">Address Link</label>
                        <div class="col-sm-10">
                            <input type="url" name="address_link" value="{{ $a->address_link }}"
                                class="form-control @error('address_link') is-invalid @enderror" id="address_link">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="phone">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" value="{{ $a->phone }}"
                                class="form-control @error('phone') is-invalid @enderror" id="phone">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="whatsapp">WhatsApp</label>
                        <div class="col-sm-10">
                            <input type="text" name="whatsapp" value="{{ $a->whatsapp }}"
                                class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp">
                        </div>
                    </div>
                    <div class="row text-center mb-3">
                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" value="{{ $a->email }}"
                                class="form-control @error('email') is-invalid @enderror" id="email">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
