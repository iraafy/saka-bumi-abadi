@extends('layouts.layout')

@section('content')
<section class="primary-bg md:px-20">
    <div class="flex flex-col-reverse md:flex-row">
        <div class="md:w-1/2 w-full text-white flex items-center">
            <div class="md:my-0 my-10 md:text-left text-center px-5 md:px-0">
                <b class="text-2xl">Saka Bumi Abadi</b>
                <p class="mt-5">
                    Dengan pengalaman lebih dari 7 tahun di bidang jasa konstruksi dan infrastruktur, kami berkomitmen untuk memberikan solusi terbaik dengan kualitas terjamin, keandalan yang tak tergoyahkan, dan praktik berkelanjutan yang bertanggung jawab. Kami menawarkan berbagai layanan, termasuk Pemancangan, Bored pile, Bore pile drying, Angkutan, dan Distributor tiang pancang untuk memenuhi kebutuhan proyek Anda. Hubungi kami hari ini untuk berdiskusi tentang kebutuhan proyek Anda dan temukan solusi terbaik bersama Saka Bumi Abadi.
                </p>
                <a href="/about">
                    <button class="border-white border rounded-md text-white px-5 py-2 mt-8">Lihat Selengkapnya</button>
                </a>
            </div>
        </div>
        <div class="md:w-1/2 w-full flex justify-center md:justify-end md:mt-0">
            <img src="https://images.unsplash.com/photo-1551711974-faf378be34b2?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="height: 700px; object-fit: cover;" alt="Saka Bumi Abadi" class="w-full md:w-auto">
        </div>
    </div>
</section>

<section class="bg-white md:px-20 px-5 pt-20">
    <div class="row">
        <p class="text-3xl mb-10 md:mb-20 secondary-text font-bold text-center">Mengapa Memilih Kami?</p>
        <div class="flex flex-col md:flex-row flex-wrap">
            <div class="md:w-1/3 w-full mb-8 md:mb-16">
                <div class="row inline-flex px-5">
                    <div class="col pr-5 flex items-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" viewBox="0 0 32 32"><path fill="#1B4A64" d="M10.666 18.292c.275.48.89.644 1.365.367l3.306-1.678c.054.008.108.018.165.018c.83 0 1.5-.67 1.5-1.5l-.5-7.876a1 1 0 1 0-2 0l-.465 7.343l-3.004 1.96a1 1 0 0 0-.364 1.365zm1.396-8.747a.999.999 0 0 0 .366-1.366a.999.999 0 1 0-.366 1.364zM8.18 18.572a1 1 0 1 0 1.365.364a1.004 1.004 0 0 0-1.367-.365zm1-7.876a1 1 0 1 0-.998 1.732a1 1 0 0 0 .997-1.732zM6.624 15.5a1.001 1.001 0 1 0 2.002-.002a1.001 1.001 0 0 0-2.002.002m7.877 7.877a1 1 0 1 0 2.002.002a1 1 0 0 0-2.002-.002m-3.804-1.555c-.275.48-.11 1.09.366 1.365a1 1 0 1 0-.366-1.365m11.126-11.126a1 1 0 1 0 .998 1.732a1 1 0 0 0-.998-1.732m-.366 8.242a1 1 0 1 0 1.732 1a1 1 0 0 0-1.732-1m2.922-3.438c0-.55-.448-1-1-1a1 1 0 1 0 1 1m-5.805 7.322a.999.999 0 1 0 1.73-1a1 1 0 1 0-1.732 1zm.366-13.276a.999.999 0 1 0 .997-1.733a1 1 0 0 0-.998 1.732zm9.763 4.818c-.63-7.292-7.05-12.694-14.34-12.07a13.18 13.18 0 0 0-8.25 3.878l-1.772-1.49l-1.308 7.363l7.03-2.548L8.428 8.12a10.177 10.177 0 0 1 6.194-2.833a10.26 10.26 0 0 1 11.09 9.335a10.26 10.26 0 0 1-9.333 11.09c-5.643.476-10.6-3.694-11.092-9.333c-.102-1.205.02-2.374.31-3.48l-3.27 1.187c-.09.832-.106 1.684-.03 2.55c.628 7.29 7.047 12.69 14.34 12.066c7.29-.63 12.693-7.048 12.068-14.34z"/></svg>
                    </div>
                    <div class="col">
                        <p class="font-bold text-lg mb-3">Berpengalaman</p>
                        <p>Dengan pengalaman lebih dari 7 tahun di bidang konstruksi dan infrastruktur, kami siap menjadi mitra terpercaya Anda dalam mewujudkan proyek yang berkualitas dan tepat waktu.</p>
                    </div>
                </div>
            </div>    
            <div class="md:w-1/3 w-full mb-8 md:mb-16">
                <div class="row inline-flex px-5">
                    <div class="col pr-5 flex items-start md:items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" viewBox="0 0 24 24"><path fill="#1B4A64" d="M8.5 17V6H9q0-1.25.875-2.125T12 3t2.125.875T15 6h.5v11zm2-11h3q0-.65-.425-1.075T12 4.5t-1.075.425T10.5 6M17 17V6h1q.825 0 1.413.588T20 8v7q0 .825-.587 1.413T18 17zM6 17q-.825 0-1.412-.587T4 15V8q0-.825.588-1.412T6 6h1v11zm-4 4v-2h20v2z"/></svg>
                    </div>
                    <div class="col">
                        <p class="font-bold text-lg mb-3">Professional</p>
                        <p>Dengan tim profesional dan berpengalaman, serta komitmen terhadap kualitas dan keselamatan, menghadirkan solusi konstruksi yang terjamin dan memuaskan di seluruh Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 w-full mb-8 md:mb-16">
                <div class="row inline-flex px-5">
                    <div class="col pr-5 flex items-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" viewBox="0 0 24 24"><path fill="#1B4A64" d="M12 1.998c5.524 0 10.002 4.478 10.002 10.002q0 .587-.067 1.157a5.5 5.5 0 0 0-1.434-1.058V12c0-.689-.081-1.359-.236-2h-3.358q.075.778.09 1.591a5.5 5.5 0 0 0-1.496.508V12q-.001-1.038-.104-2.001H8.603a19 19 0 0 0 .135 5h4.137a5.5 5.5 0 0 0-.352 1.5H9.06c.652 2.415 1.786 4.002 2.94 4.002c.454 0 .906-.247 1.326-.694c.361.616.832 1.222 1.399 1.818c-.867.245-1.781.376-2.726.376C6.476 22.001 2 17.523 2 12C1.999 6.476 6.476 1.998 12 1.998M7.508 16.5H4.786a8.53 8.53 0 0 0 4.094 3.41c-.522-.82-.953-1.846-1.27-3.015zm-.414-6.501H3.736l-.005.017A8.5 8.5 0 0 0 3.5 12a8.5 8.5 0 0 0 .544 3h3.173A20 20 0 0 1 7 12c0-.684.032-1.354.095-2.001m1.787-5.91l-.023.008A8.53 8.53 0 0 0 4.25 8.5h3.048c.314-1.752.86-3.278 1.583-4.41m3.12-.591l-.117.005C10.62 3.62 9.397 5.621 8.83 8.5h6.342c-.566-2.87-1.783-4.869-3.045-4.995zm3.12.59l.106.175c.67 1.112 1.177 2.572 1.475 4.237h3.048a8.53 8.53 0 0 0-4.339-4.29zM22.5 17a4.5 4.5 0 0 0-9 0c0 1.863 1.419 3.815 4.2 5.9a.5.5 0 0 0 .6 0c2.78-2.085 4.2-4.037 4.2-5.9m-6 0a1.5 1.5 0 1 1 2.999 0a1.5 1.5 0 0 1-3 0"/></svg>
                    </div>
                    <div class="col">
                        <p class="font-bold text-lg mb-3">Cakupan Nasional</p>
                        <p>Dengan pengalaman di berbagai penjuru Indonesia, siap memberikan solusi konstruksi yang tepat dan efisien untuk proyek Anda, di mana pun lokasinya.</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 w-full mb-8 md:mb-16">
                <div class="row inline-flex px-5">
                    <div class="col pr-5 flex items-start md:items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" viewBox="0 0 12 12"><path fill="#1B4A64" fill-rule="evenodd" d="M5.095 2.903a.53.53 0 0 1 .472-.278l1.05.016a.53.53 0 0 1 .462.292l.42.844l.742-.063a.53.53 0 0 1 .486.239l.53.822a.525.525 0 0 1-.015.59l-.39.546l.415.548c.129.17.142.402.032.586l-.5.838a.53.53 0 0 1-.482.255l-.785-.048l-.483.989a.53.53 0 0 1-.472.294H5.495a.53.53 0 0 1-.471-.294L4.57 8.15l-.84.076a.53.53 0 0 1-.493-.246l-.531-.855a.525.525 0 0 1 .03-.597l.48-.625l-.386-.539a.525.525 0 0 1-.014-.59l.53-.822a.53.53 0 0 1 .485-.239l.797.068zm.598.474l-.472.888a.53.53 0 0 1-.508.277l-.81-.069l-.374.58l.394.55a.525.525 0 0 1-.01.625l-.488.634l.376.606l.856-.078a.525.525 0 0 1 .52.292l.459.941h.8l.488-.997a.53.53 0 0 1 .503-.293l.798.048l.352-.59l-.424-.56a.525.525 0 0 1-.008-.622l.399-.556l-.374-.58l-.76.064a.525.525 0 0 1-.515-.29l-.427-.858z" clip-rule="evenodd"/><path fill="#1B4A64" d="M10.282 7.4a4.5 4.5 0 0 1-8.666-.376l.851-.168L.847 5.18l-.848 2.167l.897-.176a5.25 5.25 0 0 0 10.125.461zm.836-2.54A5.25 5.25 0 0 0 .993 4.4l.713.232a4.5 4.5 0 0 1 8.666.375l-.851.169l1.62 1.672l.858-2.164z"/><path fill="#1B4A64" fill-rule="evenodd" d="M6 5.625a.375.375 0 1 0 0 .75a.375.375 0 0 0 0-.75M4.875 6a1.125 1.125 0 1 1 2.25 0a1.125 1.125 0 0 1-2.25 0" clip-rule="evenodd"/></svg>
                    </div>
                    <div class="col">
                        <p class="font-bold text-lg mb-3">Berintegritas</p>
                        <p>Kami menjunjung tinggi integritas dalam setiap proses konstruksi, menjamin transparansi, akuntabilitas, dan komitmen untuk membangun hubungan jangka panjang yang saling menguntungkan dengan klien.</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 w-full mb-8 md:mb-16">
                <div class="row inline-flex px-5">
                    <div class="col pr-5 flex items-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" viewBox="0 0 24 24"><path fill="#1B4A64" d="M11 6h3l3.29-3.3a1 1 0 0 1 1.42 0l2.58 2.59a1 1 0 0 1 0 1.41L19 9h-8v2a1 1 0 0 1-1 1a1 1 0 0 1-1-1V8a2 2 0 0 1 2-2m-6 5v4l-2.29 2.29a1 1 0 0 0 0 1.41l2.58 2.59a1 1 0 0 0 1.42 0L11 17h4a1 1 0 0 0 1-1v-1h1a1 1 0 0 0 1-1v-1h1a1 1 0 0 0 1-1v-1h-7v1a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2V9Z"/></svg>                    </div>
                    <div class="col">
                        <p class="font-bold text-lg mb-3">Dapat Dipercaya</p>
                        <p>Dengan rekam jejak yang terbukti dan komitmen terhadap kualitas, menghadirkan solusi konstruksi yang andal dan tepat waktu, menjadikannya mitra terpercaya untuk membangun masa depan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="md:w-1/3 w-full mb-8 md:mb-16">
                <div class="row inline-flex px-5">
                    <div class="col pr-5 flex items-start md:items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" viewBox="0 0 256 256"><g fill="#1B4A64"><path d="M232 128c0 12.51-17.82 21.95-22.68 33.69c-4.68 11.32 1.42 30.65-7.78 39.85s-28.53 3.1-39.85 7.78C150 214.18 140.5 232 128 232s-22-17.82-33.69-22.68c-11.32-4.68-30.65 1.42-39.85-7.78s-3.1-28.53-7.78-39.85C41.82 150 24 140.5 24 128s17.82-22 22.68-33.69c4.68-11.31-1.42-30.65 7.78-39.85s28.54-3.1 39.85-7.78C106.05 41.82 115.5 24 128 24s22 17.82 33.69 22.68c11.32 4.68 30.65-1.42 39.85 7.78s3.1 28.53 7.78 39.85C214.18 106.05 232 115.5 232 128" opacity="0.2"/><path d="M225.86 102.82c-3.77-3.94-7.67-8-9.14-11.57c-1.36-3.27-1.44-8.69-1.52-13.94c-.15-9.76-.31-20.82-8-28.51s-18.75-7.85-28.51-8c-5.25-.08-10.67-.16-13.94-1.52c-3.56-1.47-7.63-5.37-11.57-9.14C146.28 23.51 138.44 16 128 16s-18.27 7.51-25.18 14.14c-3.94 3.77-8 7.67-11.57 9.14c-3.25 1.36-8.69 1.44-13.94 1.52c-9.76.15-20.82.31-28.51 8s-7.8 18.75-8 28.51c-.08 5.25-.16 10.67-1.52 13.94c-1.47 3.56-5.37 7.63-9.14 11.57C23.51 109.72 16 117.56 16 128s7.51 18.27 14.14 25.18c3.77 3.94 7.67 8 9.14 11.57c1.36 3.27 1.44 8.69 1.52 13.94c.15 9.76.31 20.82 8 28.51s18.75 7.85 28.51 8c5.25.08 10.67.16 13.94 1.52c3.56 1.47 7.63 5.37 11.57 9.14c6.9 6.63 14.74 14.14 25.18 14.14s18.27-7.51 25.18-14.14c3.94-3.77 8-7.67 11.57-9.14c3.27-1.36 8.69-1.44 13.94-1.52c9.76-.15 20.82-.31 28.51-8s7.85-18.75 8-28.51c.08-5.25.16-10.67 1.52-13.94c1.47-3.56 5.37-7.63 9.14-11.57c6.63-6.9 14.14-14.74 14.14-25.18s-7.51-18.27-14.14-25.18m-11.55 39.29c-4.79 5-9.75 10.17-12.38 16.52c-2.52 6.1-2.63 13.07-2.73 19.82c-.1 7-.21 14.33-3.32 17.43s-10.39 3.22-17.43 3.32c-6.75.1-13.72.21-19.82 2.73c-6.35 2.63-11.52 7.59-16.52 12.38S132 224 128 224s-9.15-4.92-14.11-9.69s-10.17-9.75-16.52-12.38c-6.1-2.52-13.07-2.63-19.82-2.73c-7-.1-14.33-.21-17.43-3.32s-3.22-10.39-3.32-17.43c-.1-6.75-.21-13.72-2.73-19.82c-2.63-6.35-7.59-11.52-12.38-16.52S32 132 32 128s4.92-9.15 9.69-14.11s9.75-10.17 12.38-16.52c2.52-6.1 2.63-13.07 2.73-19.82c.1-7 .21-14.33 3.32-17.43s10.39-3.22 17.43-3.32c6.75-.1 13.72-.21 19.82-2.73c6.35-2.63 11.52-7.59 16.52-12.38S124 32 128 32s9.15 4.92 14.11 9.69s10.17 9.75 16.52 12.38c6.1 2.52 13.07 2.63 19.82 2.73c7 .1 14.33.21 17.43 3.32s3.22 10.39 3.32 17.43c.1 6.75.21 13.72 2.73 19.82c2.63 6.35 7.59 11.52 12.38 16.52S224 124 224 128s-4.92 9.15-9.69 14.11m-40.65-43.77a8 8 0 0 1 0 11.32l-56 56a8 8 0 0 1-11.32 0l-24-24a8 8 0 0 1 11.32-11.32L112 148.69l50.34-50.35a8 8 0 0 1 11.32 0"/></g></svg>
                    </div>
                    <div class="col">
                        <p class="font-bold text-lg mb-3">Berkualitas</p>
                        <p>Kami berkomitmen untuk memberikan layanan konstruksi dengan kualitas terbaik, mengutamakan ketepatan waktu, dan memastikan kepuasan Anda sebagai prioritas utama.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white md:px-20 px-5 py-20">
    <div class="flex flex-col-reverse md:flex-row">
        <div class="md:w-1/2 w-full md:px-10 px-5 pt-10 md:pb-10 pb-0">
            <img src="/assets/images/landing/maps.svg" alt="" width="100%">
        </div>
        <div class="md:w-1/2 w-full md:ps-10 text-black flex items-center">
            <div class="row">
                <p class="font-bold text-2xl md:text-left text-center">
                    Tersedia
                    <span class="italic text-orange-500">
                        Di Seluruh Indonesia
                    </span>
                </p>
                <p class="md:text-left text-justify mt-8 md:mt-5">
                    Manfaatkan jangkauan nasional dan keahlian professional kami untuk mendapatkan pengalaman konstruksi terbaik. Tim profesional kami siap menangani proyek Anda, mulai dari tahap perencanaan hingga penyelesaian, di mana pun lokasi proyek Anda di Indonesia.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="primary-bg md:px-20 px-5 py-20">
    <div class="row">
        <p class="text-3xl text-white font-bold text-center md:text-left">Layanan Kami</p>
        <p class="text-justify mb-10 mt-5 md:text-left text-white">Saka Bumi Abadi menawarkan berbagai layanan konstruksi dan infrastruktur yang terjamin kualitasnya, andal, dan berkelanjutan.</p>
        <div class="flex flex-col md:flex-row gap-10">
            <div class="md:w-1/4 w-full">
                <img src="/assets/images/landing/service-1.svg" alt="service-image" width="100%">
            </div>    
            <div class="md:w-1/4 w-full">
                <img src="/assets/images/landing/service-2.jpg" alt="service-image" width="100%">
            </div>
            <div class="md:w-1/4 w-full">
                <img src="/assets/images/landing/service-3.svg" alt="service-image" width="100%">
            </div>
            <div class="md:w-1/4 w-full">
                <img src="/assets/images/landing/service-4.svg" alt="service-image" width="100%">
            </div>
            <div class="items-center md:flex hidden">
                <a href="/services">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7rem" height="7rem" viewBox="0 0 24 24"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" d="m10 17l5-5l-5-5"/></svg>
                </a>
            </div>
            <div class="md:hidden block text-center">
                <a href="/services" class="text-xl text-white font-bold underline">
                    Lihat Lebih Banyak
                </a>    
            </div>
        </div>
    </div>
</section>

<section class="bg-white md:px-20 px-5 py-20">
    <p class="text-3xl mb-5 primary-text font-bold">Proyek Kami</p>
    <p class="text-justify md:text-left">Saka Bumi Abadi adalah mitra terpercaya Anda dalam mewujudkan proyek konstruksi yang berkualitas dan tepat waktu.</p>
    <div class="js-flickity mt-10" data-flickity-options='{ "wrapAround": true }'>
        <img src="/assets/images/landing/project-1.jpg" class="gallery-cell" alt="project-image" width="100%">
        <img src="/assets/images/landing/project-2.jpg" class="gallery-cell" alt="project-image" width="100%">
        <img src="/assets/images/landing/project-3.jpg" class="gallery-cell" alt="project-image" width="100%">
    </div>
</section>
@endsection