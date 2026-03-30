<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect With Us | JTG Church</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white font-sans antialiased flex items-center justify-center min-h-screen py-12">

    <div class="w-full max-w-md px-6">
        <div class="text-center mb-10">
            <div class="mb-4 opacity-50 uppercase tracking-[0.5em] text-xs font-bold">New Here?</div>
            <h1 class="text-4xl font-black uppercase tracking-tighter mb-2">Connect Card</h1>
            <p class="text-zinc-400 font-light">Let us know you're here so we can welcome you properly.</p>
        </div>

        <form action="#" method="POST" class="space-y-6">
            
            <div>
                <label for="full-name" class="block text-xs font-bold uppercase tracking-widest text-zinc-500 mb-2">Full Name</label>
                <input type="text" id="full-name" name="full-name" required 
                    class="w-full bg-zinc-900 border border-zinc-800 text-white px-4 py-3 focus:outline-none focus:border-white transition"
                    placeholder="Full Name">
            </div>

            <div>
                <label for="email" class="block text-xs font-bold uppercase tracking-widest text-zinc-500 mb-2">Email Address</label>
                <input type="email" id="email" name="email" required 
                    class="w-full bg-zinc-900 border border-zinc-800 text-white px-4 py-3 focus:outline-none focus:border-white transition"
                    placeholder="email@yahoo.com">
            </div>

            <div>
                <label for="phone" class="block text-xs font-bold uppercase tracking-widest text-zinc-500 mb-2">Phone Number</label>
                <input type="tel" id="phone" name="phone" 
                    class="w-full bg-zinc-900 border border-zinc-800 text-white px-4 py-3 focus:outline-none focus:border-white transition"
                    placeholder="+63 000 000 0000">
            </div>

            <div>
                <label for="attendance" class="block text-xs font-bold uppercase tracking-widest text-zinc-500 mb-2">Is this your first time?</label>
                <select id="attendance" name="attendance" 
                    class="w-full bg-zinc-900 border border-zinc-800 text-white px-4 py-3 focus:outline-none focus:border-white transition appearance-none">
                    <option value="first-time">Yes, it's my first time!</option>
                    <option value="returning">I've been here before.</option>
                    <option value="regular">I'm a regular attendee.</option>
                </select>
            </div>

            <div class="pt-4">
                <button type="submit" 
                    class="w-full bg-white text-black font-bold uppercase tracking-widest py-4 hover:bg-zinc-200 transition duration-300">
                    Submit Details
                </button>
            </div>

            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-xs uppercase tracking-widest text-zinc-500 hover:text-white transition">
                    ← Return to Home
                </a>
            </div>
        </form>
    </div>

</body>
</html>