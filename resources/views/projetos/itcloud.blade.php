@extends('layouts.app')

@section('content')
<div class="bg-[#EAC891]/40">

    <section class="py-24">
        <div class="max-w-5xl mx-auto px-6 space-y-20">

            {{-- HEADER --}}
            <div class="space-y-6">

                <a href="/#projetos"
                   class="text-sm text-[#D06224] hover:underline">
                    ← Voltar para projetos
                </a>

                <div class="flex items-center gap-3">
                    <span class="text-xs px-3 py-1 rounded-full bg-[#D06224]/10 text-[#D06224]">
                        Fullstack
                    </span>
                    <span class="text-xs px-3 py-1 rounded-full bg-black/5 text-gray-600">
                        Laravel + Livewire
                    </span>
                </div>

                <h1 class="text-3xl md:text-5xl font-serif font-bold text-[#D06224]">
                    ITCloud 🚀
                </h1>

                <p class="text-gray-700 text-lg max-w-2xl">
                    Aplicação fullstack para gerenciamento de desenvolvedores e artigos técnicos,
                    com foco em arquitetura limpa, UX fluida e código escalável.
                </p>

                <div class="flex gap-4 flex-wrap">

                    <a href="#"
                       class="px-6 py-3 bg-[#D06224] text-[#EAC891] rounded-xl hover:-translate-y-1 transition">
                        Ver projeto online
                    </a>

                    <a href="https://github.com/seu-usuario/itcloud-dev-articles"
                       target="_blank"
                       class="px-6 py-3 border border-[#D06224] text-[#D06224] rounded-xl hover:bg-[#D06224] hover:text-[#EAC891] transition">
                        Ver código
                    </a>

                </div>

            </div>

            {{-- PREVIEW --}}
            <div class="bg-white/60 border border-black/5 rounded-2xl overflow-hidden shadow-sm">
                <div class="h-80 bg-gray-200 flex items-center justify-center text-gray-400">
                    Preview do sistema
                </div>
            </div>

            {{-- SOBRE --}}
            <div class="space-y-4">
                <h2 class="text-2xl font-semibold text-[#D06224]">
                    Sobre o projeto
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    O ITCloud foi desenvolvido com o objetivo de simular um ambiente real de gestão
                    de conteúdo técnico, permitindo a criação e relacionamento entre desenvolvedores
                    e artigos.
                </p>

                <p class="text-gray-700 leading-relaxed">
                    O foco principal foi construir uma aplicação organizada, escalável e com boa
                    experiência de uso, utilizando Livewire para evitar complexidade desnecessária
                    de SPAs.
                </p>
            </div>

            {{-- TECNOLOGIAS --}}
            <div class="space-y-4">
                <h2 class="text-2xl font-semibold text-[#D06224]">
                    Tecnologias
                </h2>

                <div class="flex flex-wrap gap-3 text-sm">
                    <span class="px-3 py-1 bg-black/5 rounded-full">Laravel</span>
                    <span class="px-3 py-1 bg-black/5 rounded-full">Livewire</span>
                    <span class="px-3 py-1 bg-black/5 rounded-full">Tailwind</span>
                    <span class="px-3 py-1 bg-black/5 rounded-full">Alpine.js</span>
                    <span class="px-3 py-1 bg-black/5 rounded-full">Pest</span>
                </div>
            </div>

            {{-- FUNCIONALIDADES --}}
            <div class="space-y-6">
                <h2 class="text-2xl font-semibold text-[#D06224]">
                    Funcionalidades
                </h2>

                <div class="grid md:grid-cols-2 gap-6">

                    <div class="bg-white/60 p-6 rounded-xl border border-black/5">
                        <h3 class="font-semibold mb-2">Autenticação</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Login e registro</li>
                            <li>• Reset de senha</li>
                            <li>• Proteção de rotas</li>
                        </ul>
                    </div>

                    <div class="bg-white/60 p-6 rounded-xl border border-black/5">
                        <h3 class="font-semibold mb-2">Desenvolvedores</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• CRUD completo</li>
                            <li>• Filtros dinâmicos</li>
                            <li>• Soft delete + restore</li>
                        </ul>
                    </div>

                    <div class="bg-white/60 p-6 rounded-xl border border-black/5">
                        <h3 class="font-semibold mb-2">Artigos</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• CRUD completo</li>
                            <li>• Slug automático</li>
                            <li>• Relacionamento com autores</li>
                        </ul>
                    </div>

                    <div class="bg-white/60 p-6 rounded-xl border border-black/5">
                        <h3 class="font-semibold mb-2">Interface</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Responsiva</li>
                            <li>• Dark / Light mode</li>
                            <li>• UX fluida sem SPA</li>
                        </ul>
                    </div>

                </div>
            </div>

            {{-- ARQUITETURA --}}
            <div class="space-y-4">
                <h2 class="text-2xl font-semibold text-[#D06224]">
                    Arquitetura
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    A aplicação foi estruturada com foco em responsabilidade única e organização
                    de código, utilizando componentes Livewire, Form Objects e boas práticas
                    do Laravel.
                </p>

                <div class="text-sm text-gray-600 space-y-1">
                    <p>• Componentização com Livewire</p>
                    <p>• Eloquent Relationships</p>
                    <p>• Factories & Seeders</p>
                    <p>• Soft Deletes</p>
                </div>
            </div>

            {{-- CTA FINAL --}}
            <div class="bg-[#8A8035] text-[#EAC891] rounded-2xl p-10 text-center space-y-6">

                <h2 class="text-2xl md:text-3xl font-serif">
                    Curtiu esse projeto?
                </h2>

                <p class="text-[#EAC891]/90">
                    Posso desenvolver algo nesse nível (ou melhor) pra você.
                </p>

                <a href="https://wa.me/5517992547894"
                   target="_blank"
                   class="inline-block px-8 py-4 bg-[#D06224] rounded-xl hover:-translate-y-1 transition">
                    Falar comigo
                </a>

            </div>

        </div>
    </section>

</div>
@endsection
