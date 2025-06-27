<template>
    <ChildTemplate4  :MessageProps="MessageProps"/>
</template>

<script>
import ChildTemplate4 from '../Components/Template4/ChildTemplate4.vue';
export default {
    name: 'Template4',
    components: {ChildTemplate4},
    props: {MessageProps:Array}
}
</script>

<style>

</style>
