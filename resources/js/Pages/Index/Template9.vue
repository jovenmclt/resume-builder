<template>
    <ChildTemplate9 :MessageProps="MessageProps"/>
</template>

<script>
import ChildTemplate9 from '../Components/Template9/ChildTemplate9.vue';
export default {
    name: 'Template9',
    components: {ChildTemplate9},
    props: {MessageProps:Array}
}
</script>

<style>

</style>
