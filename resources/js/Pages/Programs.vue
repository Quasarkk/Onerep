<template>
    <div>
        <ProgramsComponent :programs="programs" :exercises="exercises" :sets="sets" :trainings="trainings" />
    </div>
</template>

<script>
import ProgramsComponent from './../Components/ProgramsComponent.vue';

export default {
    props: ["programs", "exercises", "sets", "trainings"],
    components: {
        ProgramsComponent
    },
};
</script>
