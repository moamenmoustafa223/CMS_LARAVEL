@extends('landingpage.layout.app')

@section('lp')
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(136, 180, 78, .7), rgba(136, 180, 78, .7)), url({{ asset('teahouse/img/carousel-1.jpg') }}) center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Products</h1>
        </div>
    </div>

    <div class="content">
        <div class="container p-3">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.5s">
                <h1 class="text-center animated slideInDown"><i>Products</i></h1>
            </div>
            <div class="justify-content-center d-flex text-center wow fadeInDown "data-wow-delay="0.5s">
                <div class="row">
                    <style>
                        .category-button:hover {
                            background-color: #88B44E;
                            color: white;
                        }
                    </style>
                    <p data-category="all" style="cursor: pointer"
                        class="col p-3 nav-item category-button service-item bordered rounded-3">All</p>
                    @foreach ($category as $c)
                        <p data-category="{{ $c->name }}" style="cursor: pointer"
                            class="col p-3 nav-item category-button service-item bordered rounded-3">{{ $c->name }}</p>
                    @endforeach
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                @foreach ($product as $p)
                    @foreach ($category as $c)
                        @if ($c->id === $p->category_id)
                            <div class="col-c-50 col-sm-6 col-md-4 col-lg-3 wow fadeIn products {{ $c->name }} rounded-3 service-item"
                                data-wow-delay="0.5s">
                                <div class="store-item rounded-3 position-relative text-center shadow-lg mt-3">
                                    <a href="{{ asset('/storage/product/' . $p->image) }}" data-lightbox="lightbox"
                                        data-title="{{ $p->name }}">
                                        <img src="{{ asset('/storage/product/' . $p->image) }}" alt="random img"
                                            class="img-fluid rounded-top">
                                    </a>
                                    <div class="p-4">
                                        <h4 class="mb-3">{{ $p->name }}</h4>
                                        <p>{{ $p->description }}</p>
                                        <h4 class="text-primary">Rp {{ number_format($p->price, 0, ',', '.') }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const categoryButtons = document.querySelectorAll(".category-button");
            const products = document.querySelectorAll(".products");

            // Tampilkan semua produk saat halaman dimuat
            showProducts("all");

            // Tambahkan event listener pada setiap tombol kategori
            categoryButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const selectedCategory = button.getAttribute("data-category");
                    showProducts(selectedCategory);
                });
            });

            // Fungsi untuk menampilkan produk berdasarkan kategori
            function showProducts(category) {
                products.forEach(product => {
                    if (category === "all" || product.classList.contains(category)) {
                        product.style.display = "block";
                    } else {
                        product.style.display = "none";
                    }
                });
            }
        });
    </script>
@endsection
