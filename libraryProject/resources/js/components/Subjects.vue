<template>
    <b-navbar  style="background-color: #e3f2fd;">
        <div>
            <b-button pill variant="outline-info"  @click="mySubject">My Subject</b-button>
        </div>
        <b-navbar-nav class="ml-auto">
            <b-nav-form >
                <b-form-input v-model="text" class="mr-sm-2" placeholder="Search subject"></b-form-input>
                <b-button pill variant="outline-info" class="my-2 my-sm-0" @click="search(text)">Search</b-button>
            </b-nav-form>
        </b-navbar-nav>
    </b-navbar>
</template>

<script>
    export default {
        data() {
            return{
                text:''

            }
        },
        methods: {
            mySubject() {
                this.$router.push('mySubjects')
                //#6cb2eb #6fa9da"
            },
            search(textSearch) {
                this.text = textSearch;
                localStorage.setItem('text',this.text);
               this.$router.push('search');
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
        //fas-2196@hotmail.com
        //12345678
    }
</script>