<template>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <NavigationVue />
            <main class="col-12">
                <section id="section1">
                    <div class="row justify-content-center px-4">
                        <div class="text-center">
                            <h1 class="fw-semibold">Select your Template</h1>
                        </div>
                        <div class="col-12 mt-5">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="./Assets/template1.png" class="d-block w-100 border border-dark rounded" alt="...">
                                            </div>
                                            <div class="col-3">
                                                <img src="./Assets/template1.png" class="d-block w-100 border border-dark rounded" alt="...">
                                            </div>
                                            <div class="col-3">
                                                <img src="./Assets/template1.png" class="d-block w-100 border border-dark rounded" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="./Assets/template1.png" class="d-block w-100 border border-dark rounded" alt="...">
                                            </div>
                                            <div class="col-3">
                                                <img src="./Assets/template1.png" class="d-block w-100 border border-dark rounded" alt="...">
                                            </div>
                                            <div class="col-3">
                                                <img src="./Assets/template1.png" class="d-block w-100 border border-dark rounded" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <img  class="w-25" src="https://img.icons8.com/flat-round/64/back--v1.png" alt="back--v1"/>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <img class="w-25" src="https://img.icons8.com/flat-round/64/circled-chevron-right.png" alt="circled-chevron-right"/>
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

export default {
    name: 'ChildTemplates',
    components: { NavigationVue, FooterVue }
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
