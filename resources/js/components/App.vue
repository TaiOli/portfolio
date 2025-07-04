<template>
  <div class="container bg-light mt-5">
    <div class="row">
      <div class="col-md-4 mb-4" v-for="projeto in projetos" :key="projeto.id">
        <div class="card mb-3">
          <div class="card-body">
            <h5 class="card-title mb-4">{{ projeto.nome }}</h5>
            <p><strong>Descrição:</strong></p>
            <p v-if="projeto.descricao">{{ projeto.descricao }}</p>
            <p>
              <strong>Linguagem:</strong> {{ projeto.linguagem ?? 'Não especificada' }}
            </p>
            <a :href="projeto.url" class="btn btn-sm btn-dark" target="_blank" rel="noopener">
              Ver no GitHub
            </a>
          </div>
        </div>
      </div>
    </div>

    <p v-if="projetos.length === 0" class="text-center">Nenhum projeto para mostrar.</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      projetos: [
        {
          id: 1,
          nome: "CrudSpring",
          descricao: "Aplicação web para gerenciamento de agendamento de consultas médicas, construída com Spring Boot no backend e Vue.js no frontend, utilizando tecnologias modernas como JWT para autenticação segura, Swagger/OpenAPI para documentação da API e arquitetura baseada em serviços.",
          linguagem: "Java + Spring Boot + Vue.js + JavaScript + Bootstrap + SQL",
          url: "https://github.com/TaiOli/CrudSpring"
        },
        {
          id: 2,
          nome: "PrevisaoTempo",
          descricao: "Aplicação Previsão do Tempo consome a API do OpenWeather para obter informações meteorológicas atualizadas de uma cidade fornecida pelo usuário. Ele realiza requisições à API externa, processa os dados recebidos e retorna uma resposta estruturada que inclui temperatura, descrição do clima, umidade, velocidade do vento e probabilidade de chuva, oferecendo assim uma visão completa e em tempo real das condições climáticas.",
          linguagem: "PHP (Laravel) + Javascript e Blade",
          url: "https://github.com/TaiOli/PrevisaoTempo"
        },
        {
          id: 3,
          nome: "API-Hexagonal",
          descricao: "Implementação da Arquitetura Hexagonal com Flask e SQLite 3 para separar lógica de negócios e infraestrutura",
          linguagem: "Python",
          url: "https://github.com/TaiOli/API-Hexagonal"
        },
        {
          id: 4,
          nome: "Laravel-Vue-Docker",
          descricao: "Sistema de CRUD para gerenciamento de usuários, desenvolvido com Laravel, Vue.js e Docker. Permite a criação, visualização, atualização e exclusão de registros em uma interface web moderna.",
          linguagem: "PHP(Laravel) + Vue.js",
          url: "https://github.com/TaiOli/Laravel-Vue-Docker"
        },
        {
          id: 5,
          nome: "SistemaEstoque",
          descricao: "Sistema de gerenciamento de estoque que permite operações de CRUD (Criar, Ler, Atualizar, Deletar) em produtos. Desenvolvido com MySQL Workbench, oferece uma interface para gerenciar e visualizar informações de estoque de forma eficiente",
          linguagem: "PHP + CSS",
          url: "https://github.com/TaiOli/SistemaEstoque"
        }
      ],
    };
  },
};
</script>