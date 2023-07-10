<template>
    <div class="h-screen bg-[#141721] text-white">
        <h2 class="text-2xl text-center">Programs</h2>
        <div class="w-10/12 mx-auto my-8">
            <div v-for="program in programs" class="bg-gradient-to-r from-[#3988FF] to-[#90DDF0] p-4 my-4 rounded-md">
                <h3>{{ program.name }}</h3>
                <p> {{ program.begin_date}}</p>
                <p> {{ program._date}}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['programs'],
};
</script>
