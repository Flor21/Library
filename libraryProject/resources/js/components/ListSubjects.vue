<template>
    <div>
        <b-tabs content-class="mt-3">
            <b-tab title="1°" active>
                <div v-for="subject in subject1">
                    <b-card >
                        <b-container>
                            <b-row>
                                <b-col cols="8">
                                    <b-card-text>
                                        {{subject.name}}
                                    </b-card-text>
                                    <div style="background-color: #e3f2fd;"> 
                                        {{subject.type}}   
                                    </div>
                                </b-col>
                                <b-col cols="3"></b-col>
                                <b-col col lg="1">
                                    <b-form-checkbox inline></b-form-checkbox>
                                </b-col>
                            </b-row>
                        </b-container>
                    </b-card>
                </div>
            </b-tab>
            <b-tab title="2°">
                <div v-for="subject in subject2">
                    <b-card >
                        <b-container>
                            <b-row>
                                <b-col cols="8">
                                    <b-card-text>
                                        {{subject.name}}
                                    </b-card-text>
                                    <div style="background-color: #e3f2fd;"> 
                                        {{subject.type}}   
                                    </div>
                                </b-col>
                                <b-col cols="3"></b-col>
                                <b-col col lg="1">
                                    <b-form-checkbox inline></b-form-checkbox>
                                </b-col>
                            </b-row>
                        </b-container> 
                    </b-card>
                </div>
            </b-tab>
            <b-tab title="3°">
                <div v-for="subject in subject3">
                    <b-card >
                        <b-container>
                            <b-row>
                                <b-col cols="8">
                                    <b-card-text>
                                        {{subject.name}}
                                    </b-card-text>
                                    <div style="background-color: #e3f2fd;"> 
                                        {{subject.type}}   
                                    </div>
                                </b-col>
                                <b-col cols="3"></b-col>
                                <b-col col lg="1">
                                    <b-form-checkbox inline></b-form-checkbox>
                                </b-col>
                            </b-row>
                        </b-container>                         
                    </b-card>
                </div>
            </b-tab>
            <b-tab title="4°">
                <div v-for="subject in subject4">
                    <b-card >
                        <b-container>
                            <b-row>
                                <b-col cols="8">
                                    <b-card-text>
                                        {{subject.name}}
                                    </b-card-text>
                                    <div style="background-color: #e3f2fd;"> 
                                        {{subject.type}}   
                                    </div>
                                </b-col>
                                <b-col cols="3"></b-col>
                                <b-col col lg="1">
                                    <b-form-checkbox inline></b-form-checkbox>
                                </b-col>
                            </b-row>
                        </b-container>
                    </b-card>
                </div>
            </b-tab>
            <b-tab title="5°">
                <div v-for="subject in subject5">
                    <b-card >
                        <b-container>
                            <b-row>
                                <b-col cols="8">
                                    <b-card-text>
                                        {{subject.name}}
                                    </b-card-text>
                                    <div style="background-color: #e3f2fd;"> 
                                        {{subject.type}}   
                                    </div>
                                </b-col>
                                <b-col cols="3"></b-col>
                                <b-col col lg="1">
                                    <b-form-checkbox inline></b-form-checkbox>
                                </b-col>
                            </b-row>
                        </b-container>
                    </b-card>
                </div>
            </b-tab>
        </b-tabs>
    </div>
</template>

<script>
    export default {    
        data() {
            return {
                subjects: [],
                subject: {
                    id:'',
                    name:'',
                    year:'',
                    dictation:'',
                    type:''
                },
                subject_id:''
            }
        },   
        created() {
            this.aSubjects();
        },
        methods: {
            aSubjects() {
                axios.get(`/api/subjects`)
               .then((response) => {
                   this.subjects = response.data;
               });
                    
            },
        },
        computed: {
            subject1: function() {
                return this.subjects.filter(i => i.year == '1');
            },
            subject2: function() {
                return this.subjects.filter(i => i.year == '2');
            },
            subject3: function() {
                return this.subjects.filter(i => i.year == '3');
            },
            subject4: function() {
                return this.subjects.filter(i => i.year == '4');
            },
            subject5: function() {
                return this.subjects.filter(i => i.year == '5');
            }
        },
         
        mounted() {
            console.log('Component mounted.')
        }

    }
</script>