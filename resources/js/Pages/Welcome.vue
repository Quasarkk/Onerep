<template>
    <div class="h-screen bg-[#141721] text-white">
        <h2 class="text-2xl text-center">Next training :</h2>

        <div class="w-[95%] mx-auto my-8">
            <div v-for="program in programs" class="bg-gradient-to-r from-[#3988FF] to-[#90DDF0] p-2 my-4 rounded-lg">
                <h2 class="text-center text-xl  font-bold -m-2 bg-[#131313]/70 rounded-tl-md rounded-tr-md" >{{ program.name }}</h2>
                <div class="justify-between flex p-4">
                    <div class="bg-[#141721] w-[30%] text-center rounded text-sm" v-for="training in program.trainings">
                        <p>training n°{{ training.number }}</p>
                        <p>{{ training.name }}</p>
                        <p>{{ training.muscles }}</p>
                    </div>
                </div>
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
