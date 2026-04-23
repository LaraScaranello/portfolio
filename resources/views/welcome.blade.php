@extends('layouts.app')

@section('content')
<div>

    <div class="bg-[#D06224]">
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
                       class="group flex items-center gap-2 px-6 py-3 rounded-lg border border-[#EAC891]
                      text-[#EAC891] transition-all duration-300 bg-[#8A8035]
                      hover:bg-[#EAC891] hover:text-[#D06224] hover:-translate-y-1 hover:shadow-lg"
                    >
                        Linkedin
                    </a>

                    <a href="https://github.com/LaraScaranello" target="_blank"
                       class="group flex items-center gap-2 px-6 py-3 rounded-lg border border-[#EAC891]
                      text-[#EAC891] transition-all duration-300 bg-[#8A8035]
                      hover:bg-[#EAC891] hover:text-[#D06224] hover:-translate-y-1 hover:shadow-lg"
                    >
                        GitHub
                    </a>
                </div>
            </section>
        </div>
    </div>

    {{-- SOBRE --}}
    <section id="sobre" class="py-20 border-t border-black/10">
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
    <section class="py-16 border-t">
        <h2 class="text-2xl font-semibold mb-10">Projetos</h2>

        <div class="grid md:grid-cols-2 gap-8">

            {{-- Projeto 1 --}}
            <div class="group">
                <div class="bg-gray-200 h-56 rounded-xl mb-4"></div>

                <h3 class="text-lg font-semibold">
                    Loja de Cosméticos
                </h3>

                <p class="text-gray-600 text-sm">
                    E-commerce com carrinho, checkout e gestão de produtos.
                </p>
            </div>

            {{-- Projeto 2 --}}
            <div class="group">
                <div class="bg-gray-200 h-56 rounded-xl mb-4"></div>

                <h3 class="text-lg font-semibold">
                    Landing Page SaaS
                </h3>

                <p class="text-gray-600 text-sm">
                    Página otimizada para conversão de leads.
                </p>
            </div>

        </div>
    </section>

    {{-- CONTATO --}}
    <section class="py-16 border-t">
        <h2 class="text-2xl font-semibold mb-6">Contato</h2>

        <p class="text-gray-700 mb-4">
            Vamos tirar sua ideia do papel?
        </p>

        <a href="https://wa.me/SEUNUMERO" class="bg-black text-white px-6 py-3 rounded-lg inline-block">
            Falar no WhatsApp
        </a>
    </section>

</div>
@endsection
