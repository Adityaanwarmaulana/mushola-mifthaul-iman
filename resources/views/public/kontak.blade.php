@extends('layouts.app')
@section('title', 'Kontak')

@section('content')

{{-- HEADER --}}
<section class="bg-green-700 text-white py-16 text-center px-4">
    <h1 class="text-4xl font-bold mb-3">
        Kontak Mushola
    </h1>
    <p class="text-green-100 max-w-xl mx-auto">
        Hubungi kami atau kunjungi langsung Mushola Miftahul Iman
    </p>
</section>

{{-- CONTENT --}}
<section class="max-w-7xl mx-auto px-4 py-16">

    <div class="grid md:grid-cols-2 gap-12 items-start">

        {{-- INFO KONTAK --}}
        <div class="space-y-6">

            <div>
                <h2 class="text-2xl font-bold mb-4">
                    Informasi Kontak
                </h2>

                <ul class="space-y-4 text-gray-700 text-sm">
                    <li>
                        <strong>Alamat</strong><br>
                        Jl. Contoh Alamat Mushola, Indonesia
                    </li>

                    <li>
                        <strong>Telepon</strong><br>
                        <a href="tel:+6281234567890" class="text-green-700 hover:underline">
                            0812-3456-7890
                        </a>
                    </li>

                    <li>
                        <strong>WhatsApp</strong><br>
                        <a href="https://wa.me/6281234567890" target="_blank"
                            class="text-green-700 hover:underline">
                            Chat WhatsApp Admin
                        </a>
                    </li>

                    <li>
                        <strong>Email</strong><br>
                        <a href="mailto:info@miftahuliman.or.id"
                            class="text-green-700 hover:underline">
                            info@miftahuliman.or.id
                        </a>
                    </li>

                    <li>
                        <strong>Jam Operasional</strong><br>
                        Setiap hari, 04.00 – 22.00 WIB
                    </li>
                </ul>
            </div>

        </div>

        {{-- MAPS --}}
        <div class="w-full h-[420px] rounded-xl overflow-hidden shadow-lg border">
            <iframe
                src="https://www.google.com/maps?q=Masjid&output=embed"
                class="w-full h-full border-0"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>

</section>

@endsection