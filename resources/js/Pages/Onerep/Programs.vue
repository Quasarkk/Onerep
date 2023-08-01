<template>
    <div>
        <ProgramsComponent :programs="programs" :exercises="exercises" :sets="sets" :trainings="trainings"/>
        <AddButton class="mt-auto"/>
        <EditButton/>
    </div>
</template>

<script>
import ProgramsComponent from '@/Components/Onerep/ProgramsComponent.vue';
import EditButton from '@/Components/Onerep/EditButton.vue';
import AddButton from '@/Components/Onerep/AddButton.vue';

export default {
    props: ["programs", "exercises", "sets", "trainings"],
    components: {
        ProgramsComponent, AddButton, EditButton,
    },
};
</script>
