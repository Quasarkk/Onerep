<template>
    <div class="h-screen bg-[#141721] text-white">
        <h2 class="text-2xl text-center">Welcome</h2>

        <div class="w-10/12 mx-auto my-8">
            <div v-for="program in programs" class="bg-gradient-to-r from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md">
                <h3 class="text-center text-2xl">{{ program.name }}</h3>
                <p>{{ program.begin_date }}</p>
                <p>{{ program.end_date }}</p>
            </div>

            <div v-for="training in trainings">
                <p>{{ training.name }}</p>
                <p>{{ training.number }}</p>
                <p>{{ training.date }}</p>
                <p>{{ training.muscles }}</p>
            </div>

            <div v-for="exercise in exercises">
                <div class="flex">
                    <p class="mr-[20%]">{{ exercise.name }}</p>
                    <p>{{ exercise.muscles }}</p>
                </div>

            </div>

            <div v-for="set in sets" class="bg-gradient-to-r from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md">
                <h3>{{ set.number }}</h3>
                <p> {{ set.reps_previous }}</p>
                <p> {{ set.reps_done }}</p>
                <p> {{ set.weight_previous }}</p>
                <p> {{ set.weight_done }}</p>
                <p>{{ set['1rm'] }}</p>
                <p> {{ set['1rm_reps'] }}</p>
                <p> {{ set['1rm_weight'] }}</p>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    props: ['programs', 'exercises', 'sets', 'trainings'],
};
</script>
