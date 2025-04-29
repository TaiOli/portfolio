@extends('master')

@section('content')

<!-- Cursos -->
    <section id="courses" class="py-5 bg-light">
        <div class="container">
            <h5 class="text mb-5">Cursos complementates:</h5>

            <div class="row">
                <!-- Curso 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Agilidade e TDD: Um dia no desenvolvimento de software </h5>
                            <p class="card-text mt-4">
                                Neste curso, aprendi sobre o funcionamento de um time ágil no dia a dia do desenvolvimento de software, desde a entrada em um projeto até a entrega de funcionalidades. Apliquei práticas de <strong>TDD (Test-Driven Development)</strong>, escrevendo testes antes de implementar as funcionalidades, o que contribuiu para um código mais confiável e com menos bugs.
                                Também entendi a diferença entre <strong>testes de unidade, integração e aceitação</strong>, além da importância da <strong>cobertura de testes</strong> como métrica para garantir a qualidade do software.
                            </p>
                            
                            <small class="text-muted">Período: 13/09/2021 a 17/09/2021</small><br>
                            <small class="text-muted">Carga horária: 8 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-black">Alura</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Git e GitHub: Controle e compartilhe seu código</h5>
                            <p class="card-text mt-4">
                               Neste curso, aprendi o que é o <strong>Git</strong> e como utilizá-lo para controlar versões de projetos de forma eficiente. Comecei iniciando repositórios locais, registrando alterações com <strong>commits</strong> e organizando o histórico de desenvolvimento.
                               Também explorei como <strong>compartilhar projetos no GitHub</strong>, colaborar com outras pessoas em equipe, resolver conflitos, trabalhar com <strong>ramificações (branches)</strong> e gerar versões de entrega.
                            </p>

                            <small class="text-muted">Período: 31/08/2021 a 12/09/2021</small><br>
                            <small class="text-muted">Carga horária: 6 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-black">Alura</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Docker para Desenvolvedores</h5>
                            <p class="card-text mt-5"> Neste curso, aprendi a utilizar o terminal do <strong>Linux</strong> para realizar tarefas do dia a dia de um desenvolvedor, como <strong>navegar entre diretórios</strong>, <strong>criar, mover e remover arquivos</strong>, além de <strong>redirecionar saídas</strong> e usar <strong>caracteres coringa (wildcards)</strong> para automatizar comandos. Também explorei a <strong>compactação e descompactação</strong> de arquivos utilizando ferramentas como <code>tar</code> e <code>gzip</code>, e conheci o editor <strong>VI</strong>, aprendendo a editar arquivos diretamente pelo terminal, com comandos de inclusão, alteração e exclusão. </p>
                            
                            <small class="text-muted">Período: 17/09/2021 a 21/09/2021</small><br>
                            <small class="text-muted">Carga horária: 4 horas</small>
                            <p class="mt-2">
                                <span class="badge bg-black">Alura</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Scrum Foundation - Professional Certification</h5>
                             <p class="card-text mt-4">
                                Neste curso, aprendi os fundamentos do framework <strong>Scrum</strong>, incluindo seus valores, princípios e estrutura. Estudei os papéis essenciais como <strong>Scrum Master</strong>, <strong>Product Owner</strong> e <strong>Time de Desenvolvimento</strong>, além dos eventos que organizam o processo, como <strong>Sprint</strong>, <strong>Planning</strong>, <strong>Daily</strong>, <strong>Review</strong> e <strong>Retrospective</strong>. Também compreendi os artefatos do Scrum e a importância de práticas como <strong>transparência, inspeção e adaptação</strong>. O curso incluiu simulados e me preparou para a certificação profissional.
                            </p>
                            
                            <small class="text-muted">Válido: 24/09/2024 a 24/09/2027</small><br>
                            <p class="mt-2">
                                <span class="badge bg-blue">Certiprof</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Swagger</h5>
                            <p class="card-text mt-5">
                                Neste curso, aprendi a planejar o desenvolvimento de uma nova API utilizando a ferramenta <strong>Trello</strong>, organizando tarefas e etapas do projeto de forma visual e colaborativa.
                                Também adquiri conhecimentos para escrever <strong>especificações de API com Open API</strong>, documentando funcionalidades de forma padronizada e compreensível.
                                Além disso, explorei o uso do <strong>Swagger Editor</strong> para criar e validar especificações, garantindo clareza e eficiência no desenvolvimento da API.
                            </p>
                            
                            <small class="text-muted">Concluído: 07/09/2024</small><br>
                            <small class="text-muted">Carga horária: 3,5 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-purple">Udemy</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Computação em Nuvem (AWS Discovery Day)</h5>
                            <p class="card-text mt-4">
                                Neste curso, aprendi a planejar o desenvolvimento de uma nova API utilizando a ferramenta <strong>Trello</strong>, organizando tarefas e etapas do projeto de forma visual e colaborativa.
                                Também adquiri conhecimentos para escrever <strong>especificações de API com Open API</strong>, documentando funcionalidades de forma padronizada e compreensível.
                                Além disso, explorei o uso do <strong>Swagger Editor</strong> para criar e validar especificações, garantindo clareza e eficiência no desenvolvimento da API.
                            </p>
                            
                            <small class="text-muted">Concluído: 22/06/2024</small><br>
                            <small class="text-muted">Carga horária: 4 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-primary">KA Solution</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 7 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Docker para Desenvolvedores (com Docker Swarm e Kubernetes)</h5>
                            <p class="card-text mt-4">
                                 Neste curso, aprendi a <strong>criar e subir containers</strong> com Docker, assim como <strong>criar imagens personalizadas</strong>. Utilizei o <strong>Docker Compose</strong> para gerenciar múltiplos containers e trabalhei com <strong>Volumes e Bind Mounts</strong> para persistência de dados.
                                 Também explorei a <strong>criação de redes (networks)</strong> entre containers, orquestração com <strong>Docker Swarm</strong> e <strong>Kubernetes</strong> tanto em modo <strong>declarativo quanto imperativo</strong>. Além disso, aprendi a utilizar <strong>Docker Swarm na AWS</strong> e a linguagem <strong>YAML</strong> do básico ao avançado para definição de infraestrutura.
                            </p>
                            
                            <small class="text-muted">Concluído: 24/04/2024</small><br>
                            <small class="text-muted">Carga horária: 12,5 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-purple">Udemy</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 8 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">MySQL do Básico ao Avançado</h5>
                            <p class="card-text mt-5">
                                Neste curso 100% prático, aprendi a utilizar <strong>MySQL</strong> do básico ao avançado, desenvolvendo habilidades essenciais para <strong>criar e consultar bancos de dados</strong>. Estudei a <strong>estrutura e sintaxe do SQL</strong>, aplicação de funções agregadas, <strong>JOINs</strong>, operadores lógicos e comparação, além da criação de bancos e tabelas com restrições. Também explorei como <strong>modelar dados do mundo real</strong>, gerar relatórios e integrar MySQL com Python, preparando-me para atuar com confiança no desenvolvimento e análise de dados.
                            </p>
                            
                            <small class="text-muted">Concluído: 17/01/2023</small><br>
                            <small class="text-muted">Carga horária: 8 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-purple">Udemy</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 9 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Desenvolvimento Web Avançado com PHP, Laravel e Vue.JS</h5>
                            <p class="card-text mt-4">
                                Neste curso, aprendi a desenvolver aplicações web modernas com o framework <strong>Laravel</strong>, aplicando o padrão <strong>MVC</strong> e os recursos de <strong>rotas, controllers, views com Blade</strong> e <strong>Eloquent ORM</strong>. Trabalhei com <strong>CRUD</strong>, autenticação com <strong>Session e JWT</strong>, <strong>middlewares</strong>, <strong>migrations</strong>, <strong>seeders</strong>, <strong>validação de formulários</strong>, além de <strong>exportação de arquivos</strong> e <strong>envio de e-mails</strong>. Também explorei a integração com <strong>Vue.js, Bootstrap</strong> e <strong>Redis</strong> para projetos completos e performáticos.
                            </p>
                            
                            <small class="text-muted">Concluído: 22/06/2022</small><br>
                            <small class="text-muted">Carga horária: 57 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-purple">Udemy</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 10 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">REACT: Aplicação web em uma PWA</h5>
                            <p class="card-text mt-4">
                                Neste curso, aprendi os fundamentos das <strong>Progressive Web Apps (PWA)</strong> e como torná-las rápidas, confiáveis e responsivas. Implementei estratégias de <strong>cache com VitePWA</strong>, entendi o papel dos <strong>service workers</strong> e explorei abordagens de cache com a biblioteca <strong>Workbox</strong>. Com isso, pude construir aplicações que funcionam offline e oferecem uma experiência próxima de apps nativos.
                            </p>
                            
                            <small class="text-muted">Concluído: 08/08/2024</small><br>
                            <small class="text-muted">Carga horária: 8 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-black">Alura</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 11 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Redis I: armazenando chaves e valores</h5>
                            <p class="card-text mt-4">
                                Neste curso, aprendi como o <strong>Redis</strong> pode ser usado para <strong>otimizar buscas</strong>, armazenar <strong>sessões de usuários</strong> e lidar com <strong>estatísticas de acesso</strong>. Trabalhei com <strong>hashes</strong>, identifiquei <strong>padrões de acesso</strong> e implementei soluções de cache para melhorar o desempenho de aplicações web em tempo real.
                            </p>
                            
                            <small class="text-muted">Concluído: 13/11/2024</small><br>
                            <small class="text-muted">Carga horária: 20 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-black">Alura</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 12 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Nodejs: Autenticação, Passport e OAuth 2.0</h5>
                            <p class="card-text mt-4">
                                Aprendi a implementar autenticação segura com <strong>Passport</strong> e <strong>OAuth 2.0</strong> em aplicações Node.js. Utilizei <strong>OAuth com GitHub</strong>, desenvolvi lógicas de <strong>login com banco de dados</strong>, e apliquei <strong>boas práticas de programação</strong> para reforçar a segurança e organização do código. Também trabalhei com <strong>loops de tentativa</strong> e tratamento de erros no fluxo de autenticação.
                            </p>
                            
                            <small class="text-muted">Concluído: 03/12/2024</small><br>
                            <small class="text-muted">Carga horária: 8 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-black">Alura</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Curso 13 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pandas I/O: trabalhando com diferentes formatos de arquivos</h5>
                            <p class="card-text mt-4">
                                Aprendi a manipular e analisar dados com a biblioteca <strong>Pandas</strong> em diferentes formatos de arquivos, como <strong>planilhas Excel</strong>, arquivos <strong>JSON</strong>, <strong>HTML</strong>, <strong>XML</strong> e <strong>bancos de dados</strong>. Desenvolvi habilidades para importar, exportar e transformar dados de maneira eficiente, o que é essencial para projetos de análise e ciência de dados.
                            </p>
                            
                            <small class="text-muted">Concluído: 13/02/2025</small><br>
                            <small class="text-muted">Carga horária: 8 horas</small>

                            <p class="mt-2">
                                <span class="badge bg-black">Alura</span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection