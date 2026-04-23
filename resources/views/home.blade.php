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

    {{-- SOBRE --}}
    <section class="py-16 border-t max-w-2xl">
        <h2 class="text-2xl font-semibold mb-6">Sobre</h2>

        <p class="text-gray-700 leading-relaxed">
            Sou desenvolvedora focada em criar sites e lojas online que não só
            funcionam bem, mas também ajudam negócios a vender mais.
        </p>
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
