@extends('layouts.app')

@section('content')

<style>
    .card img{
      width: 200px;  
    }
</style>
    <div class="hero-section">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-8 text-start">
                <h1 class="display-4 mb-4">Mudah membuat Web<br>Bagi Pemula</h1>
                <div class="d-flex justify-content-start gap-3">
                    <a href="#" class="btn btn-primary">Pinjam sekarang</a>
                    <a href="{{ asset('pdf/belajar_web.pdf') }}" class="btn btn-outline-light mx-2" download>Download PDF</a>
                </div>
            </div>
        </div>
       <br> <p>Karya : Moh Muthohir, S.Kom., M.Kom</p>
    </div>
</div>


<div class="container">
    <div class="book-image-container">
        <img src="{{ asset('image/book-cover.jpg') }}" alt="Book Cover" class="book-image" style="margin-left: 500px; margin-top: -70px;">
    </div>
    
    <div class="row mb-5" style="margin-top: -250px;" id="Persiapanawal">
        <div class="col-7">
            <h2>Mudah membuat web bagi Pemula</h2>
            <p class="">
                Buku "Mudah Membuat Web Bagi Pemula" ditujukan untuk memudahkan pemahaman pemrograman web, terutama bagi mahasiswa atau pemula yang tertarik dalam dunia pengembangan web. Buku ini mencakup berbagai bahasa pemrograman yang esensial seperti HTML, HTML5, CSS, dan JavaScript. Berkat struktur yang teratur dan contoh-contoh praktis, pembaca dapat mengikuti instruksi langkah demi langkah untuk membuat halaman web secara mandiri.
            </p>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-10">
            <h2>Persiapan Awal:</h2>
            <p>
Untuk mempelajari HTML dan CSS, diperlukan aplikasi seperti Web Browser (Google Chrome, Firefox) dan Text Editor (Notepad++, Sublime). Browser digunakan untuk menampilkan halaman web, sedangkan text editor digunakan untuk menulis kode HTML dan CSS.            </p>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-10">
            <h2>Dasar HTML:</h2>
            <p>
                HTML (Hypertext Markup Language) adalah bahasa dasar untuk membuat halaman web. Buku ini menjelaskan struktur dasar dokumen HTML, penggunaan berbagai tag seperti 
                html,head,title, dan body, serta atribut umum pada tag HTML. Ada juga pembahasan tentang perbedaan antara HTML dan HTML5, dimana HTML5 memiliki fitur tambahan seperti dukungan penuh untuk video, audio, elemen grafis, dan penyimpanan lokal tanpa perlu plugin tambahan seperti Flash.
            </p>
       </div>
    </div>

    <div class="row mt-5" id="bukulainnya">
        <div class="col-12">
            <h2>Buku lainnya</h2>
        </div>
    </div>
    
   <div class="row mt-4">
    @foreach(range(1, 4) as $index)
        <div class="col-md-3 mb-4">
            <a href="{{ route('book' . $index) }}" class="text-decoration-none">
                <div class="card book-card" style="width: 300px;">
                    <img src="{{ asset('image/perempuan.jpg') }}" class="card ms-5 mt-2" alt="Book {{ $index }}">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            @switch($index)
                                @case(1)
                                    HTML Dasar
                                    @break
                                @case(2)
                                    CSS Fundamental
                                    @break
                                @case(3)
                                    JavaScript Basic
                                    @break
                                @case(4)
                                    PHP & MySQL
                                    @break
                            @endswitch
                        </h5>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
</div>

@endsection
   