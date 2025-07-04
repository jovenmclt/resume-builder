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
                                <button @click="btnshowPreview" style="background-color: #333446;" class="btn text-white rounded-5"><img width="25" height="25" src="./assets/pdf file.png" alt=""> <span class="pe-2" style="font-size: 13px;">Generate PDF</span></button>
                                <div v-if="PdfPreview" class="iframe-css z-1 d-flex flex-column">
                                    <iframe id="pdf-preview" class="w-75 h-75 py-3 px-3 bg-white"></iframe>
                                    <div class="text-start w-75">
                                        <button @click="btnClosePreview" class="btn btn-secondary w-50 rounded-0"><i class="bi bi-x-lg"></i> Close Preview</button>
                                        <button @click="btnDownloadPDF" class="btn btn-dark w-50 rounded-0"><i class="bi bi-file-earmark-pdf-fill"></i> Download PDF</button>
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
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary"  data-bs-toggle="tab" href="#Language"><i class="bi bi-bookmark-dash-fill"></i> Language</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary"  data-bs-toggle="tab" href="#Tools"><i class="bi bi-tools"></i> Tools</a>
                                    </li>
                                    <li class="nav-item">
                                        <a style="font-size: 15px;" class="nav-link text-secondary"  data-bs-toggle="tab" href="#Certificate"><i class="bi bi-award-fill"></i> Certification</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="PersonalInfo" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Personal Information</h5>
                                            <form v-for="(InputInfo, index) in PersonalArray" :key="index" class="py-3">
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
                                            <div v-for="(InputExp , index) in ExperienceArray" :key="index" class="py-3">
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
                                                <label for="achive" class="form-label">Achievements</label>
                                                <div v-for="(getachive, indx) in InputExp.achieve" :key="indx" class="input-group gap-1 mt-2">
                                                    <button v-if="indx == 0 " @click="AddExperienceAchieve(index)" class="btn btn-secondary">+</button>
                                                    <button v-if="indx > 0 " @click="DeleteExperienceAchieve(index,indx)" class="btn btn-danger">-</button>
                                                    <input v-model="getachive.achievements" id="achive" type="text" class="form-control shadow-none">
                                                </div>
                                                <br>
                                                <label for="Description" class="form-label">Job Description</label>
                                                <textarea v-model="InputExp.Description" id="Description" class="form-control shadow-none" rows="5"></textarea>
                                            </div>
                                            <br>
                                            <button @click="AddExperience" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Experience</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Language" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Language</h5>
                                            <form v-for="(InputLanguage , index) in LanguageArray" :key="index" class="py-3">
                                                <i @click="DeleteLanguage(index)" v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="skill" class="form-label">Spoken Languages</label>
                                                <input v-model="InputLanguage.Language" id="skill" type="text" class="form-control shadow-none">
                                            </form>
                                            <br>
                                            <button @click="AddLanguage" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Language</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Tools" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Work Tools</h5>
                                            <form v-for="(InputTools , index) in ToolsArray" :key="index" class="py-3">
                                                <i @click="DeleteTool(index)" v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="tool" class="form-label">Tools</label>
                                                <input v-model="InputTools.tool" id="tool" type="text" class="form-control shadow-none">
                                            </form>
                                            <br>
                                            <button @click="AddTools" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Language</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane show fade" id="Certificate" >
                                        <br><br>
                                        <div class="text-start">
                                            <h5 class="fw-semibold">Certificate</h5>
                                            <form v-for="(InputCertificate , index) in CertificateArray" :key="index" class="py-3">
                                                <i @click="DeleteCertificate(index)" v-if="index > 0" class="bi bi-x-circle-fill text-danger me-1 mt-1" style="cursor: pointer;"></i>
                                                <label for="cert" class="form-label">Certificate Details</label>
                                                <input v-model="InputCertificate.Details" id="cert" type="text" class="form-control shadow-none">
                                                <br>
                                                <label for="Date" class="form-label">Date</label>
                                                <input v-model="InputCertificate.Date" id="Date" type="date" class="form-control shadow-none">
                                            </form>
                                            <br>
                                            <button @click="AddCertificate" class="btn btn-secondary"><i class="bi bi-plus-lg"></i> Add Certificate</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 mt-lg-0 mt-4" >
                            <div id="TemplatePdf" class="py-4 px-3 border bg-white shadow-sm rounded position-sticky top-0" style="min-height: 840px;" >
                                <div class="d-flex justify-content-between gap-4">
                                    <div v-for="(getinfo, index) in PersonalArray" :key="index" style="width: 65%;" class="text-start">
                                        <h2 class="fw-semibold text-dark">{{ getinfo.Fullname }}</h2>
                                        <p class="fw-normal text-dark" style="font-size: 12px; ">{{ getinfo.Summary }}</p>
                                    </div>
                                    <div v-for="(getinfo, index) in PersonalArray" :key="index" style="width: 35%;" class="text-start mt-2">
                                        <p class="fw-semibold text-dark mb-1" style="font-size: 12px; ">{{ getinfo.Career }}</p>
                                        <p class="fw-normal text-dark mb-1" style="font-size: 12px; ">{{ getinfo.Phone }}</p>
                                        <p class="fw-normal text-dar mb-1" style="font-size: 12px; ">{{ getinfo.Email }}</p>
                                        <p class="fw-normal text-dark" style="font-size: 12px; ">{{ getinfo.Location }}</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3 gap-4">
                                    <div class="text-start" style="width: 65%;">
                                        <div class="border-bottom mb-3">
                                            <h5 class="fw-bold text-dark" style="font-size: 14px; ">EXPERIENCE</h5>
                                        </div>
                                        <template v-for="(getexp, index) in ExperienceArray" :key="index">
                                            <p class="fw-light text-secondary mb-1" style="font-size: 12px; ">{{ getexp.StartDate }} - {{ getexp.EndDate }}</p>
                                            <p class="fw-normal text-dark mb-1" >{{ getexp.Company }} - {{ getexp.Position }}</p>
                                            <p class="fw-light text-dark mb-1" style="font-size: 12px; ">{{ getexp.Description }}</p>
                                            <ul>
                                                <li v-for="(getachive, indx) in getexp.achieve" :key="indx">
                                                    <p class="fw-normal text-dark mb-0" style="font-size: 12px; ">{{ getachive.achievements }}</p>
                                                </li>
                                            </ul>
                                        </template>
                                    </div>
                                    <div class="text-start" style="width: 35%;">
                                        <div class="border-bottom mb-3">
                                            <h5 class="fw-bold text-dark" style="font-size: 14px; ">SKILLS</h5>
                                        </div>
                                        <template v-for="(getskill, index) in SkillArray" :key="index">
                                            <span class="fw-normal text-dark mb-1" style="font-size: 12px; ">{{ getskill.Skill}}, </span>
                                        </template>
                                        <div class="text-start mt-4">
                                            <h6 class="fw-normal text-dark mb-1">Tools</h6>
                                            <template v-for="(gettool, index) in ToolsArray" :key="index">
                                                <span class="fw-normal text-dark mb-1" style="font-size: 12px; ">{{ gettool.tool}}, </span>
                                            </template>
                                        </div>
                                        <div class="border-bottom my-3">
                                            <h5 class="fw-bold text-dark" style="font-size: 14px; ">EDUCATION</h5>
                                        </div>
                                        <template v-for="(getedu, index) in EducationArray" :key="index">
                                            <p class="fw-light text-secondary mb-1" style="font-size: 12px; ">{{ getedu.StartDate}} - {{ getedu.EndDate }} </p>
                                            <p class="fw-semibold text-dark mb-1" style="font-size: 12px; ">{{ getedu.University}} </p>
                                            <p class="fw-normal text-dark mb-1" style="font-size: 12px; ">{{ getedu.Program}} </p>
                                        </template>
                                        <div class="border-bottom my-3">
                                            <h5 class="fw-bold text-dark" style="font-size: 14px; ">LANGUAGES</h5>
                                        </div>
                                        <template v-for="(getlanguage, index) in LanguageArray" :key="index">
                                            <span class="fw-normal text-dark mb-1" style="font-size: 12px; ">{{ getlanguage.Language}}, </span>
                                        </template>
                                        <div class="border-bottom my-3">
                                            <span class="fw-bold text-dark" style="font-size: 14px; ">RECOGNITIONS/CERTIFICATES</span>
                                        </div>
                                        <template v-for="(getcert, index) in CertificateArray" :key="index">
                                            <p class="fw-normal text-dark mb-1" style="font-size: 12px; ">{{ getcert.Details}}</p>
                                            <p class="fw-light text-secondary mb-1" style="font-size: 12px; ">{{ getcert.Date}}</p>
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
    name: 'ChildTemplate1',
    components: {ChatBotVue},
    props: {MessageProps:Array},
    data(){
        return{
            PersonalArray: [
                {Fullname: 'Jonathan Doe', Email: 'jonathandoe@gmail.com', Career: 'Full-Stack Developer', Phone: '0933-412-**** ', Location: '742 Evergreen Terrace, Springfield, IL 62704, USA', Summary: 'Experienced creative designer with 20+ years in product design and strategy, user experience and interfaces, and brand development'}
            ],
            EducationArray: [
                {University: 'University of California, Los Angeles (UCLA)', Program: 'BS in Information Technology', StartDate: '2025-06-10', EndDate: '2025-06-10'}
            ],
            SkillArray: [
                {Skill: 'Product Strategy'}, {Skill: 'Designing'}, {Skill: 'Information Architechture'}, {Skill: 'Journey Mapping'},  {Skill: 'UX Research'}, {Skill: 'Product Strategy'}, {Skill: 'Designing'},
            ],
            ExperienceArray: [
                {Company: 'Nexora Tech Solutions', Position: 'Web Developer', StartDate: '2025-06-10', EndDate: '2025-06-10', achieve: [{achievements: 'Key Achievements'},{achievements: 'Key Achievements'},{achievements: 'Key Achievements'}], Description: 'Developed and maintained server-side applications, optimized database queries, and ensured system reliability for internal tools and enterprise solutions.'},
                {Company: 'Nexora Tech Solutions', Position: 'Web Developer', StartDate: '2025-06-10', EndDate: '2025-06-10', achieve: [{achievements: 'Key Achievements'},{achievements: 'Key Achievements'},{achievements: 'Key Achievements'}], Description: 'Developed and maintained server-side applications, optimized database queries, and ensured system reliability for internal tools and enterprise solutions.'},
                {Company: 'Nexora Tech Solutions', Position: 'Web Developer', StartDate: '2025-06-10', EndDate: '2025-06-10', achieve: [{achievements: 'Key Achievements'},{achievements: 'Key Achievements'},{achievements: 'Key Achievements'}], Description: 'Developed and maintained server-side applications, optimized database queries, and ensured system reliability for internal tools and enterprise solutions.'},
            ],
            LanguageArray: [
                {Language: 'English'}, {Language: 'Chinese'}, {Language: 'Japanese'}, {Language: 'Filipino'}
            ],
            ToolsArray: [
               {tool: 'InVision'},{tool: 'Web Flow'},{tool: 'Adobe Creative Suite'},{tool: 'Photo Shop'},{tool: 'Notion'},{tool: 'Figma'},{tool: 'VS Code'},{tool: 'Herd'},{tool: 'Table Plus'},
            ],
            CertificateArray: [
                {Details: 'PMP - Project Management Institute', Date: '2025-06-10'},
            ],

            PdfPreview: false,
            pdfUrl: null,
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
                Company: '', Position: '', StartDate: '', EndDate: '', Description: '', achieve: [{achievements: 'Key Achievements'}]
            });
        },
        AddExperienceAchieve(index){
            this.ExperienceArray[index].achieve.push({
                achievements: ''
            });
        },
        AddLanguage(){
            this.LanguageArray.push({
                Language: ''
            });
        },
        AddTools(){
            this.ToolsArray.push({
                tool: ''
            });
        },
        AddCertificate(){
            this.CertificateArray.push({
                Details: '', Date: ''
            });
        },
        DeleteLanguage(index){
            this.LanguageArray.splice(index, 1);
        },
        DeleteTool(index){
            this.ToolsArray.splice(index, 1);
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
        DeleteExperienceAchieve(index, indx){
            this.ExperienceArray[index].achieve.splice(indx, 1);
        },
        DeleteCertificate(index){
            this.CertificateArray.splice(index, 1);
        },

        btnshowPreview(){
           this.PdfPreview = !this.PdfPreview;
        },
        btnClosePreview(){
            this.PdfPreview = false;
            this.pdfUrl = null
            document.getElementById('TemplatePdf').classList.add('border');
        },
        btnDownloadPDF(){
            const a = document.createElement("a");
            a.href = this.pdfUrl;
            a.download = "Resumebuilder.pdf";
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);

            this.btnClosePreview();
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

section {
    padding: calc(10px + 1rem) 0;
    font-family: "Poppins", sans-serif;
    overflow-wrap: break-word;
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
