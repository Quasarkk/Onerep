<template>
    <div class="h-full bg-[#141721] text-text_gray/80">
        <h2 class="text-2xl text-center text-text_white">Exercises</h2>
        <div class="w-[95%] mx-auto my-8">
            <div v-for="exercise in exercises" :key="exercise.id" class="bg-gradient-to-br from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md">
                <div class="flex justify-between ">
                        <img :src="exercise.icon_url" class="w-6 h-6 mr-2">
                        <h3 class="">{{ exercise.name }}</h3>
                        <p class=""> {{ exercise.number}}</p>
                        <p> {{ exercise.muscles}}</p>
                </div>
            </div>
            <AddButton/>
        </div>
    </div>
</template>

<script>

import AddButton from './../Components/AddButton.vue';
export default {
    props: ['exercises'],
    components: {
    AddButton,
    AddButton
},
};
</script>
