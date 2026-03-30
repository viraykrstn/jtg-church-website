<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $churchData['name'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black font-sans antialiased">

 <nav class="border-b border-black px-6 py-4 flex justify-between items-center sticky top-0 bg-white z-50">
    <div class="flex items-center gap-4">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.jpg') }}" 
                 alt="JTG Church Global Manila Logo" 
                 class="h-12 w-auto object-contain transition hover:opacity-70"
            >
        </a>
        
        <div class="hidden sm:block text-sm font-black tracking-tighter uppercase leading-tight">
            JTG Church Global Manila
        </div>
    </div>

    <div class="hidden md:flex space-x-10 text-xs font-bold uppercase tracking-widest">
        <a href="#about" class="hover:opacity-50 transition">About</a>
        <a href="#schedule" class="hover:opacity-50 transition">Schedule</a>
        <a href="#" class="hover:opacity-50 transition">Sermons</a>
        <a href="#" class="border border-black px-4 py-2 bg-black text-white hover:bg-white hover:text-black transition">Give</a>
    </div>
</nav>

    <header class="relative h-[80vh] flex items-center border-b border-black overflow-hidden bg-black">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero-bg.png') }}" 
             alt="JTG Church Background" 
             class="w-full h-full object-cover grayscale opacity-60">
            <div class="absolute inset-0 bg-linear-to-t from-black/80 to-transparent"></div>
        </div>

            <div class="relative z-10 max-w-4xl mx-auto px-6 w-full text-white">
                <h1 class="text-7xl md:text-9xl font-black uppercase leading-none tracking-tighter mb-8">
                    JTG <br> GLOBAL</span>
                </h1>
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-6">
            <p class="text-xl max-w-md italic">
               "Where Christ is REAL, Disciples are MADE." <br> 
                Join our community in the heart of Manila.
            </p>
            <a href="{{ route('welcome.home') }}" class="text-sm font-bold uppercase border-b-2 border-white pb-1 hover:opacity-50 transition">
                Join us this Sunday →
            </a>
            </div>
        </div>
    </header>

<style>
    /* This creates that modern "hollow" text look for 'GLOBAL' */
    .outline-text {
        -webkit-text-stroke: 1px white;
        color: transparent;
    }
</style>

    <section id="schedule" class="py-24 px-6 border-b border-black bg-black text-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-xs font-bold uppercase tracking-[0.3em] mb-12 opacity-60">Service Schedule</h2>
            <div class="space-y-12">
                @foreach($churchData['schedule'] as $service => $time)
                    <div class="flex justify-between items-baseline border-b border-zinc-800 pb-4">
                        <h3 class="text-3xl md:text-4xl font-bold uppercase">{{ $service }}</h3>
                        <span class="text-lg font-mono">{{ $time }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="about" class="py-24 px-6">
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-16">
            <div>
                <h2 class="text-3xl font-bold uppercase mb-4">Our Heart</h2>
                <p class="leading-relaxed text-zinc-600">
                    We are a global community rooted in Manila, dedicated to sharing the message of hope. At JTG Church, ywe are not just a church but we are FAMILY! and you can be part of the family.
                </p>
            </div>
            <div class="bg-zinc-100 p-8 flex flex-col justify-center border border-black">
                <h2 class="text-xs font-bold uppercase tracking-widest mb-2">Location</h2>
                <p class="text-xl font-bold">{{ $churchData['location'] }}</p>  
                <a href="https://www.google.com/maps/dir//JTG+Church+Global+Manila,+1008+Lope+De+Vega+St,+Corner+Rizal+Ave,+Santa+Cruz,+Manila,+1003+Metro+Manila/@14.6210816,120.9925632,7951m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x3397ca013563de8b:0xae0ac353f39b4d5d!2m2!1d120.9820104!2d14.6066584?entry=ttu&g_ep=EgoyMDI2MDMyNC4wIKXMDSoASAFQAw%3D%3D" 
                target="_blank" 
                class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-sm font-bold uppercase tracking-widest rounded-md shadow-sm text-white bg-red-600 hover:bg-red-700 transition h-full min-h-[52px]">
                    Get Directions
                </a>
            </div>
        </div>
    </section>

    <section id="leadership" class="py-24 px-6 border-t border-black bg-black">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
            <h2 class="text-5xl text-white font-black uppercase tracking-tighter leading-none">
                Meet the <br> <span class="opacity-60">Pastors & Leadership</span>
            </h2>
            <p class="text-xs text-white font-bold uppercase tracking-widest border-l-2 border-black pl-4">
                Guided by Faith. <br> Serving the Lord.
            </p>
        </div>

    <div class="mt-24 mb-20 px-6 max-w-7xl mx-auto">
    <div class="flex justify-between items-end mb-8">
        <div class="hidden md:block text-zinc-500 text-xs uppercase tracking-widest">
            Swipe to view &rarr;
        </div>
    </div>

    <div class="flex overflow-x-auto gap-6 pb-8 snap-x no-scrollbar" id="pastor-slider">
        
        <div class="min-w-[280px] md:min-w-[320px] snap-center bg-zinc-900 border border-zinc-800 p-6 group transition duration-500 hover:border-white">
            
            <div class="relative aspect-[3/4] bg-zinc-800 mb-6 overflow-hidden">
                <img src="https://scontent.fmnl25-5.fna.fbcdn.net/v/t39.30808-6/616269523_122284587974234591_6379079519274362507_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeEmeAQbjwf_HWakfwQOpfZlOBbr47RvEqo4FuvjtG8SqtExK7ckqiutmtS14PyL9r-o9fjw3xm7RpdqUNXhHAvV&_nc_ohc=x23659TbMcEQ7kNvwGgXO9B&_nc_oc=AdqSfWV-ElF4pxFA2NsuAHPJ6gU8DH_tQ3_7u-AwBEe84DXtWftxxfVYwbaUJDhX4zs&_nc_zt=23&_nc_ht=scontent.fmnl25-5.fna&_nc_gid=Rs4-LyLKX_QnLFNWApGmeQ&_nc_ss=7a3a8&oh=00_AfyRKeeonIJ7g00SOBZTflkzxkbFzQtCfXGv-qCoDLHZ1g&oe=69D0621F" alt="Lead Pastor" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700">
                
                <a href="https://www.facebook.com/blenn.ramos" target="_blank" 
                   class="absolute top-4 right-4 z-10 p-2.5 bg-white text-black rounded-full shadow-xl hover:bg-[#1877F2] hover:text-white transition duration-300 transform group-hover:scale-110">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            </div>
            
            <h3 class="text-xl text-white font-black uppercase tracking-tight">Senior Pastor</h3>
            <h3 class="text-md text-white font-black uppercase tracking-tight">Overall Spiritual Director</h3>
            <p class="text-white text-sm uppercase tracking-widest leading-relaxed">Bishop Blenn</p>
        </div>

        <div class="min-w-[280px] md:min-w-[320px] snap-center bg-zinc-900 border border-zinc-800 p-6 group transition duration-500 hover:border-white">
            
            <div class="relative aspect-[3/4] bg-zinc-800 mb-6 overflow-hidden">
                <img src="https://scontent.fmnl25-1.fna.fbcdn.net/v/t39.30808-6/616230221_122284587938234591_8010654221025876160_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeG9CGa2gxeeIwBMENzPCtr7VfXLNa3NezZV9cs1rc17Nru-zPGZouHkN9poiugzK_vZKdhzWWxzCKrBBIMhLt2g&_nc_ohc=QgXQFCAGxuoQ7kNvwGya6QC&_nc_oc=AdpwvaIel0qbCz3lIGzUmawTq8DElgkCMaQYxP1gK4Q4DDbn-EauHEY_3vGLW1s5RqY&_nc_zt=23&_nc_ht=scontent.fmnl25-1.fna&_nc_gid=KqdvvmwckZawd9HOiwvZgA&_nc_ss=7a3a8&oh=00_AfwaP72Mm-zcW6BbvRnyDepQLc3p1NepdPGnKLKxZEgqtA&oe=69D032CC" alt="Pastor Name" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700">
                
                <a href="https://www.facebook.com/marienelleanne.bernaberamos" target="_blank" 
                   class="absolute top-4 right-4 z-10 p-2.5 bg-white text-black rounded-full shadow-xl hover:bg-[#1877F2] hover:text-white transition duration-300 transform group-hover:scale-110">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            </div>
            
            <h3 class="text-xl text-white font-black uppercase tracking-tight">Senior Pastor</h3>
            <p class="text-white text-sm uppercase tracking-widest leading-relaxed">Pastora Marienelle Ramos</p>
        </div>

        <div class="min-w-[280px] md:min-w-[320px] snap-center bg-zinc-900 border border-zinc-800 p-6 group transition duration-500 hover:border-white">
            
            <div class="relative aspect-[3/4] bg-zinc-800 mb-6 overflow-hidden">
                <img src="https://scontent.fmnl25-3.fna.fbcdn.net/v/t39.30808-6/615205649_122284586924234591_6329358317086223282_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeF8vYAAaG8Vx8DXKqxuBzw8WUpQQkRfJPlZSlBCRF8k-Rb4TFDYdVqg27H31xgxSxFYeEgJ7QVU-j2MpXSzXnEo&_nc_ohc=vyUsTa8_OIIQ7kNvwG_2snZ&_nc_oc=AdqMcZt79T1TR25cuMUzJwq78Th5KAJ5EcLLn8qgIk-jIrT8J4GQcRmNBSqe7zTKXGs&_nc_zt=23&_nc_ht=scontent.fmnl25-3.fna&_nc_gid=cC7VMC0pD2lW6QmmhHWPVA&_nc_ss=7a3a8&oh=00_AfzIRcnwPwbXh6PTEFJyd-d8zKAiXGMKBNixxxRrZw79ew&oe=69D0427B" alt="Pastor Name" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700">
                
                <a href="https://www.facebook.com/mark.benin929" target="_blank" 
                   class="absolute top-4 right-4 z-10 p-2.5 bg-white text-black rounded-full shadow-xl hover:bg-[#1877F2] hover:text-white transition duration-300 transform group-hover:scale-110">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            </div>
            
            <h3 class="text-xl text-white font-black uppercase tracking-tight">Lead Pastor</h3>
            <p class="text-white text-sm uppercase tracking-widest leading-relaxed">Pastor Mark Benin</p>
        </div>

        <div class="min-w-[280px] md:min-w-[320px] snap-center bg-zinc-900 border border-zinc-800 p-6 group transition duration-500 hover:border-white">
            
            <div class="relative aspect-[3/4] bg-zinc-800 mb-6 overflow-hidden">
                <img src="https://scontent.fmnl25-3.fna.fbcdn.net/v/t39.30808-6/626823212_122288655602234591_3874764050283469544_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeHYeQWmuJclupWgeefVaH6zKO1EeelK4Mco7UR56Urgx8VgA1uSrEdUQs2aWXSIRSb_mjL7hTx1dqFA0S-HKvvg&_nc_ohc=w1V2J1ls-iwQ7kNvwFNoZ7Y&_nc_oc=Adp1_CnTc0zjxithv4xKND5_DnxVcXsPd-vKkYexlIfmq_dSBQQ7JYo_mFI434zUgng&_nc_zt=23&_nc_ht=scontent.fmnl25-3.fna&_nc_gid=mOgpf8LZgm5UW4cDRqSXCQ&_nc_ss=7a3a8&oh=00_Afwv2QXl1tj1grD8IqVX3jQwjqerQ90YrshRs0E3dEiglA&oe=69D04A5F" alt="Pastor " class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700">
                <a href="https://www.facebook.com/donna.benin" target="_blank" 
                   class="absolute top-4 right-4 z-10 p-2.5 bg-white text-black rounded-full shadow-xl hover:bg-[#1877F2] hover:text-white transition duration-300 transform group-hover:scale-110">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            </div>
            
            <h3 class="text-xl text-white font-black uppercase tracking-tight">Lead Pastor</h3>
            <p class="text-white text-sm uppercase tracking-widest leading-relaxed">Pastora Donna Benin</p>
        </div>

        <div class="min-w-[280px] md:min-w-[320px] snap-center bg-zinc-900 border border-zinc-800 p-6 group transition duration-500 hover:border-white">
            
            <div class="relative aspect-[3/4] bg-zinc-800 mb-6 overflow-hidden">
                <img src="https://scontent.fmnl25-5.fna.fbcdn.net/v/t39.30808-6/649663283_122295779492234591_6176855619632382405_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=7b2446&_nc_eui2=AeGWSVjaa0Fta8d33DHO2ZZbID1-YlOpFDggPX5iU6kUODZv32d5_F06jMBn65cnceN0C6xR0r0FXIQ5aWgpSU9b&_nc_ohc=g-colz1R0I0Q7kNvwFMs-I5&_nc_oc=AdrvrxLJ02rgrdnXyG2ocQExnL7Vq_xp8NAcu7ebOtc443wywmA7m0CgoonezaoavoU&_nc_zt=23&_nc_ht=scontent.fmnl25-5.fna&_nc_gid=kKYTc28Koea1XMntSlHrGA&_nc_ss=7a3a8&oh=00_Afw6DQofzixkgeO0qRyZO9vk8UgTCF3XZAgm7aHPPgXPEQ&oe=69D06571" alt="Pastor Name" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700">
                
                <a href="https://www.facebook.com/paulmoneyla" target="_blank" 
                   class="absolute top-4 right-4 z-10 p-2.5 bg-white text-black rounded-full shadow-xl hover:bg-[#1877F2] hover:text-white transition duration-300 transform group-hover:scale-110">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            </div>
            
            <h3 class="text-xl text-white font-black uppercase tracking-tight">Leadership</h3>
            <p class="text-white text-sm uppercase tracking-widest leading-relaxed">Pastoral Paul Anthony Atis</p>
        </div>
    </div>
</div>

<style>
    /* Custom utility to hide scrollbar while keeping functionality */
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>
    </div>
</section>

    <footer class="py-12 px-6 border-t border-black text-center">
        <p class="text-[10px] uppercase tracking-[0.5em] font-bold">
            &copy; {{ date('Y') }} {{ $churchData['name'] }}
        </p>
    </footer>

</body>
</html>

