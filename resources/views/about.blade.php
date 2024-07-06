@extends('layouts.layout')

@section('content')
<section class="bg-white md:px-20 px-5 text-center md:py-20 py-10">
    <p class="text-3xl mb-10 font-bold secondary-text">
        MISI KAMI
    </p>
    <p class="mb-10 text-xl"> Membuat ekosistem <span class="italic text-blue-500">kolaboratif</span>, memberdayakan <span class="italic secondary-text">komunitas</span>, <br /> dan mendorong <span class="italic text-blue-500">perubahan positif</span></p>
    <div class="flex justify-center">
        <video width="80%" controls>
            <source src="./assets/images/about/video.mp4" type="video/mp4">
        </video>
    </div>
    <p class="text-xl mt-5"><span class="italic secondary-text">7 Years Building the Nation:</span> A Commitment to a Better Indonesia</p>
</section>

<section class="primary-bg md:px-20 px-5 py-20 text-white text-center">
    <p class="text-3xl mb-10 font-bold">
        VISI KAMI
    </p>
    <div class="flex justify-center">
        <div class="w-1/3">
            <p class="text-xl">
                Menawarkan solusi konstruksi dan infrastruktur terbaik di Indonesia, dengan komitmen memberikan yang terbaik dalam <span class="italic text-blue-400">kualitas</span>, <span class="italic text-green-400">keandalan</span>, dan <span class="italic text-red-400">praktik berkelanjutan</span>.
            </p>
        </div>
    </div>
</section>

<section class="bg-white md:px-20 px-5 pt-20 pb-0">
    <p class="text-3xl mb-5 font-bold primary-text">
        Prinsip Kami
    </p>
    <p class="text-lg">Proyek Kami Mewujudkan Komitmen Kami, Menyatukan Masyarakat Melalui Infrastruktur Berkualitas.</p>
    <div class="flex flex-col md:flex-row gap-10 mt-10">
        <div class="md:w-4/5 w-full">
            <div id="accordion-flush" data-accordion="collapse" data-active-classes="bg-white text-gray-900" data-inactive-classes="text-gray-500">
                <!-- Item 1 -->
                <h2 id="accordion-flush-heading-1">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                        <span class="primary-text font-bold">Kejujuran dan Integritas</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500">Menjunjung tinggi kejujuran, transparansi, dan perilaku etis dalam semua urusan bisnis.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <h2 id="accordion-flush-heading-2">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                        <span class="primary-text font-bold">Tanggung Jawab Sosial</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500">Berkontribusi positif kepada masyarakat dan meminimalkan dampak negatif terhadap lingkungan dan komunitas.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <h2 id="accordion-flush-heading-3">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                        <span class="primary-text font-bold">Keadilan dan Kesetaraan</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500">Memperlakukan semua pemangku kepentingan dengan adil dan setara, tanpa diskriminasi atau prasangka.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <h2 id="accordion-flush-heading-4">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-4">
                        <span class="primary-text font-bold text-left">Menghormati Hak Cipta dan Hak Kekayaan Intelektual</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500">Mengakui dan melindungi hak kekayaan intelektual orang lain.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <h2 id="accordion-flush-heading-5">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-5">
                        <span class="primary-text font-bold">Menghargai Privasi dan Kerahasiaan</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500">Melindungi privasi dan kerahasiaan informasi yang sensitif.</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <h2 id="accordion-flush-heading-6">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-6" aria-expanded="false" aria-controls="accordion-flush-body-6">
                        <span class="primary-text font-bold">Menghindari Konflik Kepentingan</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-6" class="hidden" aria-labelledby="accordion-flush-heading-6">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500">Mengidentifikasi dan mengelola potensi konflik kepentingan untuk memastikan objektivitas dan keadilan.</p>
                    </div>
                </div>

                <!-- Item 7 -->
                <h2 id="accordion-flush-heading-7">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-7" aria-expanded="false" aria-controls="accordion-flush-body-7">
                        <span class="primary-text font-bold">Tidak Melakukan Korupsi atau Suap</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-7" class="hidden" aria-labelledby="accordion-flush-heading-7">
                    <div class="py-5 border-b border-gray-200">
                        <p class="mb-2 text-gray-500">Menghindari terlibat dalam segala bentuk penyuapan atau korupsi.</p>
                    </div>
                </div>

                <!-- Item 8 -->
                <h2 id="accordion-flush-heading-8">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium border-b border-gray-200 gap-3" data-accordion-target="#accordion-flush-body-8" aria-expanded="false" aria-controls="accordion-flush-body-8">
                        <span class="primary-text font-bold">Menjaga Lingkungan Hidup</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-8" class="hidden" aria-labelledby="accordion-flush-heading-8">
                    <div class="py-5">
                        <p class="mb-2 text-gray-500">Melindungi lingkungan dan berkontribusi terhadap keberlanjutan ekosistem.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/5 md:flex items-center hidden md:pl-10 mt-5 md:mt-0">
            <img src="/assets/images/about/accordion.svg" alt="accordion-img" class="rounded-xl" />
        </div>
    </div>
</section>
@endsection