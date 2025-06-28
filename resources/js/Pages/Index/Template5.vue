<template>
    <ChildTemplate5 :MessageProps="MessageProps"/>
</template>

<script>
import ChildTemplate5 from '../Components/Template5/ChildTemplate5.vue';
export default {
    name: 'Template5',
    components: {ChildTemplate5},
    props: {MessageProps:Array}

}
</script>

<style>

</style>
