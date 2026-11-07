<section id="projects" class="space-y-20 bg-sky px-5 py-16 md:space-y-28 md:py-24">

    {{-- Project 1: Website Profile Laboratorium Data Technologies --}}
    <div class="reveal relative mx-auto grid max-w-6xl items-center gap-14 lg:grid-cols-2">
        <div class="relative mx-auto w-full max-w-md lg:max-w-lg">
            <button type="button" data-lightbox="{{ asset('img/lab-poster.png') }}" data-caption="Website Profile Laboratorium Data Technologies"
                    class="block w-[60%]">
                <img src="{{ asset('img/lab-poster.png') }}" alt="Poster Website Lab Data Technologies" loading="lazy"
                     class="aspect-[3/4] w-full cursor-zoom-in rounded-3xl object-cover shadow-[0_18px_45px_rgba(95,156,198,0.35)] transition duration-300 hover:scale-[1.02]">
            </button>
            <button type="button" data-lightbox="{{ asset('img/lab-team.jpg') }}" data-caption="Tim pengembangan Website Lab Data Technologies"
                    class="absolute right-0 top-[19%] w-[41%]">
                <img src="{{ asset('img/lab-team.jpg') }}" alt="Foto tim proyek di Jurusan Teknologi Informasi" loading="lazy"
                     class="aspect-[3/4] w-full cursor-zoom-in rounded-3xl object-cover shadow-[0_18px_45px_rgba(95,156,198,0.35)] transition duration-300 hover:scale-[1.02]">
            </button>
        </div>

        <div class="relative">
            <div class="flex items-center gap-4">
                <h2 class="text-solid text-[clamp(2.6rem,8vw,6.2rem)]">DEVELOPMENT<br>PROJECT</h2>
                <div class="dot-cluster dot-cluster--white hidden shrink-0 md:flex"><span></span><span></span><span></span><span></span></div>
            </div>
            <div class="pill-card mt-6 px-8 py-5 text-center">
                <p class="text-base font-bold text-azure md:text-lg">WEBSITE PROFILE LABORATORIUM DATA TECHNOLOGIES</p>
            </div>
            <p class="mt-5 text-justify text-[15px] leading-relaxed text-ink md:text-base">
                Mengembangkan website profil Laboratorium Data Technologies dengan integrasi Content
                Management System (CMS) untuk memudahkan pengelolaan informasi laboratorium secara dinamis.
                Berperan sebagai System Analyst &amp; Developer dengan melakukan analisis kebutuhan sistem,
                penyusunan dokumen SRS dan diagram UML, perancangan basis data PostgreSQL, serta
                pengembangan dan integrasi website menggunakan PHP Native, HTML, CSS, Bootstrap, dan
                JavaScript.
            </p>
            <div class="mt-7 grid grid-cols-2 gap-4">
                @foreach (['PHP NATIVE', 'HTML CSS', 'POSTGRESQL', 'BOOTSTRAP', 'JAVASCRIPT'] as $i => $tech)
                    <span class="tech-pill text-sm {{ $i === 4 ? 'col-span-2 mx-auto w-fit' : '' }}">{{ $tech }}</span>
                @endforeach
            </div>
            <span class="pointer-events-none absolute -bottom-16 right-0 hidden md:block">
                <svg viewBox="0 0 24 24" width="64" height="64" fill="none" stroke="rgba(255,255,255,0.85)" stroke-width="3" stroke-linecap="round"><path d="M12 3v18M4.4 7.5l15.2 9M19.6 7.5L4.4 16.5"/></svg>
            </span>
        </div>
    </div>

    {{-- Project 2: Artha — Smart Financial Tracker --}}
    <div class="reveal relative mx-auto grid max-w-6xl items-center gap-14 lg:grid-cols-2">
        <div class="relative order-2 lg:order-1">
            <div class="flex items-center gap-4">
                <h2 class="text-solid text-[clamp(2.6rem,8vw,6.2rem)]">DEVELOPMENT<br>PROJECT</h2>
                <div class="dot-cluster dot-cluster--white hidden shrink-0 md:flex"><span></span><span></span><span></span><span></span></div>
            </div>
            <div class="pill-card mt-6 px-8 py-5 text-center">
                <p class="text-base font-bold text-azure md:text-lg">SMART FINANCIAL TRACKER: ANALISIS POLA BELANJA DAN PREDIKSI KEHABISAN UANG BERBASIS MOBILE</p>
            </div>
            <p class="mt-5 text-justify text-[15px] leading-relaxed text-ink md:text-base">
                Mengembangkan aplikasi mobile Smart Financial Tracker (ARTHA) untuk membantu pengguna
                mengelola keuangan pribadi melalui pencatatan transaksi, pengelolaan dompet, saving goals,
                serta analisis pola pemasukan dan pengeluaran. Berperan sebagai Quality Assurance, System
                Analyst &amp; Developer dengan bertanggung jawab dalam pengembangan fitur Pattern Recognition
                dan halaman Settings, penyusunan dokumentasi serta skenario pengujian, dan pelaksanaan User
                Acceptance Testing (UAT) serta evaluasi usability menggunakan System Usability Scale (SUS).
                Aplikasi dikembangkan menggunakan Flutter dan Dart.
            </p>
            <div class="mt-7 grid grid-cols-2 gap-4">
                @foreach (['FLUTTER', 'DART', 'SUPABASE, POSTGRESQL', 'GOOGLE ML KIT', 'MIDTRANS'] as $i => $tech)
                    <span class="tech-pill text-sm {{ $i === 4 ? 'col-span-2 mx-auto w-fit' : '' }}">{{ $tech }}</span>
                @endforeach
            </div>
            <span class="pointer-events-none absolute -bottom-16 left-0 hidden md:block">
                <svg viewBox="0 0 24 24" width="64" height="64" fill="none" stroke="rgba(255,255,255,0.85)" stroke-width="3" stroke-linecap="round"><path d="M12 3v18M4.4 7.5l15.2 9M19.6 7.5L4.4 16.5"/></svg>
            </span>
        </div>

        <div class="relative order-1 mx-auto w-full max-w-md lg:order-2 lg:max-w-lg">
            <button type="button" data-lightbox="{{ asset('img/artha-poster.png') }}" data-caption="Artha — Asisten keuangan pribadi"
                    class="ml-auto block w-[60%]">
                <img src="{{ asset('img/artha-poster.png') }}" alt="Poster aplikasi Artha" loading="lazy"
                     class="aspect-[3/4] w-full cursor-zoom-in rounded-3xl object-cover shadow-[0_18px_45px_rgba(95,156,198,0.35)] transition duration-300 hover:scale-[1.02]">
            </button>
            <button type="button" data-lightbox="{{ asset('img/artha-team.jpg') }}" data-caption="Tim pengembangan aplikasi Artha"
                    class="absolute left-0 top-[18%] w-[41%]">
                <img src="{{ asset('img/artha-team.jpg') }}" alt="Foto tim proyek Artha" loading="lazy"
                     class="aspect-[2/3] w-full cursor-zoom-in rounded-3xl object-cover shadow-[0_18px_45px_rgba(95,156,198,0.35)] transition duration-300 hover:scale-[1.02]">
            </button>
        </div>
    </div>

    {{-- Project 3: CampusLink --}}
    <div class="reveal relative mx-auto grid max-w-6xl items-center gap-14 lg:grid-cols-2">
        <div class="mx-auto flex w-full max-w-md flex-col gap-5 lg:max-w-lg">
            <button type="button" data-lightbox="{{ asset('img/campuslink-1.png') }}" data-caption="CampusLink — Beranda"
                    class="block w-full">
                <img src="{{ asset('img/campuslink-1.png') }}" alt="Screenshot beranda CampusLink" loading="lazy"
                     class="w-full cursor-zoom-in rounded-2xl object-cover shadow-[0_14px_35px_rgba(95,156,198,0.3)] transition duration-300 hover:scale-[1.02]">
            </button>
            <button type="button" data-lightbox="{{ asset('img/campuslink-2.png') }}" data-caption="CampusLink — Peluang terbaru"
                    class="block w-full">
                <img src="{{ asset('img/campuslink-2.png') }}" alt="Screenshot peluang terbaru CampusLink" loading="lazy"
                     class="w-full cursor-zoom-in rounded-2xl object-cover shadow-[0_14px_35px_rgba(95,156,198,0.3)] transition duration-300 hover:scale-[1.02]">
            </button>
        </div>

        <div class="relative">
            <div class="flex items-center gap-4">
                <h2 class="text-solid text-[clamp(2.6rem,8vw,6.2rem)]">DEVELOPMENT<br>PROJECT</h2>
                <div class="dot-cluster dot-cluster--white hidden shrink-0 md:flex"><span></span><span></span><span></span><span></span></div>
            </div>
            <div class="pill-card mt-6 px-8 py-5 text-center">
                <p class="text-base font-bold text-azure md:text-lg">CAMPUSLINK &mdash; PLATFORM INFORMASI MAGANG, LOMBA, DAN BEASISWA</p>
            </div>
            <p class="mt-5 text-justify text-[15px] leading-relaxed text-ink md:text-base">
                Mengembangkan CampusLink, sebuah platform informasi magang, lomba, dan beasiswa yang
                dilengkapi direktori mahasiswa dan dosen berdasarkan keahlian. Berperan sebagai Quality
                Assurance (QA) &amp; Developer dengan mengoordinasikan pengujian sistem melalui manual
                testing dan automated testing menggunakan Cypress, menyusun test case, mengidentifikasi
                serta mendokumentasikan bug, dan melakukan unit serta integration testing menggunakan
                PHPUnit untuk memastikan kualitas dan fungsionalitas sistem.
            </p>
            <div class="mt-7 grid grid-cols-2 gap-4">
                @foreach (['LARAVEL', 'PHP', 'BLADE', 'TAILWIND CSS', 'CYPRESS', 'PHPUNIT'] as $tech)
                    <span class="tech-pill text-sm">{{ $tech }}</span>
                @endforeach
            </div>
            <span class="pointer-events-none absolute -bottom-16 right-0 hidden md:block">
                <svg viewBox="0 0 24 24" width="64" height="64" fill="none" stroke="rgba(255,255,255,0.85)" stroke-width="3" stroke-linecap="round"><path d="M12 3v18M4.4 7.5l15.2 9M19.6 7.5L4.4 16.5"/></svg>
            </span>
        </div>
    </div>
</section>
