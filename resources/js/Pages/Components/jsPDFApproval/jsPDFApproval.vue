<template>
    <div v-if="ShowApproval" class="container-fluid container-css z-1">
        <div class="row justify-content-center">
            <main class="col-12">
                <section id="section1">
                    <div class="row justify-content-end">
                        <div class="col-12">
                            <div class="bg-white rounded">
                                <div class="text-center">
                                    <img src="./assets/question.png" width="200" alt="">
                                </div>
                                <div class="text-center pb-5 px-md-0 px-2">
                                    <h6 class="fw-bold text-dark">Would you like to download your resume?</h6>
                                    <p class="fw-light text-secondary ">If you click Yes, your resume will be generated <br> and downloaded as a PDF file.</p>
                                    <button class="btn btn-success rounded-5 py-2 w-75">Yes, proceed with download.</button>
                                    <button @click="btnShowApproval" class="btn btn-outline-secondary rounded-5 mt-3 py-2 w-75">Go back to editing my resume.</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <div v-else class="text-end position-fixed" style="bottom: 10px; right: 2%;">
        <button  @click="btnShowApproval" class="btn btn-dark rounded-5"><img width="30" height="30" src="./assets/pdf file.png" alt=""> <span class="pe-2" style="font-size: 13px;">Download CV</span></button>
    </div>
</template>

<script>
export default {
    name: 'jsPDFApproval',
    data(){
        return{
            ShowApproval: false
        }
    },
    methods:{
        btnShowApproval(){
            this.ShowApproval = !this.ShowApproval
        }
    }
}
</script>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

section {
    font-family: "Poppins", sans-serif;
    overflow-wrap: break-word;
}

.container-css{
    height: 100vh;
    background-color: rgba(86, 88, 88, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>
