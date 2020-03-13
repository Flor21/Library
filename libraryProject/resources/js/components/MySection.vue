<template>
    <div>
        <b-button pill variant="info" v-on:click="callMySubjectsComponent">My Subjects</b-button>
    </div>
</template>

<script>
    export default {
        methods: {
            callMySubjectsComponent() {
                return view('my')
            }
        }, 
        mounted() {
            console.log('Component mounted.')
        } 
}
</script>