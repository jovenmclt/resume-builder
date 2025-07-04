<template>
    <div class="container-xxl">
        <div class="row justify-content-center">
            <main class="col-12">
                <section id="section1" >
                    <div class="row justify-content-center ">
                        <div class="d-flex flex-lg-nowrap flex-wrap justify-content-between px-4 pb-4">
                            <div class="text-start">
                                <h1 class="fw-bold">Resume Builder </h1>
                                <p class="fw-light mb-0">Build your resume, showcase your potential fast, simple, and professional.</p>
                            </div>
                            <div class="text-start mt-md-4 mt-2">
                                 <button @click="btnshowPreview" style="background-color: #333446;" class="btn text-white rounded-5 d-md-block d-none"><img width="25" height="25" src="./assets/pdf file.png" alt=""> <span class="pe-2" style="font-size: 13px;">Generate PDF</span></button>
                                <button @click="btnDownload" style="background-color: #333446;" class="btn text-white rounded-5 d-md-none d-block"><img width="25" height="25" src="./assets/pdf file.png" alt=""> <span class="pe-2" style="font-size: 13px;">Generate PDF</span></button>
                                <div v-if="PdfPreview" class="iframe-css z-1 d-flex flex-column">
                                    <iframe id="pdf-preview" class="w-75 h-75 py-3 px-3 bg-white"></iframe>
                                    <div class="text-start w-75">
                                        <button @click="btnClosePreview" class="btn btn-secondary w-50 rounded-0"><i class="bi bi-x-lg"></i> Close Preview</button>
                                        <button @click="btnDownloadPreview" class="btn btn-dark w-50 rounded-0"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="text-start border py-4 px-3 rounded shadow-sm" style="min-height: 840px;">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link active text-secondary" data-bs-toggle="tab" href="#PersonalInfo"><i class="bi bi-person-fill"></i> Personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary" data-bs-toggle="tab" href="#Education"><i class="bi bi-mortarboard-fill"></i> Education</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary" data-bs-toggle="tab" href="#Skills"><i class="bi bi-layers-fill"></i> Skills</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary"  data-bs-toggle="tab" href="#Experience"><i class="bi bi-briefcase-fill"></i> Experience</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="PersonalInfo" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Personal Information</h5>
                                            <form v-for="(InputInfo, index) in PersonalArray" :key="index" class="py-3">
                                                <label  for="profile" class="form-label">Profle</label>
                                                <input  @change="UploadingProfile" id="profile" type="file" class="form-control shadow-none" accept="image/*">
                                                <br>
                                                <label for="Fullname" class="form-label">Full Name</label>
                                                <input v-model="InputInfo.Fullname" id="Fullname" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Email" class="form-label">Email Address</label>
                                                <input v-model="InputInfo.Email" id="Email" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Career" class="form-label">Career Objective</label>
                                                <input v-model="InputInfo.Career" id="Career" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Phone" class="form-label">Phone Number</label>
                                                <input v-model="InputInfo.Phone" id="Phone" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Location" class="form-label">Location</label>
                                                <input v-model="InputInfo.Location" id="Location" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Summary" class="form-label">Professional Summary</label>
                                                <textarea v-model="InputInfo.Summary" id="Summary" class="form-control shadow-none" rows="7"></textarea>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Education" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Education</h5>
                                            <form v-for="(InputEdu , index) in EducationArray" :key="index" class="py-3">
                                                <i @click="DeleteEducation(index)"  v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="University" class="form-label">School/University</label>
                                                <input v-model="InputEdu.University" id="University" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Prgram" class="form-label">Degree Prgram</label>
                                                <input v-model="InputEdu.Program" id="Prgram" type="text" class="form-control shadow-none">
                                                <br>
                                                <div class="d-flex gap-3">
                                                    <div class="text-start w-50">
                                                        <label for="StartDate" class="form-label">Start Date</label>
                                                        <input v-model="InputEdu.StartDate" id="StartDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                    <div class="text-start w-50">
                                                        <label for="EndDate" class="form-label">End Date</label>
                                                        <input v-model="InputEdu.EndDate" id="EndDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                            </form>
                                            <br>
                                            <button @click="AddEducation" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Education</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Skills" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Skills</h5>
                                            <form v-for="(InputSkill , index) in SkillArray" :key="index" class="py-3">
                                                <i @click="DeleteSkill(index)" v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="skill" class="form-label">Technical Skills </label>
                                                <input v-model="InputSkill.Skill" id="skill" type="text" class="form-control shadow-none">
                                            </form>
                                            <br>
                                            <button @click="AddSkill" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Skill</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Experience" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Experience</h5>
                                            <form v-for="(InputExp , index) in ExperienceArray" :key="index" class="py-3">
                                                <i @click="DeleteExperience(index)" v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="Company" class="form-label">Company</label>
                                                <input v-model="InputExp.Company" id="Company" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Position" class="form-label">Position</label>
                                                <input v-model="InputExp.Position" id="Position" type="text" class="form-control shadow-none">
                                                <br>
                                                <div class="d-flex gap-3">
                                                    <div class="text-start w-50">
                                                        <label for="StartDate" class="form-label">Start Date</label>
                                                        <input v-model="InputExp.StartDate" id="StartDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                    <div class="text-start w-50">
                                                        <label for="EndDate" class="form-label">End Date</label>
                                                        <input v-model="InputExp.EndDate" id="EndDate" type="date" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <br>
                                                <label for="Description" class="form-label">Job Description</label>
                                                <textarea v-model="InputExp.Description" id="Description" class="form-control shadow-none" rows="5"></textarea>
                                            </form>
                                            <br>
                                            <button @click="AddExperience" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Experience</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt-lg-0 mt-4" >
                            <div id="TemplatePdf" class="border bg-white shadow-sm rounded position-sticky top-0" style="min-height: 840px;" >
                                <div class="d-flex justify-content-center gap-4 py-4 px-4" style="background-color: #E4F6FB;">
                                    <div v-for="(getpersonal, index) in PersonalArray" :key="index" style="width: 70%;">
                                        <div class="d-flex gap-3">
                                            <div class="text-start">
                                                <img v-if="getpersonal.Profile" :src="getpersonal.Profile" alt="" width="90" height="90" style="border-radius: 100%;">
                                                <img v-else src="./assets/Photo.png" alt="" width="90" height="90" style="border-radius: 100%;">
                                            </div>
                                            <div class="text-start">
                                                <h2 class="fw-semibold text-dark mb-1 mt-3">{{ getpersonal.Fullname }}</h2>
                                                <h5 class="fw-noraml text-primary mb-1 ">{{ getpersonal.Career }}</h5>
                                            </div>
                                        </div>
                                        <div class="text-start mt-3">
                                            <p class="fw-normal text-dark mb-0" style="font-size: 12px;">{{ getpersonal.Summary }}</p>
                                        </div>
                                    </div>
                                    <div v-for="(getpersonal, index) in PersonalArray" :key="index" style="width: 35%;">
                                        <div class="text-start mt-2">
                                            <p class="fw-normal text-primary mb-0" style="font-size: 14px;">Phone</p>
                                            <a class="fw-semibold text-dark mb-0" style="font-size: 12px;">{{ getpersonal.Phone }}</a>
                                        </div>
                                        <div class="text-start mt-1">
                                            <p class="fw-normal text-primary mb-0" style="font-size: 14px;">Email</p>
                                            <a class="fw-semibold text-dark mb-0" style="font-size: 12px;">{{ getpersonal.Email }}</a>
                                        </div>
                                        <div class="text-start mt-1">
                                            <p class="fw-normal text-primary mb-0" style="font-size: 14px;">Location</p>
                                            <a class="fw-semibold text-dark mb-0" style="font-size: 12px;">{{ getpersonal.Location }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center gap-4 py-4 px-4">
                                    <div style="width: 70%;">
                                        <div class="text-start">
                                            <h5 class="fw-noraml text-primary mb-1 ">WORK EXPERIENCE</h5>
                                        </div>
                                        <template v-for="(getexp, index) in ExperienceArray" :key="index">
                                            <div class="text-start mt-3">
                                                <p class="fw-semibold text-dark mb-1" style="font-size: 14px;">{{ getexp.Position }} | {{ getexp.Company }}</p>
                                                <p class="fw-normal text-darl mb-1" style="font-size: 12px;">{{ getexp.StartDate }} - {{ getexp.EndDate }}</p>
                                                <p class="fw-normal text-darl mb-1" style="font-size: 12px;">{{ getexp.Description}} </p>
                                            </div>
                                        </template>
                                    </div>
                                    <div style="width: 35%;">
                                        <div class="text-start">
                                            <h5 class="fw-noraml text-primary mb-1 ">EDUCATION</h5>
                                        </div>
                                        <template v-for="(getedu, index) in EducationArray" :key="index">
                                            <div class="text-start mt-3">
                                                <p class="fw-semibold text-dark mb-1" style="font-size: 14px;">{{ getedu.Program }}</p>
                                                <p class="fw-normal text-darl mb-1" style="font-size: 12px;">{{ getedu.University}} </p>
                                                <p class="fw-normal text-darl mb-1" style="font-size: 12px;">{{ getedu.StartDate }} - {{ getedu.EndDate }}</p>

                                            </div>
                                        </template>
                                        <br>
                                        <div class="text-start">
                                            <h5 class="fw-noraml text-primary mb-1 ">SKILLS</h5>
                                        </div>
                                        <template v-for="(getskill, index) in SkillArray" :key="index">
                                           <span class="fw-normal text-dark mb-1" style="font-size: 14px;">{{ getskill.Skill}}, </span>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <ChatBotVue :MessageProps="MessageProps"/>
            </main>
        </div>
    </div>
</template>

<script>
import ChatBotVue from '../../Index/ChatBot.vue';
import html2pdf from 'html2pdf.js'
export default {
    name: 'ChildTemplate5',
    components: {ChatBotVue},
    props: {MessageProps:Array},
    data(){
        return{
            PersonalArray: [
                {Profile: '', Fullname: 'Emily Jackson', Email: 'kate.bishop@katedesign.com', Career: 'Full-Stack Developer', Phone: '0933-412-**** ', Location: '742 Evergreen Terrace USA', Summary: 'Over 5 years of professional experience conducting UX research and designing interactive end-to-end user flows. I enjoy working in close collaboration with teams across technology, business and design.'}
            ],
            EducationArray: [
                {University: 'Westfield University', Program: 'BS in Information Technology', StartDate: '2025-06-10', EndDate: '2025-06-10'},
                {University: 'Westfield University', Program: 'BS in Information Technology', StartDate: '2025-06-10', EndDate: '2025-06-10'},
                {University: 'Westfield University', Program: 'BS in Information Technology', StartDate: '2025-06-10', EndDate: '2025-06-10'},
                {University: 'Westfield University', Program: 'BS in Information Technology', StartDate: '2025-06-10', EndDate: '2025-06-10'},
                {University: 'Westfield University', Program: 'BS in Information Technology', StartDate: '2025-06-10', EndDate: '2025-06-10'},
                {University: 'Westfield University', Program: 'BS in Information Technology', StartDate: '2025-06-10', EndDate: '2025-06-10'},
            ],
            SkillArray: [
                {Skill: 'Html'},{Skill: 'Css'},{Skill: 'Javascript'},{Skill: 'PHP'},{Skill: 'Bootstrap'},{Skill: 'Vuejs'},{Skill: 'Laravel'},{Skill: 'Business Analysis'},{Skill: 'UX Research'},{Skill: 'Information Architecture'},
            ],
            ExperienceArray: [
                {Company: 'Nexora Tech Solutions', Position: 'Back-end Web Developer', StartDate: '2025-06-10', EndDate: '2025-06-10', Description: 'Developed and maintained server-side applications, optimized database queries, and ensured system reliability for internal tools and enterprise solutions. Collaborated with cross-functional teams to support automation, improve data workflows, and enhance system performance'},
                {Company: 'Nexora Tech Solutions', Position: 'Back-end Web Developer', StartDate: '2025-06-10', EndDate: '2025-06-10', Description: 'Developed and maintained server-side applications, optimized database queries, and ensured system reliability for internal tools and enterprise solutions. Collaborated with cross-functional teams to support automation, improve data workflows, and enhance system performance'},
                {Company: 'Nexora Tech Solutions', Position: 'Back-end Web Developer', StartDate: '2025-06-10', EndDate: '2025-06-10', Description: 'Developed and maintained server-side applications, optimized database queries, and ensured system reliability for internal tools and enterprise solutions. Collaborated with cross-functional teams to support automation, improve data workflows, and enhance system performance'},
                {Company: 'Nexora Tech Solutions', Position: 'Back-end Web Developer', StartDate: '2025-06-10', EndDate: '2025-06-10', Description: 'Developed and maintained server-side applications, optimized database queries, and ensured system reliability for internal tools and enterprise solutions. Collaborated with cross-functional teams to support automation, improve data workflows, and enhance system performance'},
                {Company: 'Nexora Tech Solutions', Position: 'Back-end Web Developer', StartDate: '2025-06-10', EndDate: '2025-06-10', Description: 'Developed and maintained server-side applications, optimized database queries, and ensured system reliability for internal tools and enterprise solutions. Collaborated with cross-functional teams to support automation, improve data workflows, and enhance system performance'},

            ],

            PdfPreview: false,
            pdfUrl: null,
        }
    },
    methods:{
        UploadingProfile(event){
            const file = event.target.files[0];
            if(file){
                this.PersonalArray[0].Profile = URL.createObjectURL(file);
            }
        },
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
                Company: '', Position: '', StartDate: '', EndDate: '', Description: ''
            });
        },
        DeleteExperience(index){
            this.ExperienceArray.splice(index, 1);
        },
        DeleteSkill(index){
            this.SkillArray.splice(index, 1);
        },
        DeleteEducation(index){
            this.EducationArray.splice(index, 1);
        },

        btnshowPreview(){
           this.PdfPreview = !this.PdfPreview;
        },
        btnClosePreview(){
            this.PdfPreview = false;
            this.pdfUrl = null
            document.getElementById('TemplatePdf').classList.add('border');
        },
        btnDownloadPreview(){
            const a = document.createElement("a");
            a.href = this.pdfUrl;
            a.download = "Resumebuilder.pdf";
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);

            this.btnClosePreview();
        },

        //mobile view
        btnDownload(){
            const element = document.getElementById('TemplatePdf');
            html2pdf()
                .set({
                    margin: 10,
                    filename: 'Resumebuilder.pdf',
                    image: { type: 'jpeg', quality: 0.98 },
                    html2canvas: { scale: 7, backgroundColor: '#ffffff' },
                    jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
                })
                .from(element)
                .save();
        }
    },
    watch:{
        PdfPreview(value){
            if (value) {
                this.$nextTick(() => {
                    const element = document.getElementById('TemplatePdf');
                    document.getElementById('TemplatePdf').classList.remove('border');
                    html2pdf()
                        .set({
                            margin: 10,
                            filename: 'Resumebuilder.pdf',
                            image: { type: 'jpeg', quality: 0.98 },
                            html2canvas: { scale: 7, backgroundColor: '#ffffff' },
                            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
                        })
                        .from(element)
                        .toPdf()
                        .get('pdf')
                        .then(pdf => {
                            const pdfUrl = URL.createObjectURL(pdf.output('blob'));
                            this.pdfUrl = pdfUrl;
                            document.getElementById('pdf-preview').src = pdfUrl;
                        });
                });
            }
        }
    }

}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=League+Spartan:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

main{
    overflow-wrap: break-word;
}
section {
    padding: calc(10px + 1rem) 0;
    font-family: "Poppins", sans-serif;
}

.iframe-css{
    height: 100vh;
    width: 100%;
    background-color: rgba(86, 88, 88, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.nav-link.active{
    color: rgb(241, 246, 246) !important;
    background-color: rgb(104, 106, 107) !important;
}
</style>
