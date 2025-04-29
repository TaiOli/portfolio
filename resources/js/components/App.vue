<template>
    <div>
      <h3 class="text-center mb-4">Projetos</h3>
      <ul class="list-group" v-if="projetos.length">
        <li class="list-group-item" v-for="projeto in projetos" :key="projeto.id">
          {{ projeto.nome }}
        </li>
      </ul>
      <p v-else class="text-center">Carregando...</p>
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
			});
	},
};
</script>
  