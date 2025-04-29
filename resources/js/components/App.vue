<template>
    <div class="container bg-light mt-5">
      <div class="row">
        <div class="col-md-4 mb-4" v-for="projeto in projetos" :key="projeto.id">
          <div class="card mb-3">

            <div class="card-body">
              <h5 class="card-title">{{ projeto.nome }}</h5>
            </div>
            
            <div class="card-body">
              <p><strong>Descrição:</strong></p>
              <p v-if="projeto.descricao">{{ projeto.descricao }}</p>
              <p>
                <strong>Linguagem:</strong> {{ projeto.linguagem ?? 'Não especificada' }}
              </p>
              <a :href="projeto.url" class="btn btn-sm btn-primary" target="_blank">
                Ver no GitHub
              </a>
            </div>
          </div>
        </div>
      </div>

      <p v-if="projetos.length === 0" class="text-center">Carregando projetos...</p>
    </div>
  </template>
  
  
<script>
export default {
	data() {
		return {
			projetos: [],
		};
	},
	mounted() {
		fetch("/api/projetos")
			.then((res) => res.json())
			.then((data) => {
				this.projetos = data;
			})
			.catch((error) => {
				console.error("Erro ao carregar os projetos:", error);
			});
	},
};
</script>
  