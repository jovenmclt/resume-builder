<template>
    <ChildTemplate3Vue :MessageProps="MessageProps"/>
</template>

<script>
import ChildTemplate3Vue from '../Components/Template3/ChildTemplate3.vue'

export default {
    name: 'Template3',
    components: {ChildTemplate3Vue},
    props: {MessageProps:Array}
}
</script>

<style>

</style>
