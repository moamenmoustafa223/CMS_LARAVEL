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
            <ul class="justify-content-center animated fadeInUp d-flex list-group-horizontal rounded-3">
                <a data-category="all" style="cursor: pointer" class="category-button list-group-item">All</a>
                @foreach ($category as $c)
                    <a data-category="{{ $c->name }}" style="cursor: pointer"
                        class="category-button list-group-item">{{ $c->name }}</a>
                @endforeach
            </ul>
            <div class="row d-flex justify-content-center">
                @foreach ($product as $p)
                    @foreach ($category as $c)
                        @if ($c->id === $p->category_id)
                            <div class="col-lg-4 col-md-6 animated fadeInUp products {{ $c->name }} rounded-3 service-item" data-wow-delay="0.5s">
                                <div class="store-item position-relative text-center shadow-lg mt-3">
                                    <img class="img-fluid rounded-top" src="/storage/product/{{ $p->image }}" alt="">
                                    <div class="p-4">
                                        <h4 class="mb-3">{{ $p->name }}</h4>
                                        <p>{{$p->description}}</p>
                                        <h4 class="text-primary">Rp. {{ $p->price }}</h4>
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
