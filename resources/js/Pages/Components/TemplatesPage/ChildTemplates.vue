<template>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <NavigationVue />
            <main class="col-12">
                <section id="section1">
                    <div class="row justify-content-center px-4">
                        <div class="text-center">
                            <h2 class="fw-semibold">Select your Template</h2>
                        </div>
                        <div class="col-12 mt-5">
                            <div id="CarouselTemplate" class="carousel slide d-md-block d-none" data-bs-ride="carousel">
                                <div class="carousel-inner ">
                                    <div class="carousel-item active ">
                                        <div class="row justify-content-center">
                                            <div v-for="(getTemp, index) in Templates_Container1" :key="index" class="col-3">
                                                <a href="#">
                                                    <img :src="getTemp.srcs" class="d-block w-100 border border-dark rounded" alt="...">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        <div class="row justify-content-center">
                                            <div v-for="(getTemp, index) in Templates_Container2" :key="index" class="col-3">
                                                <a href="#">
                                                    <img :src="getTemp.srcs" class="d-block w-100 border border-dark rounded" alt="...">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn carousel-control-prev" data-bs-target="#CarouselTemplate" data-bs-slide="prev">
                                    <img  class="w-25" src="https://img.icons8.com/fluency/48/back.png" alt="back"/>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="btn carousel-control-next" data-bs-target="#CarouselTemplate" data-bs-slide="next">
                                    <img class="w-25" src="https://img.icons8.com/fluency/48/forward--v2.png" alt="forward--v2"/>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            <div id="carouselExample" class="carousel slide d-md-none d-block" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div v-for="(getTemp, index) in AllTemplates" :key="index" :class="['carousel-item', { active: index === 0 }]" >
                                        <a href="#">
                                            <img :src="getTemp.srcs" class="d-block w-75 mx-auto border border-dark rounded"  alt="Slide image" />
                                        </a>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <img  class="w-25" src="https://img.icons8.com/fluency/48/back.png" alt="back"/>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                   <img class="w-25" src="https://img.icons8.com/fluency/48/forward--v2.png" alt="forward--v2"/>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <FooterVue />
            </main>
        </div>
    </div>
</template>

<script>
import FooterVue from '../Footer/Footer.vue'
import NavigationVue from '../Navigation/Navigation.vue'

import temp1 from './Assets/Template1.png'
import temp2 from './Assets/Template2.png'
import temp3 from './Assets/Template3.png'
import temp4 from './Assets/Template4.png'
import temp5 from './Assets/Template5.png'
import temp6 from './Assets/Template6.png'
export default {
    name: 'ChildTemplates',
    components: { NavigationVue, FooterVue },
    data(){
        return{
            AllTemplates: [
                {srcs: temp1, ref: ''},
                {srcs: temp2, ref: ''},
                {srcs: temp3, ref: ''},
                {srcs: temp4, ref: ''},
                {srcs: temp5, ref: ''},
                {srcs: temp6, ref: ''},
            ],
            Templates_Container1: [
                {srcs: temp1, ref: ''},
                {srcs: temp2, ref: ''},
                {srcs: temp3, ref: ''},
            ],
            Templates_Container2: [
                {srcs: temp4, ref: ''},
                {srcs: temp5, ref: ''},
                {srcs: temp6, ref: ''},
            ]
        }
    },
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

section {
    padding: calc(35px + 1rem) 0;
    font-family: "Poppins", sans-serif;
    overflow-wrap: break-word;
}
.carousel-item img {
        object-fit: cover;
}
</style>
