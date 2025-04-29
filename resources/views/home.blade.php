@extends('master')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<!-- Descrição -->
    <header id="home" class="text-white py-5 description">
        <div class="container">
            <div class="row align-items-center justify-content-center"> 
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <div class="profile-flip-container mx-auto">

                        <div class="profile-flipper">
                            <div class="profile-front">
                                <img src="/img/fotoperfil.jpg" alt="Foto de Perfil"
                                    class="img-fluid rounded-circle object-fit-cover w-100 h-100">
                            </div>

                            <div class="profile-back">
                                <video muted loop preload="auto" class="w-100 h-100 rounded-circle object-fit-cover">
                                    <source src="/video/gifperfil.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 d-flex align-items-center justify-content-md-start text-center text-md-start">
                    <div>
                        <h1>Olá, eu sou Tais Oliveira</h1>
                            <p class="text-center">
                                Desenvolvedora Web | Laravel | Vue.js | Docker
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </header>


 <!-- Sobre mim -->
    <section id="about" class="ct-on py-5">
        <div class="container">
            <h3 class="text-center">Sobre Mim</h3>
            <p class="text-center mx-auto px-3 col-12 mt-4">
                Desenvolvedora Full Stack com sólida experiência em desenvolvimento web e
                programação. Proficiente em PHP, Laravel, JavaScript e MySQL para criação de
                aplicações dinâmicas e interativas. Experiência na construção de interfaces atrativas
                e responsivas com HTML, CSS, Bootstrap e Angular, além de documentação técnica em
                Markdown. Habilidade no uso de GitHub e GitLab para controle de versão, e criação
                de pipelines com CI/CD para automação de processos e integração contínua.
            </p>
        </div>
    </section>
    
 <!-- Formação Acadêmica -->
    <section id="academic" class="py-5">
        <div class="container">
            <h3 class="text-center mb-4">Formação Acadêmica</h3>
            <div class="row justify-content-center">
                <div class="col-md-5 mb-4 mb-md-0">
                    <p class="mb-2 text-center text-md-start">
                        <strong>Graduação em Análise e Desenvolvimento de Sistemas</strong><br>
                        Universidade Católica do Salvador (UCSAL) – Concluído
                    </p>
                </div>
                <div class="col-md-5">
                    <p class="mb-2 text-center text-md-start">
                        <strong>Pós-graduação em Data Science e Big Data Analytics</strong><br>
                        Universidade Estácio de Sá (UNESA) – Concluído
                    </p>
                </div>
            </div>
        </div>
    </section>

 <!-- Experiências Profissionais -->
   <section id="experience" class="py-5" style="background-color: #f5ffe8">
        <div class="container">
            <h3 class="text-center mb-4">Experiências Profissionais</h3>
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="mb-5">
                        <p class="mb-1"><strong>Desenvolvedora Full Stack – MaxxMobi</strong></p>
                        <p class="mb-1">07 de Julho de 2022 - Dezembro de 2023</p>
                        <ul class="mt-3">
                            <li>Manutenção e aprimoramento de sistemas de e-mail marketing, com manipulação em bancos de dados utilizando SQL e PHP.</li>
                            <li>Desenvolvimento de interfaces front-end com HTML, CSS e JavaScript, incluindo design responsivo e melhorias na identidade visual da marca.</li>
                            <li>Criação de site corporativo com Bootstrap, Angular e JavaScript, integração de um chatbot previamente desenvolvido ao sistema.</li>
                            <li>Documentação técnica utilizando Markdown e Vue.js.</li>
                            <li>Criação de pipelines com CI/CD, e uso de GitHub para controle de versão e integração contínua.</li>
                            <li>Utilização do Figma para consultar especificações de design e implementá-las no desenvolvimento.</li>
                        </ul>
                    </div>

                    <div>
                        <p class="mb-1"><strong>Desenvolvedora Web – Ke Solutions</strong></p>
                        <p class="mb-1">Fevereiro de 2024 – Atualmente</p>
                        <ul class="mt-3">
                            <li>Desenvolvimento de APIs RESTful utilizando Laravel, implementando a arquitetura MVC.</li>
                            <li>Modelagem e gerenciamento de banco de dados MySQL.</li>
                            <li>Construção de interfaces dinâmicas e responsivas com Vue.js, melhorando a experiência do usuário.</li>
                            <li>Uso de Docker para containerização e otimização do ambiente de desenvolvimento.</li>
                            <li>Implementação de testes automatizados com Karma e Jasmine.</li>
                            <li>Desenvolvimento back-end com Flask (Python) e documentação de APIs com Swagger.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- Contatos -->
    <section id="contact" class="container py-5 text-center">
        <h5>Contatos</h5>
        <div class="d-flex justify-content-center gap-3 mt-4">

           <a href="https://www.linkedin.com/in/taisoliveira" target="_blank" class="btn btn-linkedin d-flex align-items-center justify-content-center">
                <i class="bi bi-linkedin fs-4"></i>
            </a>

            <a href="https://github.com/seulink" target="_blank" class="btn btn-dark btn-github d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-github fs-4"></i>
            </a>

            <a href="mailto:taiscoliveiratec@gmail.com" class="btn btn-danger d-flex align-items-center justify-content-center rounded-circle" target="_blank" title="Enviar e-mail">
                <i class="bi bi-envelope-fill fs-5"></i>
            </a>
        </div>
    </section>

 <!-- Script foto e gif do perfil -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const flipContainer = document.querySelector('.profile-flip-container');
            const video = flipContainer.querySelector('video');

            flipContainer.addEventListener('mouseenter', () => {
                video.play();
            });

            flipContainer.addEventListener('mouseleave', () => {
                video.pause();
                video.currentTime = 0;
            });
        });
    </script>

@endsection
