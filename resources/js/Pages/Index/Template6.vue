<template>
    <ChildTemplate6Vue :MessageProps="MessageProps"/>
</template>

<script>
import ChildTemplate6Vue from '../Components/Template6/ChildTemplate6.vue'
export default {
    name: 'Template6',
    components: {ChildTemplate6Vue},
    props: {MessageProps:Array}
}
</script>

<style>

</style>
