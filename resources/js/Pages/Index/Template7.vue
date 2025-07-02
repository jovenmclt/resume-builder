<template>
    <ChildTemplate7 :MessageProps="MessageProps" />
</template>

<script>
import ChildTemplate7 from '../Components/Template7/ChildTemplate7.vue';
export default {
    name: 'Template7',
    components: {ChildTemplate7},
    props: {MessageProps:Array}
}
</script>

<style>

</style>
