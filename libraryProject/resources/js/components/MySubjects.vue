<template>
    <div>
        <b-list-group>
            <div v-for="mySubject in mySubjects">
                <b-list-group-item variant="info">{{mySubject.subject_id}}</b-list-group-item>
                <b-list-group-item>{{mySubject.state}}</b-list-group-item>
            </div>
        </b-list-group>   
    </div>
</template>
    
<script>
    export default {    
        data() {
            return {
                mySubjects: [],
                mySubject: {
                    id:'',
                    user_id:'',
                    subject_id:'',
                    state:''
                },
            }
        },   
        created() {
            this.mSubjects();
        },
        methods: {
            mSubjects() {
                axios.get('/api/mySubjects')
               .then((response) => console.log(response.data));
               //.then((response) => {
                 //  this.mySubjects = response.data;
               //});
                    
            },
        },         
        mounted() {
            console.log('my.')
        }

    }
</script>
