<template>
    <div>
        <div v-for="showText in showTexts">
            <b-card class="text-center">
                <b-container>
                    <b-row>
                        <b-col cols="8">
                            <b-card-text>
                                {{showText.name}}
                            </b-card-text>
                                <div style="background-color: #e3f2fd;"> 
                                   year: {{showText.year}}   
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
    </div>
</template>
<script>
    export default {  
        data() {
            return {
                showTexts:[],
                showText: {
                    name: '',
                    year: '',
                    dictation: '',
                    type: ''
                }
            }
        },            
        created() {
            console.log('Filter.');
            const text = localStorage.getItem('text');
            axios.get(`api/subject/${text}`)
               .then((response) => {
                this.showTexts = response.data;
                //console.log('Filter.', response.data);
            });
        }
    }
</script>