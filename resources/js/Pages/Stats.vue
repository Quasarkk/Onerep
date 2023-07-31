<template>
    <LineComponent />
    <Applayout>
        <h1>test</h1>
    </Applayout>
    <Navbar />
</template>

<script>

import LineComponent from './../Components/LineComponent.vue'
import Navbar from './../Components/Navbar.vue';

export default {
    name: 'App',
    components: { LineComponent, Navbar }
}
</script>
