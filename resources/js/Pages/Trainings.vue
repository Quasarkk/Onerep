<template>
    <div class="h-screen bg-[#141721] text-white">
        <h2 class="text-2xl text-center">Exercises</h2>
        <div class="w-10/12 mx-auto my-8">
            <div v-for="training in trainings">
                <p>{{ training.name }}</p>
                <p>{{ training.number }}</p>
                <p>{{ training.date }}</p>
                <p>{{ training.muscles }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['trainings'],
};
</script>
