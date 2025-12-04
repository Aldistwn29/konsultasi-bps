@extends('layouts.public')

@section('content')
        <!-- Hero Section -->
        <section class="relative flex items-center min-h-screen overflow-hidden text-white bg-gradient-to-br from-primary-900 via-primary-800 to-primary-700">
            <!-- Enhanced background with better overlay and positioning -->
            <div class="absolute inset-0 bg-gradient-to-br from-black/50 via-black/30 to-black/40"></div>
            <div class="absolute inset-0 bg-center bg-cover opacity-30" 
                 style="background-image: url('/placeholder.svg?height=800&width=1200');"></div>
            
            <!-- Content -->
            <div class="container relative z-10 px-4 py-12 mx-auto sm:px-6 sm:py-24">
                <div class="grid items-center gap-8 mx-auto lg:grid-cols-2 lg:gap-20 max-w-7xl">
                    <!-- Left Column: Main Content -->
                    <div class="space-y-6 text-center sm:space-y-10 animate-fade-in-up lg:text-left">
                        <div class="space-y-4 sm:space-y-8">
                            <h1 class="text-4xl font-black leading-tight sm:text-5xl lg:text-6xl xl:text-8xl">
                                <span class="block tracking-tight text-white drop-shadow-2xl">SPINTAR</span>
                                <span class="block mt-2 text-xl font-bold tracking-wide text-accent-400 sm:text-2xl lg:text-3xl xl:text-4xl">BPS Kota Sukabumi</span>
                            </h1>
                            <p class="max-w-2xl mx-auto text-base font-light leading-relaxed text-gray-100 sm:text-lg lg:text-xl xl:text-2xl lg:mx-0">
                                <strong class="font-semibold text-white">SPINTAR</strong> (Satu Pintu Informasi dan Konsultasi) adalah layanan resmi Badan Pusat Statistik 
                                yang memudahkan akses informasi dan konsultasi data statistik secara cepat dan profesional.
                            </p>
                        </div>
                        
                        <!-- CTA Buttons -->
                        <div class="flex flex-col justify-center gap-4 sm:flex-row sm:gap-6 lg:justify-start">
                            <a href="{{ route('konsultasi.show') }}"
                               class="inline-flex items-center justify-center px-6 py-4 text-base font-bold text-white transition-all duration-300 transform shadow-2xl group sm:px-10 sm:py-5 bg-accent-500 hover:bg-accent-400 rounded-2xl hover:shadow-accent-500/25 sm:text-lg hover:scale-105">
                                <svg class="w-5 h-5 mr-2 transition-transform duration-300 sm:w-6 sm:h-6 sm:mr-3 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                </svg>
                                Ajukan Konsultasi
                            </a>
                            <a href="#layanan"
                               class="inline-flex items-center justify-center px-6 py-4 text-base font-bold text-white transition-all duration-300 border-2 sm:px-10 sm:py-5 border-white/80 rounded-2xl hover:bg-white hover:text-primary-900 sm:text-lg backdrop-blur-sm">
                                Pelajari Layanan
                            </a>
                        </div>
                    </div>

                    <!-- Right Column: Enhanced Features Card -->
                    <div class="mt-8 lg:pl-8 animate-fade-in lg:mt-0">
                        <div class="p-6 shadow-2xl glass-effect rounded-3xl sm:p-10">
                            <h2 class="mb-6 text-2xl font-bold text-center sm:text-3xl sm:mb-10">Mengapa Pilih SPINTAR?</h2>
                            <div class="space-y-6 sm:space-y-8">
                                <div class="flex items-start space-x-4 sm:space-x-6 group">
                                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 transition-transform duration-300 sm:w-14 sm:h-14 bg-accent-500 rounded-2xl group-hover:scale-110">
                                        <svg class="w-6 h-6 text-white sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="mb-2 text-lg font-bold sm:text-xl">Respons Cepat</h3>
                                        <p class="text-sm leading-relaxed text-gray-200 sm:text-base">Teknologi terkini untuk layanan yang efisien dan responsif</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4 sm:space-x-6 group">
                                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 transition-transform duration-300 bg-green-500 sm:w-14 sm:h-14 rounded-2xl group-hover:scale-110">
                                        <svg class="w-6 h-6 text-white sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="mb-2 text-lg font-bold sm:text-xl">Keamanan Terjamin</h3>
                                        <p class="text-sm leading-relaxed text-gray-200 sm:text-base">Privasi data dengan standar keamanan tinggi dan terpercaya</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start space-x-4 sm:space-x-6 group">
                                    <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 transition-transform duration-300 bg-purple-500 sm:w-14 sm:h-14 rounded-2xl group-hover:scale-110">
                                        <svg class="w-6 h-6 text-white sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="mb-2 text-lg font-bold sm:text-xl">Wawasan Profesional</h3>
                                        <p class="text-sm leading-relaxed text-gray-200 sm:text-base">Rekomendasi berbasis data untuk hasil yang optimal</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Enhanced Wave Separator -->
            <div class="absolute bottom-0 left-0 right-0">
                <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
                    <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white" />
                </svg>
            </div>
        </section>

        <!-- Prosedur Section -->
        <section id="prosedur" class="py-12 bg-white sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6">
                <div class="mb-12 text-center sm:mb-16 lg:mb-20">
                    <h2 class="mb-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl xl:text-6xl sm:mb-6">Prosedur Konsultasi</h2>
                    <div class="w-16 h-1 mx-auto mb-4 rounded-full sm:w-24 bg-primary-500 sm:mb-6"></div>
                    <p class="max-w-3xl px-4 mx-auto text-lg leading-relaxed text-gray-600 sm:text-xl">Tiga langkah mudah untuk mendapatkan konsultasi statistik profesional</p>
                </div>
                
                <div class="grid max-w-6xl grid-cols-1 gap-8 mx-auto md:grid-cols-3 sm:gap-12">
                    <!-- Enhanced procedure cards with better spacing and animations -->
                    <div class="text-center group animate-fade-in-up" style="animation-delay: 0.1s">
                        <div class="relative mb-6 sm:mb-10">
                            <div class="flex items-center justify-center w-20 h-20 mx-auto transition-all duration-300 shadow-xl sm:w-24 sm:h-24 bg-gradient-to-br from-primary-500 to-primary-600 rounded-3xl group-hover:scale-110 group-hover:rotate-3">
                                <svg class="w-10 h-10 text-white sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>
                            <div class="absolute flex items-center justify-center w-8 h-8 text-sm font-bold text-white rounded-full shadow-lg -top-2 -right-2 sm:-top-3 sm:-right-3 sm:w-10 sm:h-10 bg-accent-500 sm:text-lg">1</div>
                        </div>
                        <h3 class="mb-4 text-xl font-bold text-gray-900 sm:text-2xl sm:mb-6">Isi Formulir</h3>
                        <p class="px-2 text-base leading-relaxed text-gray-600 sm:text-lg">Lengkapi data dan kebutuhan konsultasi melalui formulir online yang mudah digunakan</p>
                    </div>
                    
                    <div class="text-center group animate-fade-in-up" style="animation-delay: 0.2s">
                        <div class="relative mb-6 sm:mb-10">
                            <div class="flex items-center justify-center w-20 h-20 mx-auto transition-all duration-300 shadow-xl sm:w-24 sm:h-24 bg-gradient-to-br from-green-500 to-green-600 rounded-3xl group-hover:scale-110 group-hover:rotate-3">
                                <svg class="w-10 h-10 text-white sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="absolute flex items-center justify-center w-8 h-8 text-sm font-bold text-white rounded-full shadow-lg -top-2 -right-2 sm:-top-3 sm:-right-3 sm:w-10 sm:h-10 bg-accent-500 sm:text-lg">2</div>
                        </div>
                        <h3 class="mb-4 text-xl font-bold text-gray-900 sm:text-2xl sm:mb-6">Konfirmasi Admin</h3>
                        <p class="px-2 text-base leading-relaxed text-gray-600 sm:text-lg">Tim admin akan memeriksa dan mengonfirmasi permintaan konsultasi dalam 1x24 jam</p>
                    </div>
                    
                    <div class="text-center group animate-fade-in-up" style="animation-delay: 0.3s">
                        <div class="relative mb-6 sm:mb-10">
                            <div class="flex items-center justify-center w-20 h-20 mx-auto transition-all duration-300 shadow-xl sm:w-24 sm:h-24 bg-gradient-to-br from-purple-500 to-purple-600 rounded-3xl group-hover:scale-110 group-hover:rotate-3">
                                <svg class="w-10 h-10 text-white sm:w-12 sm:h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a2 2 0 012-2h4a2 2 0 012 2v4m-6 4v10m6-10v10m-6-4h6" />
                                </svg>
                            </div>
                            <div class="absolute flex items-center justify-center w-8 h-8 text-sm font-bold text-white rounded-full shadow-lg -top-2 -right-2 sm:-top-3 sm:-right-3 sm:w-10 sm:h-10 bg-accent-500 sm:text-lg">3</div>
                        </div>
                        <h3 class="mb-4 text-xl font-bold text-gray-900 sm:text-2xl sm:mb-6">Konsultasi</h3>
                        <p class="px-2 text-base leading-relaxed text-gray-600 sm:text-lg">Hadiri sesi konsultasi sesuai jadwal yang telah disepakati bersama</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Layanan Utama -->
        <section id="layanan" class="py-12 sm:py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-gray-100">
            <div class="px-4 mx-auto max-w-7xl sm:px-6">
                <div class="mb-12 text-center sm:mb-16 lg:mb-20">
                    <h2 class="mb-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl xl:text-6xl sm:mb-6">Layanan Utama</h2>
                    <div class="w-16 h-1 mx-auto mb-4 rounded-full sm:w-24 bg-primary-500 sm:mb-6"></div>
                    <p class="max-w-3xl px-4 mx-auto text-lg leading-relaxed text-gray-600 sm:text-xl">Berbagai layanan statistik untuk mendukung kebutuhan penelitian dan bisnis Anda</p>
                </div>
                
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 sm:gap-8">
                    <!-- Enhanced service cards with better shadows and hover effects -->
                    <!-- Perpustakaan -->
                    <div class="relative p-6 transition-all duration-500 transform bg-white shadow-xl rounded-3xl hover:shadow-2xl sm:p-8 group hover:-translate-y-2">
                        <div class="absolute top-4 sm:top-6 right-4 sm:right-6">
                            <span class="px-3 py-1 text-xs font-bold text-green-800 bg-green-100 rounded-full sm:px-4 sm:py-2">GRATIS</span>
                        </div>
                        <div class="flex items-center justify-center w-16 h-16 mb-6 transition-transform duration-300 shadow-lg sm:w-18 sm:h-18 bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl sm:mb-8 group-hover:scale-110">
                            <svg class="w-8 h-8 text-white sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 sm:text-2xl">Perpustakaan</h3>
                        <p class="mb-4 text-xs font-semibold tracking-wide uppercase sm:text-sm text-primary-600">Layanan Umum</p>
                        <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">Publikasi statistik terbitan BPS dari berbagai kategori: kependudukan, sosial, ekonomi, dan pertanian.</p>
                        <a href="https://pst.bps.go.id/layanan/perpustakaan" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                            Cari Pustaka
                            <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Produk Berbayar -->
                    <div class="relative p-6 transition-all duration-500 transform bg-white shadow-xl rounded-3xl hover:shadow-2xl sm:p-8 group hover:-translate-y-2">
                        <div class="absolute top-4 sm:top-6 right-4 sm:right-6">
                            <span class="px-3 py-1 text-xs font-bold text-red-800 bg-red-100 rounded-full sm:px-4 sm:py-2">BERBAYAR</span>
                        </div>
                        <div class="flex items-center justify-center w-16 h-16 mb-6 transition-transform duration-300 shadow-lg sm:w-18 sm:h-18 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl sm:mb-8 group-hover:scale-110">
                            <svg class="w-8 h-8 text-white sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 sm:text-2xl">Produk Statistik</h3>
                        <p class="mb-4 text-xs font-semibold tracking-wide uppercase sm:text-sm text-primary-600">Layanan Umum</p>
                        <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">Layanan penjualan data mikro, publikasi elektronik, dan peta digital wilayah statistik.</p>
                        <a href="https://pst.bps.go.id/layanan/pembelian" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                            Beli Data & Publikasi
                            <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Konsultasi -->
                    <div class="relative p-6 transition-all duration-500 transform bg-white shadow-xl rounded-3xl hover:shadow-2xl sm:p-8 group hover:-translate-y-2">
                        <div class="absolute top-4 sm:top-6 right-4 sm:right-6">
                            <span class="px-3 py-1 text-xs font-bold rounded-full bg-accent-100 text-accent-800 sm:px-4 sm:py-2">UNGGULAN</span>
                        </div>
                        <div class="flex items-center justify-center w-16 h-16 mb-6 transition-transform duration-300 shadow-lg sm:w-18 sm:h-18 bg-gradient-to-br from-accent-500 to-accent-600 rounded-2xl sm:mb-8 group-hover:scale-110">
                            <svg class="w-8 h-8 text-white sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 sm:text-2xl">Konsultasi</h3>
                        <p class="mb-4 text-xs font-semibold tracking-wide uppercase sm:text-sm text-primary-600">Layanan Umum</p>
                        <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">Konsultasi terkait data, metadata, klasifikasi, dan produk statistik BPS lainnya.</p>
                        <a href="{{ route('konsultasi.show') }}" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                            Ajukan Konsultasi
                            <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        {{-- <a href="{{ route('konsultasi.show') }}" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-accent-600 hover:text-accent-700 group-hover:translate-x-1 sm:text-base">
                            Ajukan Konsultasi
                            <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a> --}}
                    </div>

                    <!-- Rekomendasi -->
                    <div class="relative p-6 transition-all duration-500 transform bg-white shadow-xl rounded-3xl hover:shadow-2xl sm:p-8 group hover:-translate-y-2">
                        <div class="absolute top-4 sm:top-6 right-4 sm:right-6">
                            <span class="px-3 py-1 text-xs font-bold text-green-800 bg-green-100 rounded-full sm:px-4 sm:py-2">GRATIS</span>
                        </div>
                        <div class="flex items-center justify-center w-16 h-16 mb-6 transition-transform duration-300 shadow-lg sm:w-18 sm:h-18 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl sm:mb-8 group-hover:scale-110">
                            <svg class="w-8 h-8 text-white sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 sm:text-2xl">Rekomendasi</h3>
                        <p class="mb-4 text-xs font-semibold tracking-wide uppercase sm:text-sm text-primary-600">Layanan Instansi</p>
                        <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">Layanan bagi instansi pemerintah untuk survei dan rekomendasi kegiatan statistik.</p>
                        <a href="https://pst.bps.go.id/layanan/romantik" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                            Minta Rekomendasi
                            <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Layanan Pendukung -->
        <section class="py-12 bg-white sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6">
                <div class="mb-12 text-center sm:mb-16 lg:mb-20">
                    <h2 class="mb-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl xl:text-6xl sm:mb-6">Layanan Pendukung</h2>
                    <div class="w-16 h-1 mx-auto mb-4 rounded-full sm:w-24 bg-primary-500 sm:mb-6"></div>
                    <p class="max-w-3xl px-4 mx-auto text-lg leading-relaxed text-gray-600 sm:text-xl">Layanan tambahan untuk mendukung kebutuhan data dan teknologi</p>
                </div>
                
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 sm:gap-10">
                    <!-- Enhanced supporting service cards -->
                    <!-- WebAPI -->
                    <div class="p-6 transition-all duration-500 transform bg-white border border-gray-100 shadow-xl rounded-3xl hover:shadow-2xl sm:p-10 group hover:-translate-y-2">
                        <div class="flex items-center justify-between mb-6 sm:mb-8">
                            <div class="flex items-center justify-center w-16 h-16 transition-transform duration-300 shadow-lg sm:w-18 sm:h-18 bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl group-hover:scale-110">
                                <svg class="w-8 h-8 text-white sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <span class="px-3 py-1 text-xs font-bold text-green-800 bg-green-100 rounded-full sm:px-4 sm:py-2">GRATIS</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 sm:text-2xl">WebAPI</h3>
                        <p class="mb-4 text-xs font-semibold tracking-wide uppercase sm:text-sm text-primary-600">Layanan Developer</p>
                        <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">API data statistik BPS untuk integrasi dengan aplikasi dan sistem lain.</p>
                        <a href="https://webapi.bps.go.id/developer" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                            Kunjungi WebAPI
                            <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>

                    <!-- StatInaLab -->
                    <div class="p-6 transition-all duration-500 transform bg-white border border-gray-100 shadow-xl rounded-3xl hover:shadow-2xl sm:p-10 group hover:-translate-y-2">
                        <div class="flex items-center justify-between mb-6 sm:mb-8">
                            <div class="flex items-center justify-center w-16 h-16 transition-transform duration-300 shadow-lg sm:w-18 sm:h-18 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl group-hover:scale-110">
                                <svg class="w-8 h-8 text-white sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg>
                            </div>
                            <span class="px-3 py-1 text-xs font-bold text-blue-800 bg-blue-100 rounded-full sm:px-4 sm:py-2">INTERNAL</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 sm:text-2xl">StatInaLab</h3>
                        <p class="mb-4 text-xs font-semibold tracking-wide uppercase sm:text-sm text-primary-600">Layanan Internal BPS</p>
                        <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">Statistics Indonesia Data Lab untuk pengalaman real time pemrosesan data mikro.</p>
                        <a href="https://statinalab.bps.go.id/" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                            Kunjungi StatInaLab
                            <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>

                    <!-- Transdata -->
                    <div class="p-6 transition-all duration-500 transform bg-white border border-gray-100 shadow-xl rounded-3xl hover:shadow-2xl sm:p-10 group hover:-translate-y-2 md:col-span-2 lg:col-span-1">
                        <div class="flex items-center justify-between mb-6 sm:mb-8">
                            <div class="flex items-center justify-center w-16 h-16 transition-transform duration-300 shadow-lg sm:w-18 sm:h-18 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl group-hover:scale-110">
                                <svg class="w-8 h-8 text-white sm:w-10 sm:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span class="px-3 py-1 text-xs font-bold text-purple-800 bg-purple-100 rounded-full sm:px-4 sm:py-2">INSTANSI</span>
                        </div>
                        <h3 class="mb-3 text-xl font-bold text-gray-900 sm:text-2xl">Transdata</h3>
                        <p class="mb-4 text-xs font-semibold tracking-wide uppercase sm:text-sm text-primary-600">Layanan Instansi</p>
                        <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">Sistem pertukaran data antara BPS dan Kementerian/Lembaga dengan kerja sama.</p>
                        <a href="https://pst.bps.go.id/layanan/transdata" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                            Kunjungi Transdata
                            <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Artikel Terbaru -->
        <section class="py-12 sm:py-16 lg:py-24 bg-gradient-to-br from-gray-50 to-gray-100">
            <div class="px-4 mx-auto max-w-7xl sm:px-6">
                <div class="mb-12 text-center sm:mb-16 lg:mb-20">
                    <h2 class="mb-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl xl:text-6xl sm:mb-6">Artikel Terbaru</h2>
                    <div class="w-16 h-1 mx-auto mb-4 rounded-full sm:w-24 bg-primary-500 sm:mb-6"></div>
                    <p class="max-w-3xl px-4 mx-auto text-lg leading-relaxed text-gray-600 sm:text-xl">Informasi dan tips terkini seputar layanan statistik</p>
                </div>
                
                <div class="grid max-w-6xl grid-cols-1 gap-6 mx-auto md:grid-cols-2 lg:grid-cols-3 sm:gap-10">
                    <!-- Enhanced article cards with better gradients and hover effects -->
                    <article class="overflow-hidden transition-all duration-500 transform bg-white shadow-xl rounded-3xl hover:shadow-2xl group hover:-translate-y-2">
                        <div class="relative h-48 overflow-hidden sm:h-56 bg-gradient-to-br from-primary-400 via-primary-500 to-primary-600">
                            <div class="absolute inset-0 transition-colors duration-300 bg-black/20 group-hover:bg-black/10"></div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 bg-white/20 backdrop-blur-sm rounded-xl">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 sm:p-8">
                            <h3 class="mb-3 text-lg font-bold leading-tight text-gray-900 transition-colors duration-300 sm:text-xl lg:text-2xl sm:mb-4 group-hover:text-primary-600">Tips Memahami Data Statistik dengan Mudah</h3>
                            <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">Pelajari cara cepat memahami data statistik untuk kebutuhan riset dan bisnis Anda.</p>
                            <a href="#" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                                Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                    
                    <article class="overflow-hidden transition-all duration-500 transform bg-white shadow-xl rounded-3xl hover:shadow-2xl group hover:-translate-y-2">
                        <div class="relative h-48 overflow-hidden sm:h-56 bg-gradient-to-br from-green-400 via-green-500 to-green-600">
                            <div class="absolute inset-0 transition-colors duration-300 bg-black/20 group-hover:bg-black/10"></div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 bg-white/20 backdrop-blur-sm rounded-xl">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 sm:p-8">
                            <h3 class="mb-3 text-lg font-bold leading-tight text-gray-900 transition-colors duration-300 sm:text-xl lg:text-2xl sm:mb-4 group-hover:text-primary-600">Panduan Ajukan Konsultasi di SPINTAR</h3>
                            <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">Langkah-langkah mudah mengajukan janji temu konsultasi melalui platform kami.</p>
                            <a href="#" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                                Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                    
                    <article class="overflow-hidden transition-all duration-500 transform bg-white shadow-xl rounded-3xl hover:shadow-2xl group hover:-translate-y-2 md:col-span-2 lg:col-span-1">
                        <div class="relative h-48 overflow-hidden sm:h-56 bg-gradient-to-br from-purple-400 via-purple-500 to-purple-600">
                            <div class="absolute inset-0 transition-colors duration-300 bg-black/20 group-hover:bg-black/10"></div>
                            <div class="absolute bottom-4 left-4 right-4">
                                <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 bg-white/20 backdrop-blur-sm rounded-xl">
                                    <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 sm:p-8">
                            <h3 class="mb-3 text-lg font-bold leading-tight text-gray-900 transition-colors duration-300 sm:text-xl lg:text-2xl sm:mb-4 group-hover:text-primary-600">Keamanan Data dalam Layanan SPINTAR</h3>
                            <p class="mb-6 text-sm leading-relaxed text-gray-600 sm:mb-8 sm:text-base">Cara kami menjaga privasi dan keamanan data pengguna selama proses konsultasi.</p>
                            <a href="#" class="inline-flex items-center text-sm font-bold transition-colors duration-300 text-primary-600 hover:text-primary-700 group-hover:translate-x-1 sm:text-base">
                                Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section id="konsultasi" class="relative py-12 overflow-hidden text-white sm:py-16 lg:py-24 bg-gradient-to-r from-primary-900 via-primary-800 to-primary-700">
            <!-- Enhanced CTA section with better background and spacing -->
            <div class="absolute inset-0 bg-gradient-to-br from-black/20 to-black/40"></div>
            <div class="relative z-10 max-w-5xl px-4 mx-auto text-center sm:px-6">
                <h2 class="mb-6 text-3xl font-bold tracking-tight sm:text-4xl lg:text-5xl xl:text-6xl sm:mb-8">Siap untuk Konsultasi?</h2>
                <div class="w-16 h-1 mx-auto mb-6 rounded-full sm:w-24 bg-accent-500 sm:mb-8"></div>
                <p class="max-w-3xl px-4 mx-auto mb-8 text-lg font-light leading-relaxed text-gray-100 sm:text-xl lg:text-2xl sm:mb-12">Dapatkan wawasan statistik profesional untuk mendukung keputusan bisnis dan penelitian Anda</p>
                <div class="flex flex-col justify-center gap-4 sm:flex-row sm:gap-6">
                    <a href="{{ route('konsultasi.show') }}"
                       class="inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 transform shadow-2xl group sm:px-12 sm:py-5 bg-accent-500 hover:bg-accent-400 rounded-2xl hover:shadow-accent-500/25 sm:text-xl hover:scale-105">
                        <svg class="w-5 h-5 mr-2 transition-transform duration-300 sm:w-6 sm:h-6 sm:mr-3 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                        Ajukan Konsultasi Sekarang
                    </a>
                    <a href="#prosedur"
                       class="inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-300 border-2 sm:px-12 sm:py-5 border-white/80 rounded-2xl hover:bg-white hover:text-primary-900 sm:text-xl backdrop-blur-sm">
                        Pelajari Prosedur
                    </a>
                </div>
            </div>
        </section>
@endsection