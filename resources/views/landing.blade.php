@extends('layouts.app')

@section('content')
    <style>
        .card img {
            width: 200px;
        }
    </style>
    <div class="hero-section">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-8 text-start">
                    <h1 class="display-4 mb-4">Internet Dan Lan</h1>
                    <div class="d-flex justify-content-start gap-3">
                        <a href="#" class="btn btn-primary">Pinjam sekarang</a>
                        <a href="{{ asset('pdf/internet.pdf') }}" class="btn btn-outline-light mx-2" download>Download
                            PDF</a>
                    </div>
                </div>
            </div>
            <br>
            <p>Karya : ARIFIN SETIABUDI, S.Kom., M.M.</p>
        </div>
    </div>


    <div class="container">
        <div class="book-image-container">
            <img src="{{ asset('image/lan.jpg') }}" alt="Book Cover" class="book-image"
                style="margin-left: 500px; margin-top: -70px;">
        </div>

        <div class="row mb-5" style="margin-top: -250px;" id="Persiapanawal">
            <div class="col-7">
                <h2>Internet Dan Lan</h2>
                <p class="">
                    Buku "Mudah Membuat Web Bagi Pemula" ditujukan untuk memudahkan pemahaman pemrograman web, terutama bagi
                    mahasiswa atau pemula yang tertarik dalam dunia pengembangan web. Buku ini mencakup berbagai bahasa
                    pemrograman yang esensial seperti HTML, HTML5, CSS, dan JavaScript. Berkat struktur yang teratur dan
                    contoh-contoh praktis, pembaca dapat mengikuti instruksi langkah demi langkah untuk membuat halaman web
                    secara mandiri.
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-10">
                <h2>Persiapan Awal:</h2>
                <p>
                    Buku ini dimulai dengan pengenalan alat-alat utama yang diperlukan untuk membangun website, seperti web
                    browser (misalnya, Google Chrome, Firefox, dan Safari) dan berbagai pilihan text editor (Notepad++,
                    Sublime Text, GEdit) yang mendukung pemrograman HTML dan CSS. Penulis juga menjelaskan tentang
                    kompatibilitas antar-browser yang penting untuk memastikan tampilan website konsisten pada berbagai
                    perangkat.
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Dasar HTML dan HTML 5:</h2>
                <p>
                    Bab ini mengenalkan HTML (Hypertext Markup Language) sebagai bahasa markup utama untuk membangun
                    struktur halaman web. Pembaca diperkenalkan pada tag dan elemen dasar HTML seperti html, head, title,
                    dan body,
                    serta pengaturan atribut untuk menyesuaikan tampilan elemen. Buku ini juga menguraikan perbedaan antara
                    HTML dan HTML5, termasuk fitur tambahan pada HTML5 seperti dukungan video, audio, elemen grafis
                    (canvas), dan fitur penyimpanan lokal yang menggantikan kebutuhan plugin eksternal seperti Flash.
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Tag & Elemen Penting dalam HTML:</h2>
                <p>
                    Tag Gambar img Untuk menampilkan gambar dalam halaman web, disertai penjelasan tentang atribut src,
                    alt, width, dan height.
                    Tag Tautan a Cara membuat tautan untuk menghubungkan halaman-halaman atau mengarahkan ke website
                    lain.
                    Heading h1 hingga h6: Pengaturan judul dengan berbagai tingkatan heading yang memberikan
                    struktur hierarki pada konten halaman.
                    Daftar (List): Buku ini menjelaskan cara membuat daftar terurut (Ordered List) menggunakan
                    ol dan daftar tidak terurut (Unordered List) dengan ul, serta definition list untuk
                    membuat daftar istilah.
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-8">
                <h2>Pengelolaan Layout dengan Divisi (Division):</h2>
                <p>
                    Bagian ini membahas tentang tag div, yang sangat penting untuk mengelompokkan elemen-elemen halaman web.
                    Pembaca belajar membagi halaman ke dalam beberapa bagian penting seperti header, content, sidebar, dan
                    footer.
                    Buku ini juga menjelaskan perbedaan antara atribut ID dan Class yang memungkinkan programmer
                    mengelompokkan elemen-elemen dengan karakteristik serupa.
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Membuat Formulir Interaktif:</h2>
                <p>
                    Formulir adalah bagian penting dari interaksi pengguna di sebuah website. Buku ini mengajarkan cara
                    membuat formulir interaktif dengan menggunakan tag form,
                    termasuk input teks, area teks, kombo (dropdown), dan tombol submit. Di sini pembaca juga belajar
                    tentang label dan atribut penting untuk memastikan formulir mudah digunakan.
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Jaringan computer</h2>
                <p>
                    Network adalah kumpulan dari beberapa computer yang terhubung dapat saling berkomunikasi satu sama
                    <br>lainnya melalui media komunikasi berbagai sumber daya (disk dan printer) dan mengakses komputer dari
                    jarak jauh atau jaringan jaringan lainnya
                </p>
                <h6>Keistimewaan Menggunakan jaringan Komputer</h6>
                <p> Didalam penggunaan jaringan computer ada beberapa keistimewaan yang di dapat seperti: <br>
                    1. Dapat berbagi peralatan ,speerti printer,modem. <br>
                    2. Dapat bertukar data maupun informasi di antara pengguna computer <br>
                    3. Dapat menggunakan program aplikasi yang ada di computer pusat <br>
                    4. Dapat menggunakan harddisk secara Bersama dan menyimpan data secara pusar
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Peralatan jaringan computer </h2>
                <p>
                    Untuk menggunakan jaringan yang sederhada ada beberapa komponen yang di perlukan yaitu:
                </p>
                <h6>
                    A.perangkat keras (hardware)
                </h6>
                <p>Server <br>
                    Computer pusat yang menyediakan segala kebutuhan pengguna dan mengawasi jalannya antar computer
                </p>
                <p>Workstation <br>
                    Computer kerja yang di gunakan oleh pemakai didalam suatu jaringan
                    Periferal divices (modern, router)
                    Peralatan-Peralatan yang di gunakan sebagai perangkat tambahan untuk menunjang kerja dari suatu jaringan
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Perangkat lunak </h2>
                <p>
                    Network operating system
                    Contoh Perangkat lunak system operasi yang di gunakan untuk jaringan (micrsistem operasioft windows ,
                    novel netware, linux,unix,sun microsystem)



                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Topologi jaringan computer</h2>
                <p>
                    Topologi memounyai dua bentuk yakni secara fisik dan logika. Bentuk topologi secara fisik dalam jaringan
                    adalah bentuk pengkabelan yang di
                    gunakan dalam suatu jaringan.bentuk topologi secara logika dapat di jelaskan dengan bagaimana aliran
                    data melalui bentuk topologi secara fisik.
                <h6>A.Topologi Star</h6>
                Metode star ini sangat popular digunakan untuk menghubungkan kabel dalam jaringan computer. Dalam star ini
                masing masing peralatan di hubungkan ke titik pusat melalui hubungan point to point.
                <h6>Keuntungan topologi star </h6>
                -masing masing peralatan di hubungkan dengan kabel sendiri hal ini memudahkan untuk memutuskan hubungan.
                <br>
                -semua data melalui titik pusat sehingga mudah untuk mendiagnosa dan memanajemen jaringan. <br>
                -organisasi yang berhierarki ini mengijinkan untuk mengisolasi jalur. Hal ini berguna jika terdapat beban
                yang berat pada jaringan <br>

                </p>
                <h6>Kelemahan topogi star:</h6>
                <p>- Karena menggunakan perkabelan point to point yang digunakan pada masing masing node maka membuatuhkan
                    kabel yang banyak <br>
                    - Bila terjadi masalah pada hubungan maka akan menyebabkan jaringan tidak jalan
                    Topologi bus <br> <br>
                    Topologi bus mengimplementasikan kabel elektrik seperti coax dan pada akhir kabel harus di tutup
                    menggunakan resistor penutup atau “terminator” yang harus
                    sama dengan impendasi kabel. Terminator berguna sebagai reflector data pada setiap ujung kabel.
                </p>
                <h6>Keuntungan topologi bus:</h6>
                <p>- Harga kabel dapat di tekan karena sudah umum dan banyak di gunakan</p>
                <h6>Kelemahan topologi bus:</h6>
                <p>- Sukar untuk di perbaiki karena tidak ada titik distribusi. <br>
                    - Bila terjadi kabel putus maka seluruh jaringan tidak terhubung
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Jenis jenis jaringan computer</h2>
                <br>
                <h6>A. Personal area network (pan) </h6>
                <p>
                    Jenis jaringan computer pan adalah hubungan antara dua atau lebih system computer yang berjarak tidak
                    terlalu jauh.biasanya jenis jaringan yang satu ini hanya berjarak tidak lebih dari 5 meter. Jenis
                    jaringan ini sangat sering kita gunakan contohnya menghubungkan handphone dengan computer
                </p>
                <h6>B. Local Area Network (LAN)</h6>
                <p>Jenis jaringan LAN adalah suatu jaringan yang di hubungkan dalam satu lokasi. sebagai contoh penerapan
                    hubungan computer lantai 1 dengan lantai 2 atau lantai lainnya dan masih dalam satu Gedung , dan
                    teknologi yang di gunakan dapat menggunakan kabel maupun wireless fidelity (wifi) atau nirkabel</p>

                <h6>C. Metropolitan area network(MAN)</h6>
                <p>Jenis jaringan computer MAN adalah suatu jaringan computer yang terhubung dalam suatu kota dengan
                    transfer data berkecepatan tinggi yang menghubungkan dalam suatu lokasi seperti perkantoran,perbankan,
                    pabrik, sekolah, kampus, dan pemerintahan. Jangakau jarak untuk MAN sekitar 10 sampai 50 KM</p>

                <h6>D. Wide area network (WAN)</h6>
                <p>Jenis jaringan WAN adalah jenis jaringan computer yang mencakup area yang lebih luas dengan teknologi
                    yang lebih besar. Contohnya adalah jaringan yang menguhubungkan suatu wilayah atau suatu negara dengan
                    negara lainnya </p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Tipe jaringan computer </h2>
                <p>
                    Di dalam penggunaan jaringan computer umum nya di bagi menjadi dua kategori yaitu:
                </p>
                <h6>A. Tipe Jaringan Peer to Peer</h6>
                <p>Jaringan ini adalah suatu tipe jaringan yang tidak mengenal file server, bahkan semua anggota jaringan
                    dapat menjadi server dan dapat juga menjadi client secara simultan dengan cara yang lebih mudah </p>
                <h6>B. Tipe Jaringan Client Server</h6>
                <p>Pada jaringan tipe ini, wajib minimal memiliki sebuah file server yang berkinerja tinggi untuk melayani
                    seluruh client/ anggtoa jaringan. Karena pada jaringan tipe ini, komunikasi antar system, pengaturan
                    administrasi jaringan bahkan control keamanan jaringan dilakukan oleh file server .</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-10">
                <h2>Bekerja Didalam Jaringan computer</h2>
                <p>
                    Sebuah computer apabila bila ingin di hubungkan ke dalam sebuah jaringan computer yang telah ada, maka
                    terlebih dahulu harus diperhatikan beberapa hal seperti:
                </p>
                <p>a. Pertama periksa pada computer tersebut, apakah memiliki network interfaces card atau fasilitas
                    Wireless Connection serta drive Network Interfaces Card yang mendukung pada system operasi tersebut <br>
                    <br>
                    b. Kedua, periksa pada jaringan tersebut apakah menggunakan kabel UTP-RJ45 yang di hubungkan dengan
                    hub/router , dan periksa apakah masih tersedia koneksi kabel untuk computer yang akan dihubungkan
                    tersebut. Atau jika dikomputerkan tersebut terdapat fasilitas wifi maka dapat menggunakan Nirkabel atau
                    WLAN dan perhatikan jarak hubungan antara computer yang akan di koneksikan dengan WIFI Acces point yang
                    berfungsi sebagai alat transmisi gelombang tersebut atau disebut juga sebagai “Hot Spot” (Jarak kekuatan
                    sekitar 50 meter untuk indoor dan outdor lebih kuat) <br> <br>
                    c. Ketiga, setelah computer terkoneksi secara fisik dengan benar dan baik, Langkah berikutnya periksa
                    setting konfigurasi secara software pada computer yang telah ada. Jika belum mendapatkan hak maka dapat
                    <br>
                    di tanyakan kepada orang yang bertanggung jawab terhadap jaringan tersebut atau yang di sebut sebagai
                    administrator jaringan (Admin) untuk mendapatkan alamat IP address dan password sebagai user untuk dapat
                    mengakses pada jaringan computer tersebut
                </p>
                <h6>Koneksi jaringan wireless </h6>
                <p> Pada jaringan wireless ini terbagi menjadi 2 topologi yaitu Ad-Hoc dan infrastructure. Untuk topologi
                    Ad-Hoc memungkinkan pada jaringan computer ini tidak menggunakan router wireless atau access pont dan
                    bekerja secara peer to peer. Jaringan Ad-Hoc tanpa ada satu lokasi utama yang harus menjadi sentral dan
                    bersifat temprorer</p>
            </div>
        </div>
        {{-- <div class="row mt-5" id="bukulainnya">
            <div class="col-12">
                <h2>Buku lainnya</h2>
            </div>
        </div> --}}

        {{-- <div class="row mt-4">
            @foreach (range(1, 4) as $index)
                <div class="col-md-3 mb-4">
                    <a href="{{ route('book' . $index) }}" class="text-decoration-none">
                        <div class="card book-card" style="width: 300px;">
                            @switch($index)
                                @case(1)
                                    <img src="{{ asset('image/book-cover.jpg') }}" class="card ms-5 mt-2"
                                        alt="Perempuan di Titik Nol">
                                @break

                                @case(2)
                                    <img src="{{ asset('image/perempuan.jpg') }}" class="card ms-5 mt-2"
                                        alt="Mudah Membuat Web Bagi Pemula">
                                @break

                                @case(3)
                                    <img src="{{ asset('image/perempuan.jpg') }}" class="card ms-5 mt-2" alt="JavaScript Basic">
                                @break

                                @case(4)
                                    <img src="{{ asset('image/book-cover.jpg') }}" class="card ms-5 mt-2" alt="PHP & MySQL">
                                @break
                            @endswitch
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    @switch($index)
                                        @case(1)
                                            Perempuan di Titik Nol
                                        @break

                                        @case(2)
                                            Mudah Membuat Web Bagi Pemula
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
            @endforeach --}}
        {{-- </div> --}}
    </div>
@endsection
