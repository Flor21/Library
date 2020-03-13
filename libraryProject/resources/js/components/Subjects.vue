<template>
    <nav class="navbar" style="background-color: #e3f2fd;">
        <a class="navbar-brand">Search subject</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info" type="submit">Search</button>
        </form>
        <my-section />

    </nav>
</template>

<script>
    import MySection from '@/js/components/MySection';

    export default {
        components: {
            MySection
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>