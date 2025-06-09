<template>
    <ChildTemplate1 :MessageProps="MessageProps"/>
</template>

<script>
import ChildTemplate1 from '../Components/Template1/ChildTemplate1.vue';

export default {
    name: 'Template1',
    components: {ChildTemplate1},
    props: {MessageProps:Array}
}
</script>

<style>

</style>
