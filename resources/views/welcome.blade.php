@extends('layouts.app')

@section('content')
<div>

    <div class="bg-[#8A8035]">
        {{-- HERO --}}
        <div class="max-w-5xl mx-auto">
            <section class="py-20">
                <h1 class="text-1xl md:text-3xl font-bold leading-tight mb-6 text-[#EAC891]">
                    Oi, eu sou
                </h1>

                <h1 class="font-serif text-4xl md:text-6xl font-bold leading-tight mb-6 text-[#EAC891]">
                    Lara Scaranello
                </h1>

                <h2 id="typing-text" class="font-serif text-1xl md:text-3xl mt-2 font-medium leading-relaxed min-h-[1.7em] text-[#EAC891]"></h2>

                <div class="mt-4 flex gap-4">
                    <a href="https://www.linkedin.com/in/lara-selena-gon%C3%A7alves-scaranello-239410224/" target="_blank"
                       class="group flex items-center gap-2 px-6 py-3 rounded-lg border border-[#D06224]
                      text-[#EAC891] transition-all duration-300 bg-[#D06224]
                      hover:bg-[#EAC891] hover:text-[#D06224] hover:-translate-y-1 hover:shadow-lg"
                    >
                        Linkedin
                    </a>

                    <a href="https://github.com/LaraScaranello" target="_blank"
                       class="group flex items-center gap-2 px-6 py-3 rounded-lg border border-[#D06224]
                      text-[#EAC891] transition-all duration-300 bg-[#D06224]
                      hover:bg-[#EAC891] hover:text-[#D06224] hover:-translate-y-1 hover:shadow-lg"
                    >
                        GitHub
                    </a>
                </div>
            </section>
        </div>
    </div>

    {{-- SOBRE --}}
    <section id="sobre" class="py-20">
        <div class="max-w-5xl mx-auto px-6">

            <div class="flex items-center gap-4 mb-14">
                <div class="flex items-center gap-2">
                    <div class="h-[3px] bg-[#8A8035]/40 w-10 md:w-20 rounded-full"></div>
                    <div class="w-2 h-2 rounded-full bg-[#8A8035]"></div>
                </div>
                <h2 class="text-3xl md:text-4xl font-serif font-semibold text-[#D06224] whitespace-nowrap">
                    Um pouco sobre mim
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-10">

                {{-- Texto --}}
                <div class="md:col-span-2 space-y-5 text-gray-700 leading-relaxed text-base md:text-lg">

                    <p>
                        Sou desenvolvedora formada em Análise e Desenvolvimento de Sistemas pela FATEC Rio Preto, com foco em construir sistemas que vão além do código — eles precisam funcionar bem na prática e gerar valor real.
                    </p>

                    <p>
                        Atuo no desenvolvimento de aplicações web e APIs, participando de todo o ciclo do produto: análise, desenvolvimento, testes e entrega em produção.
                    </p>

                    <p>
                        Gosto de resolver problemas de forma estruturada, entender o contexto do negócio e transformar isso em soluções simples, escaláveis e eficientes.
                    </p>

                    <p>
                        Meu foco é construir software com qualidade, clareza e impacto — sempre buscando evolução técnica e profissional.
                    </p>

                </div>

                {{-- cards estratégicos --}}
                <div class="space-y-6">

                    <div class="bg-white/70 border border-black/5 rounded-2xl p-6 shadow-sm">
                        <h3 class="font-semibold text-[#D06224] mb-2">Perfil</h3>
                        <p class="text-sm text-gray-600">
                            Desenvolvedora focada em produto
                        </p>
                    </div>

                    <div class="bg-white/70 border border-black/5 rounded-2xl p-6 shadow-sm">
                        <h3 class="font-semibold text-[#D06224] mb-2">Atuação</h3>
                        <p class="text-sm text-gray-600">
                            Web, APIs e sistemas escaláveis
                        </p>
                    </div>

                    <div class="bg-white/70 border border-black/5 rounded-2xl p-6 shadow-sm">
                        <h3 class="font-semibold text-[#D06224] mb-2">Foco</h3>
                        <p class="text-sm text-gray-600">
                            Soluções simples e eficientes
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- SKILLS --}}
    <section id="skills" class="py-24">
        <div class="max-w-5xl mx-auto px-6">

            <div class="flex items-center gap-4 mb-14">
                <div class="flex items-center gap-2">
                    <div class="h-[3px] bg-[#8A8035]/40 w-10 md:w-20 rounded-full"></div>
                    <div class="w-2 h-2 rounded-full bg-[#8A8035]"></div>
                </div>
                <h2 class="text-3xl md:text-4xl font-serif font-semibold text-[#D06224] whitespace-nowrap">
                    Skills
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                {{-- LEFT --}}
                <div class="space-y-6">

                    <div class="flex items-center gap-5 bg-white/60 border border-black/5 rounded-2xl p-6 shadow-sm">
                        <div class="text-4xl text-[#D06224]">&lt;/&gt;</div>
                        <div>
                            <h3 class="font-semibold">Fullstack Development</h3>
                            <p class="text-sm text-gray-600">
                                PHP, Laravel, JavaScript, TypeScript
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-5 bg-white/60 border border-black/5 rounded-2xl p-6 shadow-sm">
                        <div class="text-4xl text-[#D06224]">🧠</div>
                        <div>
                            <h3 class="font-semibold">Pensamento Analítico</h3>
                            <p class="text-sm text-gray-600">
                                Resolução de problemas e lógica aplicada
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-5 bg-white/60 border border-black/5 rounded-2xl p-6 shadow-sm">
                        <div class="text-4xl text-[#D06224]">⚡</div>
                        <div>
                            <h3 class="font-semibold">Performance</h3>
                            <p class="text-sm text-gray-600">
                                Otimização de queries e APIs
                            </p>
                        </div>
                    </div>

                </div>

                {{-- RIGHT --}}
                <div class="space-y-6">

                    <div class="flex items-center gap-5 bg-white/60 border border-black/5 rounded-2xl p-6 shadow-sm">
                        <div class="text-4xl text-[#D06224]">📦</div>
                        <div>
                            <h3 class="font-semibold">Backend & APIs</h3>
                            <p class="text-sm text-gray-600">
                                Laravel, REST APIs, MySQL, PostgreSQL
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-5 bg-white/60 border border-black/5 rounded-2xl p-6 shadow-sm">
                        <div class="text-4xl text-[#D06224]">🔗</div>
                        <div>
                            <h3 class="font-semibold">Integrações</h3>
                            <p class="text-sm text-gray-600">
                                Sistemas corporativos e dados
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center gap-5 bg-white/60 border border-black/5 rounded-2xl p-6 shadow-sm">
                        <div class="text-4xl text-[#D06224]">🤝</div>
                        <div>
                            <h3 class="font-semibold">Trabalho em equipe</h3>
                            <p class="text-sm text-gray-600">
                                Comunicação clara e colaboração
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    {{-- PROJETOS --}}
    <section id="projetos" class="py-24 ">
        <div class="max-w-5xl mx-auto px-6">

            <div class="flex items-center gap-4 mb-14">
                <div class="flex items-center gap-2">
                    <div class="h-[3px] bg-[#8A8035]/40 w-10 md:w-20 rounded-full"></div>
                    <div class="w-2 h-2 rounded-full bg-[#8A8035]"></div>
                </div>
                <h2 class="text-3xl md:text-4xl font-serif font-semibold text-[#D06224] whitespace-nowrap">
                    Projetos
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8">

                {{-- Projeto 1 --}}
                <div class="group bg-white/60 border border-black/5 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">

                    <div class="h-56 bg-gray-200 group-hover:scale-[1.02] transition-transform duration-300"></div>

                    <div class="p-6 space-y-2">

                        <h3 class="text-lg font-semibold text-gray-900">
                            Loja de Cosméticos
                        </h3>

                        <p class="text-gray-600 text-sm">
                            E-commerce com carrinho, checkout e gestão de produtos.
                        </p>

                    </div>
                </div>

                {{-- Projeto 2 --}}
                <div class="group bg-white/60 border border-black/5 rounded-2xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 hover:-translate-y-1">

                    <div class="h-56 bg-gray-200 group-hover:scale-[1.02] transition-transform duration-300"></div>

                    <div class="p-6 space-y-2">

                        <h3 class="text-lg font-semibold text-gray-900">
                            Landing Page SaaS
                        </h3>

                        <p class="text-gray-600 text-sm">
                            Página otimizada para conversão de leads.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- CONTATO --}}
    <section id="contato" class="py-24 bg-[#8A8035] text-[#EAC891]">

        <div class="max-w-5xl mx-auto px-6 space-y-16">

            {{-- TOP: foto + CTA --}}
            <div class="grid md:grid-cols-2 gap-5 items-center">

                {{-- IMAGEM --}}
                <div class="flex justify-center md:justify-start">
                    <img src="/build/assets/perfil.png"
                         alt="Lara Scaranello"
                         class="w-80 h-100 object-cover rounded-2xl shadow-lg border border-[#EAC891]/30">
                </div>

                {{-- TEXTO + CTA --}}
                <div class="space-y-6 text-center md:text-left">

                    <h2 class="text-3xl md:text-4xl font-serif font-semibold">
                        Vamos trabalhar juntos?
                    </h2>

                    <p class="text-[#EAC891]/90 leading-relaxed">
                        Estou disponível para novos projetos e oportunidades.
                        Se quiser conversar sobre uma ideia, me chama no WhatsApp.
                    </p>

                    <a href="https://wa.me/5517992547894"
                       target="_blank"
                       class="inline-flex items-center justify-center gap-2 bg-[#D06224] text-[#EAC891] px-8 py-4 border-[#D06224]
                       rounded-xl font-medium shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300
                       hover:bg-[#EAC891] hover:text-[#D06224]"
                    >

                        Falar no WhatsApp
                    </a>

                </div>

            </div>

            {{-- FOOTER INFO --}}
            <div class="border-t border-[#EAC891]/30 pt-10 text-center space-y-6">

                <div class="space-y-1 text-sm">

                    <p class="font-semibold text-base">Lara Scaranello</p>

                    <p>São José do Rio Preto - SP</p>
                    <p>+55 (17) 9 99254-7894</p>
                    <p>laraselena0911@gmail.com</p>

                </div>

                {{-- social --}}
                <div class="flex justify-center gap-6 text-sm">

                    <a href="https://www.linkedin.com/in/lara-selena-gon%C3%A7alves-scaranello-239410224/"
                       target="_blank"
                       class="flex items-center gap-2 hover:underline">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 640 640"
                             class="w-5 h-5 fill-current text-[#EAC891]">

                            <path d="M196.3 512L103.4 512L103.4 212.9L196.3 212.9L196.3 512zM149.8 172.1C120.1 172.1 96 147.5 96 117.8C96 103.5 101.7 89.9 111.8 79.8C121.9 69.7 135.6 64 149.8 64C164 64 177.7 69.7 187.8 79.8C197.9 89.9 203.6 103.6 203.6 117.8C203.6 147.5 179.5 172.1 149.8 172.1zM543.9 512L451.2 512L451.2 366.4C451.2 331.7 450.5 287.2 402.9 287.2C354.6 287.2 347.2 324.9 347.2 363.9L347.2 512L254.4 512L254.4 212.9L343.5 212.9L343.5 253.7L344.8 253.7C357.2 230.2 387.5 205.4 432.7 205.4C526.7 205.4 544 267.3 544 347.7L544 512L543.9 512z"/>
                        </svg>
                    </a>

                    <a href="https://github.com/LaraScaranello"
                       target="_blank"
                       class="flex items-center gap-2 text-[#EAC891] hover:text-white transition">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 640 640"
                             class="w-5 h-5 fill-current">

                            <path d="M237.9 461.4C237.9 463.4 235.6 465 232.7 465C229.4 465.3 227.1 463.7 227.1 461.4C227.1 459.4 229.4 457.8 232.3 457.8C235.3 457.5 237.9 459.1 237.9 461.4zM316.8 72C178.1 72 72 177.3 72 316C72 426.9 141.8 521.8 241.5 555.2C254.3 557.5 258.8 549.6 258.8 543.1C258.8 536.9 258.5 502.7 258.5 481.7C258.5 481.7 188.5 496.7 173.8 451.9C173.8 451.9 162.4 422.8 146 415.3C146 415.3 123.1 399.6 147.6 399.9C147.6 399.9 172.5 401.9 186.2 425.7C208.1 464.3 244.8 453.2 259.1 446.6C261.4 430.6 267.9 419.5 275.1 412.9C219.2 406.7 162.8 398.6 162.8 302.4C162.8 274.9 170.4 261.1 186.4 243.5C183.8 237 175.3 210.2 189 175.6C209.9 169.1 258 202.6 258 202.6C278 197 299.5 194.1 320.8 194.1C342.1 194.1 363.6 197 383.6 202.6C383.6 202.6 431.7 169 452.6 175.6C466.3 210.3 457.8 237 455.2 243.5C471.2 261.2 481 275 481 302.4C481 398.9 422.1 406.6 366.2 412.9C375.4 420.8 383.2 435.8 383.2 459.3C383.2 493 382.9 534.7 382.9 542.9C382.9 549.4 387.5 557.3 400.2 555C500.2 521.8 568 426.9 568 316C568 177.3 455.5 72 316.8 72z"/>
                        </svg>
                    </a>

                    <a href="https://wa.me/5517992547894"
                       target="_blank"
                       class="flex items-center gap-2 text-[#EAC891] hover:text-white transition">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 640 640"
                             class="w-5 h-5 fill-current">

                            <path d="M476.9 161.1C435 119.1 379.2 96 319.9 96C197.5 96 97.9 195.6 97.9 318C97.9 357.1 108.1 395.3 127.5 429L96 544L213.7 513.1C246.1 530.8 282.6 540.1 319.8 540.1L319.9 540.1C442.2 540.1 544 440.5 544 318.1C544 258.8 518.8 203.1 476.9 161.1zM319.9 502.7C286.7 502.7 254.2 493.8 225.9 477L219.2 473L149.4 491.3L168 423.2L163.6 416.2C145.1 386.8 135.4 352.9 135.4 318C135.4 216.3 218.2 133.5 320 133.5C369.3 133.5 415.6 152.7 450.4 187.6C485.2 222.5 506.6 268.8 506.5 318.1C506.5 419.9 421.6 502.7 319.9 502.7zM421.1 364.5C415.6 361.7 388.3 348.3 383.2 346.5C378.1 344.6 374.4 343.7 370.7 349.3C367 354.9 356.4 367.3 353.1 371.1C349.9 374.8 346.6 375.3 341.1 372.5C308.5 356.2 287.1 343.4 265.6 306.5C259.9 296.7 271.3 297.4 281.9 276.2C283.7 272.5 282.8 269.3 281.4 266.5C280 263.7 268.9 236.4 264.3 225.3C259.8 214.5 255.2 216 251.8 215.8C248.6 215.6 244.9 215.6 241.2 215.6C237.5 215.6 231.5 217 226.4 222.5C221.3 228.1 207 241.5 207 268.8C207 296.1 226.9 322.5 229.6 326.2C232.4 329.9 268.7 385.9 324.4 410C359.6 425.2 373.4 426.5 391 423.9C401.7 422.3 423.8 410.5 428.4 397.5C433 384.5 433 373.4 431.6 371.1C430.3 368.6 426.6 367.2 421.1 364.5z"/>
                        </svg>
                    </a>

                    <a href="https://www.instagram.com/_selverse/"
                       target="_blank"
                       class="flex items-center gap-2 text-[#EAC891] hover:text-white transition">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 640 640"
                             class="w-5 h-5 fill-current">

                            <path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/>
                        </svg>
                    </a>

                </div>

                {{-- copyright --}}
                <p class="text-xs text-[#EAC891]/70">
                    © {{ date('Y') }}  Porfolio de Lara Scaranello. Todos os direitos reservados | Designed/Developer by larascaranello
                </p>

            </div>

        </div>
    </section>

</div>
@endsection
