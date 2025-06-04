<template>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <main class="col-12">
                <section id="section1" class="px-md-3 px-2">
                    <div class="row py-md-3 py-2 px-md-3 px-2 border rounded justify-content-center ">
                        <div class="col-lg-6">
                            <div class="text-start">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#PersonalInfo">Personal </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Education">Education</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Skills">Skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  data-bs-toggle="tab" href="#Experience">Experience</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"  data-bs-toggle="tab" href="#Language">Language</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="PersonalInfo" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Personal Information</h5>
                                            <form action="" class="py-3">
                                                <label for="Fullname" class="form-label">Full Name</label>
                                                <input id="Fullname" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Email" class="form-label">Email Address</label>
                                                <input id="Email" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Phone" class="form-label">Phone Number</label>
                                                <input id="Phone" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Location" class="form-label">Location</label>
                                                <input id="Location" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="About" class="form-label">About</label>
                                                <textarea id="About" class="form-control shadow-none" rows="4"></textarea>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Education" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Education</h5>
                                            <form v-for="(getedu , index) in EducationArray" :key="index" class="py-3">
                                                <label for="University" class="form-label">School/University</label>
                                                <input id="University" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Prgram" class="form-label">Degree Prgram</label>
                                                <input id="Prgram" type="text" class="form-control shadow-none">
                                                <br>
                                                <div class="d-flex gap-3">
                                                    <div class="text-start w-50">
                                                        <label for="StartDate" class="form-label">Start Date</label>
                                                        <input id="StartDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                    <div class="text-start w-50">
                                                        <label for="EndDate" class="form-label">End Date</label>
                                                        <input id="EndDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                            </form>
                                            <br>
                                            <button @click="AddEducation" class="btn btn-dark"><i class="bi bi-plus-lg"></i> Add Education</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Skills" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Skills</h5>
                                            <form v-for="(getskill , index) in SkillArray" :key="index" class="py-3">
                                                <label for="skill" class="form-label">Technical Skills </label>
                                                <input id="skill" type="text" class="form-control shadow-none">
                                            </form>
                                            <br>
                                            <button @click="AddSkill" class="btn btn-dark"><i class="bi bi-plus-lg"></i> Add Skill</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Experience" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Experience</h5>
                                            <form v-for="(getexp , index) in ExperienceArray" :key="index" class="py-3">
                                                <label for="Company" class="form-label">Company</label>
                                                <input id="Company" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Position" class="form-label">Position</label>
                                                <input id="Position" type="text" class="form-control shadow-none">
                                                <br>
                                                <div class="d-flex gap-3">
                                                    <div class="text-start w-50">
                                                        <label for="StartDate" class="form-label">Start Date</label>
                                                        <input id="StartDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                    <div class="text-start w-50">
                                                        <label for="EndDate" class="form-label">End Date</label>
                                                        <input id="EndDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <br>
                                                <label for="Description" class="form-label">Job Description</label>
                                                <textarea id="Description" class="form-control shadow-none" rows="4"></textarea>
                                            </form>
                                            <br>
                                            <button @click="AddExperience" class="btn btn-dark"><i class="bi bi-plus-lg"></i> Add Experience</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Language" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Language</h5>
                                            <form v-for="(getlanguage , index) in LanguageArray" :key="index" class="py-3">
                                                <label for="skill" class="form-label">Spoken Languages</label>
                                                <input id="skill" type="text" class="form-control shadow-none">
                                            </form>
                                            <br>
                                            <button @click="AddLanguage" class="btn btn-dark"><i class="bi bi-plus-lg"></i> Add Language</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ChildTemplate1',
    data(){
        return{
            EducationArray: [
                {University: '', Program: '', StartDate: '', EndDate: ''}
            ],
            SkillArray: [
                {Skill: ''}
            ],
            ExperienceArray: [
                {Company: '', Position: '', StartDate: '', EndDate: '', Description: ''}
            ],
            LanguageArray: [
                {Language: ''}
            ]
        }
    },
    methods:{
        AddEducation(){
            this.EducationArray.push({
                University: '', Program: '', StartDate: '', EndDate: ''
            });
        },
        AddSkill(){
            this.SkillArray.push({
                Skill: ''
            });
        },
        AddExperience(){
            this.ExperienceArray.push({
                Company: '', Position: '', StartDate: '', EndDate: '', Description
            });
        },
        AddLanguage(){
            this.LanguageArray.push({
                Language: ''
            });
        }
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

section {
    padding: calc(35px + 1rem) 0;
    font-family: "Poppins", sans-serif;
    overflow-wrap: break-word;
}
</style>
