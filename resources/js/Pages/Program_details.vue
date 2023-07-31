<template>
    <div>
        <ProgramDetailsComponent :program="program" :exercises="exercises" :sets="sets" :trainings="trainings" />

    </div>
</template>

<script>
import ProgramDetailsComponent from './../Components/Onerep/ProgramDetailsComponent.vue';

export default {
    props: ["programs", "exercises", "sets", "trainings", "program"],
    components: {
        ProgramDetailsComponent
    },
};
</script>
