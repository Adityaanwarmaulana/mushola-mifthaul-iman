<footer class="bg-green-900 text-gray-200 mt-20">

    <div class="max-w-7xl mx-auto px-6 py-14 grid grid-cols-1 md:grid-cols-4 gap-10">

        {{-- BRAND --}}
        <div>
            <h3 class="text-xl font-semibold text-white mb-3">
                Mushola Miftahul Iman
            </h3>

            <p class="text-sm leading-relaxed text-gray-300">
                Pusat ibadah dan kegiatan keislaman masyarakat sekitar
                yang mengedepankan ukhuwah, dakwah, dan keberkahan.
            </p>
        </div>

        {{-- MENU --}}
        <div>
            <h4 class="text-sm font-semibold text-white mb-4 uppercase tracking-wide">
                Menu
            </h4>

            <ul class="space-y-3 text-sm">
                <li><a href="/" class="hover:text-white transition">Beranda</a></li>
                <li><a href="/berita" class="hover:text-white transition">Berita</a></li>
                <li><a href="/jadwal-sholat" class="hover:text-white transition">Jadwal Sholat</a></li>
                <li><a href="/galeri" class="hover:text-white transition">Galeri</a></li>
                <li><a href="/donasi" class="hover:text-white transition">Donasi</a></li>
                <li><a href="/kontak" class="hover:text-white transition">Kontak</a></li>
            </ul>
        </div>

        {{-- KONTAK --}}
        <div>
            <h4 class="text-sm font-semibold text-white mb-4 uppercase tracking-wide">
                Kontak
            </h4>

            <ul class="space-y-3 text-sm text-gray-300">
                <li>
                    📍 Jl. Contoh Alamat Mushola, Indonesia
                </li>
                <li>
                    📞 <a href="tel:+6281234567890" class="hover:text-white transition">
                        0812-3456-7890
                    </a>
                </li>
                <li>
                    💬 <a href="https://wa.me/6281234567890" target="_blank"
                        class="hover:text-white transition">
                        WhatsApp Admin
                    </a>
                </li>
                <li>
                    ✉️ <a href="mailto:info@miftahuliman.or.id" class="hover:text-white transition">
                        info@miftahuliman.or.id
                    </a>
                </li>
            </ul>
        </div>

        {{-- JAM OPERASIONAL --}}
        <div>
            <h4 class="text-sm font-semibold text-white mb-4 uppercase tracking-wide">
                Jam Operasional
            </h4>

            <ul class="space-y-3 text-sm text-gray-300">
                <li>🕋 Setiap Hari</li>
                <li>🕒 04.00 – 22.00 WIB</li>
                <li>📖 Kajian: Jumat Malam</li>
            </ul>
        </div>

    </div>

    {{-- COPYRIGHT --}}
    <div class="border-t border-green-800 text-center py-5 text-xs text-gray-400">
        © {{ date('Y') }} Mushola Miftahul Iman.
        <span class="block sm:inline">
            Dibangun dengan niat ibadah.
        </span>
    </div>

</footer>