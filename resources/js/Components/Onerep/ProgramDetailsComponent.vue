<template>
    <div class="h-screen bg-background_dark text-text_white">
        <br><br>
        <div class="w-[95%] mx-auto my-8 pb-2 bg-gradient-to-r from-main_blue to-light_blue rounded-lg ">
            <h2 class="text-2xl text-center font-Title my-2 rounded-tl-md rounded-tr-md text-text_white"> {{ program.name }}
            </h2>
            <p>{{ program.status }}</p>

            <select v-model="form.status">
                <option value="current">current</option>
                <option value="inactive">inactive</option>
            </select>

            <div class="bg-[#131313]/50 w-full p-4">
                <div v-for="(training, trainingIndex) in program.trainings" :key="trainingIndex">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img :src="training.exercises[0].icon_url" class="w-6 h-6 mr-2">
                            <p class="inline">{{ training.name }}</p>

                        </div>
                        <p class="inline">{{ training.exercises.length }} exercices</p>
                        <p class="inline">{{ training.exercises.reduce((total, exercise) => total + exercise.sets.length, 0)
                        }}
                            sets</p>
                    </div>
                    <hr v-if="trainingIndex !== program.trainings.length - 1"
                        class="h-px my-8 w-full bg-[#CCCCCC]/75 rounded">
                </div>
            </div>
            <button class="bg-main_blue px-4 py-2 rounded-full flex mx-auto my-4 text-3xl">+</button>
            <button class="bg-main_blue px-6 py-2 rounded-xl flex mx-auto mt-5 font-bold">Start Now</button>
        </div>
    </div>
</template>

<script>
import EditButton from '@/Components/Onerep/EditButton.vue';
import AddButton from '@/Components/Onerep/AddButton.vue';

export default {
    props: ['program'],

    data() {
        return {
            form: {
                status: this.program.status,
                id : this.program.id,
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
        update: function (form) {
            this.$inertia.put('/programs/' + form.id, form);
        }
    },

    components: {
        AddButton, EditButton,
    },

}


</script>
