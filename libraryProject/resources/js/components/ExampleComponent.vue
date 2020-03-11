<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">      
                <div class="container-fluid">
                    <h1 class="text-center" style="font-size:300%">Flower Library</h1>
                </div>   
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="https://lh6.googleusercontent.com/proxy/lAy6J-Cc1Qk_wL93cv0LUvZKEXzGboP48E4rFX5tH9Vq-cLg9XiBgm8UPrkOnAMZmXMSGu4BIIxXpOE-HY10Wjzff8bo6JIA9ws19jdzgV3IrtOZIQDJIGHUBijRrB7k0CZOyY8pZr8" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://static.iris.net.co/dinero/upload/images/2017/6/15/246597_1.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.maximaonline.com.ar/multimedia/noticias/img_77139_ebookIsmaelHerrero.jpg" alt="Third slide">
                      </div>                      
                    </div>
                  </div>                                 
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    .text-center {
        color: #f94ec0   
    }
    
</style>