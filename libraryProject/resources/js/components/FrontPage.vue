<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">      
                <div class="container-fluid">
                    <h1 class="text-center" style="font-size:300%">University subjects</h1>
                </div>   
                <img :src="require('../assets/front.jpg')" class="img-fluid" alt="Responsive image">                          
                               
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Example.')
        }
    }
</script>

<style>
    .text-center {
        color: #2e6ab6   
    }
    
</style>