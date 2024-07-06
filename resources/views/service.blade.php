@extends('layouts.layout')

@section('content')
<section class="bg-white md:px-20 px-5 text-center md:py-20 py-10 flex justify-center">
    <div class="w-full md:w-1/2">
        <p class="mb-10 text-xl font-medium">Membangun Mimpi Anda: Layanan Konstruksi Komprehensif Kami</p>
        <p class="md:text-xl text-base mt-5">Di <span class="italic secondary-text">Saka Bumi Abadi</span>, kami memahami bahwa setiap proyek konstruksi adalah unik. Itulah mengapa kami menawarkan berbagai layanan untuk memenuhi kebutuhan spesifik Anda, dari <span class="italic primary-text">konsep</span> hingga <span class="italic primary-text">penyelesaian</span>.</p>
    </div>
</section>

<section class="services">
    <div class="primary-bg flex md:flex-row flex-col-reverse manual-gap md:px-20 px-5 md:py-20 py-10">
        <div class="md:w-1/3 w-full md:mt-0 mt-10 flex justify-start">
            <img src="./assets/images/service/pemancangan.jpg" alt="Pemancangan" class="w-full"/>
        </div>
        <div class="md:w-2/3 w-full flex items-center">
            <div class="text-white">
                <p class="font-bold md:text-3xl text-2xl md:text-left text-center">Pemancangan</p>
                <p class="pt-5 text-justify md:text-left">
                    Pemancangan adalah proses memasukkan tiang pancang ke dalam tanah untuk menopang struktur bangunan. Tiang pancang ini berfungsi sebagai pondasi yang kuat dan stabil, menembus lapisan tanah lunak dan mencapai lapisan tanah keras yang mampu menahan beban bangunan.
                    Dengan pemancangan yang tepat, bangunan akan memiliki fondasi yang kokoh dan mampu menahan beban, getaran, dan gerakan tanah, sehingga menjamin keamanan dan ketahanan bangunan dalam jangka panjang.
                    Oleh karena itu, kami menawarkan layanan pemancangan yang berkualitas tinggi dan efisien untuk memastikan keberhasilan proyek konstruksi Anda.
                </p>
            </div>
        </div>
    </div>
    
    <div class="bg-white flex md:flex-row flex-col-reverse manual-gap md:px-20 px-5 md:py-20 py-10">
        <div class="md:w-2/3 w-full flex items-center">
            <div class="text-black">
                <p class="font-bold md:text-3xl text-2xl md:text-left text-center">Bored Pile Bore</p>
                <p class="pt-5 text-justify md:text-left">
                    Bored pile adalah jenis pondasi dalam yang dibuat dengan cara mengebor lubang ke dalam tanah dan kemudian diisi dengan beton bertulang. Fondasi ini cocok untuk bangunan yang membutuhkan daya dukung tinggi, seperti gedung pencakar langit, jembatan, dan struktur infrastruktur lainnya.
                    Bored pile adalah solusi fondasi yang ideal untuk bangunan yang membutuhkan kekuatan dan ketahanan tinggi.
                    Dengan pengalaman dan keahlian kami, Saka Bumi Abadi siap membantu Anda dalam membangun fondasi Bored Pile yang kokoh dan handal untuk proyek Anda.
                </p>
            </div>
        </div>
        <div class="md:w-1/3 w-full md:mt-0 mt-10 flex justify-end">
            <img src="./assets/images/service/bored-pile.jpg" alt="Pemancangan" class="w-full"/>
        </div>
    </div>
    
    <div class="primary-bg flex md:flex-row flex-col-reverse manual-gap md:px-20 px-5 md:py-20 py-10">
        <div class="md:w-1/3 w-full md:mt-0 mt-10 flex justify-start">
            <img src="./assets/images/service/pile-dryling.jpg" alt="Pemancangan" class="w-full"/>
        </div>
        <div class="md:w-2/3 w-full flex items-center">
            <div class="text-white">
                <p class="font-bold md:text-3xl text-2xl md:text-left text-center">Pile Dryling</p>
                <p class="pt-5 text-justify md:text-left">
                    Pemancangan adalah proses pengeboran dan penancapan tiang pancang ke dalam tanah untuk mendukung struktur bangunan. Proses ini dilakukan untuk memastikan kekuatan dan stabilitas bangunan, terutama pada tanah yang lunak atau tidak stabil. Kami menawarkan layanan pemancangan yang berkualitas tinggi dan efisien untuk memastikan keberhasilan proyek konstruksi Anda.
                </p>
            </div>
        </div>
    </div>
    
    <div class="bg-white flex md:flex-row flex-col-reverse manual-gap md:px-20 px-5 md:py-20 py-10">
        <div class="md:w-2/3 w-full flex items-center">
            <div class="text-black">
                <p class="font-bold md:text-3xl text-2xl md:text-left text-center">Angkutan</p>
                <p class="pt-5 text-justify md:text-left">
                    Jasa angkutan konstruksi adalah layanan yang menyediakan pengiriman material dan alat berat untuk proyek konstruksi. Jasa ini sangat penting untuk menjamin kelancaran dan ketepatan waktu proyek, karena material dan alat berat merupakan elemen penting dalam proses pembangunan.
                    Kami menawarkan layanan angkutan konstruksi yang handal dan efisien untuk memenuhi kebutuhan proyek konstruksi Anda. Dengan armada kendaraan yang lengkap dan terawat, kami siap membantu Anda dalam mengangkut material dan alat berat ke lokasi proyek dengan aman dan tepat waktu.
                </p>
            </div>
        </div>
        <div class="md:w-1/3 w-full md:mt-0 mt-10 flex justify-end">
            <img src="./assets/images/service/angkutan.jpg" alt="Pemancangan" class="w-full"/>
        </div>
    </div>

    <div class="primary-bg flex md:flex-row flex-col-reverse manual-gap md:px-20 px-5 md:py-20 py-10">
        <div class="md:w-1/3 w-full md:mt-0 mt-10 flex justify-start">
            <img src="./assets/images/service/tiang-pancang.jpg" alt="Pemancangan" class="w-full"/>
        </div>
        <div class="md:w-2/3 w-full flex items-center">
            <div class="text-white">
                <p class="font-bold md:text-3xl text-2xl md:text-left text-center">Pabrik dan Distributor Tiang Pancang</p>
                <p class="pt-5 text-justify md:text-left">
                    Pabrik dan Distributor Tiang Pancang adalah perusahaan yang memproduksi dan menjual tiang pancang yang diproduksi oleh pabrik.
                    Memilih pabrik dan distributor tiang pancang yang tepat sangat penting untuk memastikan kualitas dan keandalan fondasi bangunan. 
                    Oleh karena itu, Kami menawarkan solusi lengkap untuk kebutuhan fondasi bangunan Anda. Kami memproduksi tiang pancang berkualitas tinggi dengan berbagai jenis dan spesifikasi untuk memenuhi kebutuhan proyek konstruksi yang berbeda-beda.
                </p>
                <p class="pt-5 text-justify md:text-left">
                    TIANG PANCANG BETON </br>
                    Mutu K450 - 4d13 </br>
                    Mutu K500 - 4d13 </br>
                    Segiempat 20x20 cm </br>
                    Segiempat 25x25 cm </br>
                    Segiempat 30x30 cm </br>
                </p>
            </div>
        </div>
    </div>
    
    <div class="bg-white flex justify-center md:py-20 md:px-20 px-5" py-0>
        <div class="w-full md:w-1/2 pt-10">
            <p class="md:text-xl italic text-base text-center">Jika Anda membutuhkan layanan konstruksi berkualitas tinggi dan andal, hubungi kami hari ini untuk mendiskusikan proyek Anda. Kami siap membantu Anda mewujudkan visi Anda dan menciptakan bangunan yang kokoh dan tahan lama.</p>
            <div class="flex justify-center mt-5">
                <button class="primary-bg text-white px-10 py-2 rounded-lg mt-5">Hubungi Kami</button>
            </div>
        </div>
    </div>
</section>
@endsection
