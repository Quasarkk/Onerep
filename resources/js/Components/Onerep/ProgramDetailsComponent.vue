<template>
    <div class="h-screen bg-background_dark text-text_white">
        <br><br>
        <div class="w-[95%] mx-auto my-8 pb-2 bg-gradient-to-r from-main_blue to-light_blue rounded-lg ">

            <div class="flex">
                <h2 class="text-2xl text-center font-Title my-2 rounded-tl-md rounded-tr-md text-text_white mx-auto w-full">
                    {{ program.name }}
                </h2>
                <button @click="destroy(program)" class="flex justify-end ml-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-[30px] m-2" viewBox="0 0 23 22" fill="red"
                        stroke="red">
                        <path d="M9 17L8.5 7" stroke-width="1.7" stroke-linecap="round" />
                        <path d="M14 17L14.5 7" stroke-width="1.7" stroke-linecap="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M2.09229 4.75L2.75105 17.2629C2.89085 19.9185 5.08486 22 7.74413 22H15.2566C17.9159 22 20.11 19.9184 20.2497 17.2627L20.9081 4.75H19.2057L18.552 17.1734C18.4598 18.9261 17.0118 20.3 15.2566 20.3H7.74413C5.98901 20.3 4.54097 18.9262 4.44869 17.1735L3.79464 4.75H2.09229Z" />
                        <path d="M1 5.00002C9 2.99988 13.5 3 22 5.00002" stroke-width="1.7" stroke-linecap="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9 1.7H14C14.1657 1.7 14.3 1.83431 14.3 2V2.64554C14.3 2.81122 14.1657 2.94554 14 2.94554H9C8.83431 2.94554 8.7 2.81122 8.7 2.64554V2C8.7 1.83431 8.83431 1.7 9 1.7ZM7 2C7 0.89543 7.89543 0 9 0H14C15.1046 0 16 0.895431 16 2V2.64554C16 2.7665 15.9893 2.88496 15.9687 3H7.03131C7.01074 2.88496 7 2.7665 7 2.64554V2Z" />
                    </svg>
                </button>
            </div>

            <p>{{ program.status }}</p>

            <select v-model="form.status">
                <option value="current">current</option>
                <option value="inactive">inactive</option>
            </select>

            <div class="bg-[#131313]/50 w-full p-4">
                <a v-for="(training, trainingIndex) in program.trainings" :key="trainingIndex" :href="`/trainings/${training.id}`" >
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img v-if="training.exercises && training.exercises.length > 0" :src="training.exercises[0].icon_url" class="w-6 h-6 mr-2">
                            <p class="inline">{{ training.name }}</p>

                        </div>
                        <p class="inline">{{ training.exercises.length }} exercices</p>
                        <p class="inline">{{ training.exercises.reduce((total, exercise) => total + exercise.sets.length, 0)
                        }}
                            sets</p>
                    </div>
                    <hr v-if="trainingIndex !== program.trainings.length - 1"
                        class="h-px my-8 w-full bg-[#CCCCCC]/75 rounded">
                </a>
            </div>
            <button @click="create()" class="bg-main_blue px-4 py-2 rounded-full flex mx-auto my-4 text-3xl">+</button>
            <button class="bg-main_blue px-6 py-2 rounded-xl flex mx-auto mt-5 font-bold">Start Now</button>

            <!-- Modale Create -->
            <div class="bg-slate-900/50 w-full h-full backdrop-blur-sm top-0 fixed z-50 flex items-center justify-center"
                v-if="isOpen_create">
                <div class=" bg-gradient-to-br from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md w-full">
                    <div class="justify-between ">
                        <div class="flex items-center my-2">
                            <p class="mr-4">Name</p>
                            <input v-model="form_create.name" type="text" class="ml-auto rounded-lg text-text_dark">
                        </div>
                        <div class="flex items-center my-2">
                            <p class="mr-4">Number</p>
                            <input v-model="form_create.number" type="numver" class="ml-auto rounded-lg text-text_dark ">
                        </div>
                        <div class="flex items-center my-2">
                            <p class="mr-4">Date</p>
                            <input v-model="form_create.date" type="date" class="ml-auto rounded-lg text-text_dark">
                        </div>
                        <div class="flex items-center my-2">
                            <p class="mr-4">Muscles</p>
                            <input v-model="form_create.muscles" type="text" class="ml-auto rounded-lg text-text_dark">
                        </div>

                        <div class="justify-center flex mt-4">
                            <button @click="create2()" class="bg-main_blue rounded-full h-12 w-12">
                                <svg class="m-auto" width="33" height="24" viewBox="0 0 33 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 12.2545L11.6673 22.5088L31 2" stroke="#123252" stroke-width="2.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>
                <button @click="isOpen_create = false" class="ml-auto mb-auto text-4xl text-red-700 ">X</button>
            </div>
        </div>
    </div>
    <Navbar />
</template>

<script>
import EditButton from '@/Components/Onerep/EditButton.vue';
import AddButton from '@/Components/Onerep/AddButton.vue';
import Navbar from '@/Components/Onerep/Navbar.vue';

export default {
    props: ['program', 'training'],

    data() {
        return {
            isOpen_create: false,
            form: {
                status: this.program.status,
                id: this.program.id,
            },
            form_create: {
                name: this.selectedTraining ? this.selectedTraining.name : '',
                // type : this.selectedTraining ? this.selectedTraining.type : '',
                // muscles : this.selectedTraining ? this.selectedTraining.muscles : '',
                // icon_url : this.selectedTraining ? this.selectedTraining.icon_url : '',
                // number : this.selectedTraining ? this.selectedTraining.number : '',
                id: this.selectedTraining ? this.selectedTraining.id : '',
            }
        }
    },

    watch: {
        form: {
            deep: true,
            handler() {
                this.update(this.form)
            },
        },
    },

    methods: {
        // PROGRAM UPDATE CRUD
        update: function (form) {
            this.$inertia.put('/programs/' + form.id, form);
        },

        // PROGRAM DELETE CRUD
        destroy(program) {
            this.$inertia.delete('/programs/' + program.id, program)
        },

        // Training CREATE CRUD
        create() {
            this.editMode = true;
            this.isOpen_create = true;
        },

        create2() {
            //Ajouter l'id du programme à la requete
            this.form_create.program_id = this.program.id;
            //Envoyer la requete
            this.$inertia.post('/trainings', this.form_create)
        },
    },

    components: {
        AddButton, EditButton, Navbar
    },

}


</script>
