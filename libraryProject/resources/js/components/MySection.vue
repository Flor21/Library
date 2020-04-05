<template>
    <div>
        <router-link to='/mySubjects'>
            Nuevo
        </router-link>
    </div>
</template>

<script>
    import mySubjects from '@/js/components/MySubjects'
    export default {
        mounted() {
            console.log('Component mounted.')
        } 
}
</script>    