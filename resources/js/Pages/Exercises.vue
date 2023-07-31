<template>
    <div class="h-full bg-[#141721] text-text_gray/80">
        <h2 class="text-2xl text-center text-text_white">Exercises</h2>
        <div class="w-[95%] mx-auto my-8">
            <div v-for="exercise in exercises" :key="exercise.id"
                class="bg-gradient-to-br from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md">
                <div class="flex justify-between ">
                    <img :src="exercise.icon_url" class="w-6 h-6 mr-2">
                    <h3 class="">{{ exercise.name }}</h3>
                    <p class=""> {{ exercise.number }}</p>
                    <p> {{ exercise.muscles }}</p>
                    <EditButton @click="edit(exercise)" />
                </div>
            </div>
            <AddButton @click="create()" />
        </div>
    </div>

    <!-- Modale edit -->
    <div class="bg-slate-900/50 w-full h-full backdrop-blur-sm top-0 fixed z-50 flex items-center justify-center"
        v-if="isOpen_edit">
        <div class=" bg-gradient-to-br from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md w-full">
            <div class="justify-between ">
                <div class="flex items-center my-2">
                    <p class="mr-4">Name</p>
                    <input v-model="form.name" type="text" class="ml-auto rounded-lg">
                </div>
                <div class="flex items-center my-2">
                    <p class="mr-4">Type</p>
                    <input v-model="form.type" type="text" class="ml-auto rounded-lg">
                </div>
                <div class="flex items-center my-2">
                    <p class="mr-4">1rm</p>
                    <input v-model="form.onerm" type="text" class="ml-auto rounded-lg">
                </div>
                <div class="flex items-center my-2">
                    <p class="mr-4">Muscles</p>
                    <input v-model="form.muscles" type="text" class="ml-auto rounded-lg">
                </div>
                <div class="flex items-center my-2">
                    <p class="mr-4">Icon</p>
                    <input v-model="form.icon_url" type="text" class="ml-auto rounded-lg">
                </div>

                <div class="justify-center flex mt-4">
                    <button @click="update(form)" class="bg-main_blue rounded-full h-12 w-12">
                        <svg class="m-auto" width="33" height="24" viewBox="0 0 33 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 12.2545L11.6673 22.5088L31 2" stroke="#123252" stroke-width="2.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <button @click="isOpen_edit = false" class="ml-auto mb-auto text-4xl text-red-700 ">X</button>
    </div>

    <!-- New Modale Create -->
    <div class="bg-slate-900/50 w-full h-full backdrop-blur-sm top-0 fixed z-50 flex items-center justify-center"
    v-if="isOpen_create">
    <div class=" bg-gradient-to-br from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md w-full">
        <div class="justify-between ">
            <div class="flex items-center my-2">
                <p class="mr-4">Name</p>
                <input v-model="form_create.name" type="text" class="ml-auto rounded-lg">
            </div>
            <div class="flex items-center my-2">
                <p class="mr-4">Type</p>
                <input v-model="form_create.type" type="text" class="ml-auto rounded-lg">
            </div>
            <div class="flex items-center my-2">
                <p class="mr-4">1rm</p>
                <input v-model="form_create.onerm" type="text" class="ml-auto rounded-lg">
            </div>
            <div class="flex items-center my-2">
                <p class="mr-4">Muscles</p>
                <input v-model="form_create.muscles" type="text" class="ml-auto rounded-lg">
            </div>
            <div class="flex items-center my-2">
                <p class="mr-4">Icon</p>
                <input v-model="form_create.icon_url" type="text" class="ml-auto rounded-lg">
            </div>

            <div class="justify-center flex mt-4">
                <button @click="create2()" class="bg-main_blue rounded-full h-12 w-12">
                    <svg class="m-auto" width="33" height="24" viewBox="0 0 33 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 12.2545L11.6673 22.5088L31 2" stroke="#123252" stroke-width="2.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

        </div>
    </div>
    <button @click="isOpen_create = false" class="ml-auto mb-auto text-4xl text-red-700 ">X</button>
</div>

    <!-- Old Modale create  -->
    <!-- <div class="bg-slate-900/50 w-full h-full backdrop-blur-sm top-0 fixed z-50 flex items-center justify-center">
        <div class="">
            <input v-model="form_create.name" type="text" placeholder="Name">
            <input v-model="form_create.type" type="text" placeholder="Type">
            <input v-model="form_create.onerm" type="text" placeholder="1rm">
            <input v-model="form_create.muscles" type="text" placeholder="Muscles">
            <input v-model="form_create.icon_url" type="text" placeholder="Icon">

            <button @click="create2()" class="bg-orange-600 ">Create</button>
        </div>

        <button @click="isOpen_create = false" class="ml-auto mb-auto text-4xl text-red-700 ">X</button>
    </div> -->
</template>

<script>

import AddButton from './../Components/Onerep/AddButton.vue';
import EditButton from './../Components/Onerep/EditButton.vue'

export default {
    components: {
        AddButton,
        EditButton,
    },

    data() {
        return {
            isOpen_edit: false,
            isOpen_create: false,
            selectedExercise: null,
            form: {
                name: this.selectedExercise ? this.selectedExercise.name : '',
                // type : this.selectedExercise ? this.selectedExercise.type : '',
                // muscles : this.selectedExercise ? this.selectedExercise.muscles : '',
                // icon_url : this.selectedExercise ? this.selectedExercise.icon_url : '',
                // number : this.selectedExercise ? this.selectedExercise.number : '',
                id: this.selectedExercise ? this.selectedExercise.id : '',
            },

            form_create: {
                name: this.selectedExercise ? this.selectedExercise.name : '',
                // type : this.selectedExercise ? this.selectedExercise.type : '',
                // muscles : this.selectedExercise ? this.selectedExercise.muscles : '',
                // icon_url : this.selectedExercise ? this.selectedExercise.icon_url : '',
                // number : this.selectedExercise ? this.selectedExercise.number : '',
                id: this.selectedExercise ? this.selectedExercise.id : '',
            }

        }
    },

    props: ['exercises', 'selectedExercise'],

    methods: {
        // CRUD UPDATE
        edit(exercise) {
            this.form = Object.assign({}, exercise),
                this.isOpen_edit = true,
                this.selectedExercise = exercise,
                this.editMode = true
        },

        update: function (form) {
            this.$inertia.put('/exercises/' + form.id, form)
        },

        // CRUD CREATE

        create() {
            this.editMode = true;
            this.isOpen_create = true;
        },

        create2() {
            this.$inertia.post('/exercises', this.form_create)
        }

    },



};
</script>
