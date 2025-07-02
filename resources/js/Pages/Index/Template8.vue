<template>
    <ChildTemplate8 :MessageProps="MessageProps" />
</template>

<script>
import ChildTemplate8 from '../Components/Template8/ChildTemplate8.vue';
export default {
    name: 'Template8',
    components: {ChildTemplate8},
    props:{MessageProps:Array}
}
</script>

<style>

</style>
