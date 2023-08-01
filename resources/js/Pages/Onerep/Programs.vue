<template>
    <div>
        <ProgramsComponent :programs="programs" :exercises="exercises" :sets="sets" :trainings="trainings" />
        <AddButton @click="create()" class="relative flex bottom-20" />
    </div>


    <!-- Modale Create -->
    <div class="bg-slate-900/50 w-full h-full backdrop-blur-sm top-0 fixed z-50 flex items-center justify-center"
        v-if="isOpen_create">
        <div class=" bg-gradient-to-br from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md w-full">
            <div class="justify-between ">
                <div class="flex items-center my-2">
                    <p class="mr-4">Name</p>
                    <input v-model="form_create.name" type="text" class="ml-auto rounded-lg">
                </div>
                <div class="flex items-center my-2">
                    <p class="mr-4">begin date</p>
                    <input v-model="form_create.begin_date" type="date" class="ml-auto rounded-lg">
                </div>
                <div class="flex items-center my-2">
                    <p class="mr-4">end date</p>
                    <input v-model="form_create.end_date" type="date" class="ml-auto rounded-lg">
                </div>
                <div class="flex items-center my-2">
                    <p class="mr-4">Status</p>
                    <select v-model="form_create.status" type="select" class="ml-auto rounded-lg">
                        <option value="current"> current </option>
                        <option value="inactive"> inactive </option>
                    </select>
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

    <Navbar />
</template>

<script>
import ProgramsComponent from '@/Components/Onerep/ProgramsComponent.vue';
import EditButton from '@/Components/Onerep/EditButton.vue';
import AddButton from '@/Components/Onerep/AddButton.vue';
import Navbar from '@/Components/Onerep/Navbar.vue';

export default {
    props: ["programs", "exercises", "sets", "trainings"],
    components: {
        ProgramsComponent, AddButton, EditButton, Navbar
    },

    data() {
        return {
            isOpen_edit: false,
            isOpen_create: false,
            selectedProgram: null,

            form_create: {
                name: this.selectedProgram ? this.selectedProgram.name : '',
                // type : this.selectedProgram ? this.selectedProgram.type : '',
                // muscles : this.selectedProgram ? this.selectedProgram.muscles : '',
                // icon_url : this.selectedProgram ? this.selectedProgram.icon_url : '',
                // number : this.selectedProgram ? this.selectedProgram.number : '',
                id: this.selectedProgram ? this.selectedProgram.id : '',
            }

        }
    },

    methods: {
        // CREATE
        create() {
            this.editMode = true;
            this.isOpen_create = true;
        },

        create2() {
            this.$inertia.post('/programs', this.form_create)
        }

    },
};
</script>
