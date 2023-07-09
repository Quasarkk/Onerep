<template>
    <div class="h-screen bg-[#141721] text-white">
      <h2 class="text-2xl text-center">Trainings</h2>

      <div class="w-10/12 mx-auto my-8">
        <!-- Utilise v-for pour itérer sur les programs -->
        <div
          v-for="program in programs"
          :key="program.id"
          class="bg-gradient-to-r from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md"
        >
          <h3>{{ program.name }}</h3>
          <!-- Affiche d'autres informations du program si nécessaire -->
        </div>
      </div>
    </div>
  </template>


  <script>
  export default {
    data() {
      return {
        programs: [],
      };
    },
    mounted() {
      // Effectue une requête HTTP vers une route Laravel qui récupère les programmes depuis la base de données
      axios.get('/programs')
        .then(response => {
          this.programs = response.data;
        })
        .catch(error => {
          console.error('Erreur lors de la récupération des programmes:', error);
        });
    },
  };
  </script>

