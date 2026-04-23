<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Lara Scaranello - Portfólio</title>
        @vite('resources/css/app.css')
    </head>

    <body class="bg-[#EAC891]/40 text-gray-900">

        <nav class="bg-[#D06224] text-[#EAC891]">
            <div class="px-6 py-5 flex justify-between items-center max-w-6xl mx-auto">

                <h1 class="font-serif text-lg tracking-wide flex items-center gap-2">
                    Lara
                    <span class="text-[#EAC891]/80">Scaranello</span>
                    <span class="text-sm text-white/60">&lt;/&gt;</span>
                </h1>

                <div class="space-x-8 text-sm">
                    <a href="/" class="relative group">
                        Home
                        <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-[#EAC891] transition-all duration-300 group-hover:w-full"></span>
                    </a>

                    <a href="/projetos" class="relative group">
                        Projetos
                        <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-[#EAC891] transition-all duration-300 group-hover:w-full"></span>
                    </a>

                    <a href="/contato" class="relative group">
                        Contato
                        <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-[#EAC891] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </div>

            </div>
        </nav>

        <main>

            @yield('content')

        </main>

    </body>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const words = [
                "Full Stack Developer",
                "Experiências digitais com propósito",
                "Design e código em harmonia",
                "Simplicidade que funciona",
                "Soluções pensadas de ponta a ponta"
            ];

            let i = 0;
            let j = 0;
            let isDeleting = false;

            const el = document.getElementById("typing-text");

            function type() {
                if (!el) return;

                const currentWord = words[i];

                if (!isDeleting) {
                    el.textContent = currentWord.substring(0, j + 1);
                    j++;

                    if (j === currentWord.length) {
                        isDeleting = true;
                        setTimeout(type, 1400);
                        return;
                    }
                } else {
                    el.textContent = currentWord.substring(0, j - 1);
                    j--;

                    if (j === 0) {
                        isDeleting = false;
                        i = (i + 1) % words.length;
                    }
                }

                setTimeout(type, isDeleting ? 40 : 70);
            }

            type();
        });
    </script>
</html>
