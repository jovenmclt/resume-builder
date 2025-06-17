<template>
    <ChildTemplate2 :MessageProps="MessageProps"/>
</template>

<script>
import ChildTemplate2 from '../Components/Template2/ChildTemplate2.vue';
export default {
    name: 'Template2',
    components: {ChildTemplate2},
    props: {MessageProps:Array}
}
</script>

<style>

</style>
