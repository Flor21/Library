<template>
    <b-navbar  style="background-color: #e3f2fd;">
        <div>
            <b-button pill variant="outline-info"  @click="mySubject">My Subject</b-button>
        </div>
        <b-navbar-nav class="ml-auto">
            <b-nav-form >
                <b-form-input class="mr-sm-2" placeholder="Search subject"></b-form-input>
                <b-button pill variant="outline-info" class="my-2 my-sm-0" type="submit">Search</b-button>
            </b-nav-form>
        </b-navbar-nav>
    </b-navbar>
</template>

<script>
    export default {
        methods: {
            mySubject() {
                this.$router.push('mySubjects')
                //#6cb2eb #6fa9da"
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>