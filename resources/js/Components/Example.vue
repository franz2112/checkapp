<template>
    <form
        method="post"
        @submit.prevent="submit"
        class="form py-0"
        enctype="multipart/form-data"
    >
        <!-- Progress bar -->
        <div class="progressbar mt-1">
            <div
                class="progress progress-bar progress-bar-striped progress-bar-animated"
                id="progress"
            ></div>

            <div class="progress-step p-active"></div>
            <div class="progress-step"></div>
            <div class="progress-step"></div>
            <div class="progress-step"></div>
        </div>

        <!-- Steps -->
        <div class="form-step f-active">
            <p id="output" class="my-2 text-danger"></p>

            <div class="row mb-1">
                <div class="col-md-6">
                    <h6 class="mt-2">Select Date</h6>
                    <Datepicker
                        v-model="fields.date"
                        inline
                        autoApply
                        :enableTimePicker="false"
                        :minDate="new Date()"
                        :format="customDate"
                        :value="date"
                        name="date"
                    ></Datepicker>
                </div>

                <div class="col-md-6">
                    <h6 class="mt-2">Select Time</h6>
                    <select
                        class="form-select form-select-sm mb-3"
                        aria-label=".form-select-lg example"
                        name="time"
                        v-model="fields.time"
                    >
                        <option selected>8:00 AM</option>

                        <option value="10:00 AM">10:00 AM</option>
                        <option value="11:00 AM">11:00 AM</option>
                        <option value="12:00 PM">12:00 PM</option>
                        <option value="01:00 PM">01:00 PM</option>
                        <option value="02:00 PM">02:00 PM</option>
                        <option value="03:00 PM">03:00 PM</option>
                    </select>
                </div>
            </div>
            <div class="ms-4">
                <a id="btn" type="submit" class="btn btn-next width-50 ml-auto">
                    Next
                </a>
            </div>
        </div>
        <div class="form-step">
            <p id="output" class="my-2 text-danger"></p>

            <h6 class="mt-2" for="doctor">Select Doctor</h6>
            <div class="input-group">
                <div class="row m-0">
                    <div
                        class="col-sm-6 p-0"
                        v-for="(d, index) in doctors"
                        :key="d.id"
                    >
                        <div class="option m-1">
                            <input
                                type="radio"
                                name="doctor"
                                v-model="fields.doctor"
                                :id="d.doctor.id"
                                :value="d.doctor.Dlname"
                            />
                            <label
                                class="label-d"
                                :for="d.doctor.id"
                                aria-label="Doctor{{ d.doctor.Dlname }}"
                            >
                                <span></span>
                                <div class="row">
                                    <div
                                        class="d-block text-truncate"
                                        style="min-width: 150px"
                                    >
                                        Doc {{ d.doctor.Dlname }}
                                    </div>
                                    <div
                                        class="d-block text-truncate fw-bold"
                                        style="min-width: 150px"
                                    >
                                        {{ d.doctor.Specialization }}
                                    </div>
                                </div>

                                <div class="card card--white card--sm">
                                    <img
                                        :src="
                                            '/assets/admin/img/doctorimage/' +
                                            d.doctor.file
                                        "
                                        width="180"
                                    />
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-6 p-0">
                        <div class="option m-1">
                            <input
                                type="radio"
                                name="doctor"
                                id="suggest"
                                value="suggest"
                            />
                            <label
                                class="label-d"
                                for="suggest"
                                aria-label="suggest"
                            >
                                <span></span>
                                <div
                                    class="d-block text-truncate"
                                    style="min-width: 150px"
                                >
                                    Suggest Doctor
                                </div>
                                <div class="card card--white card--sm">
                                    <img
                                        src="/assets/admin/img/blmkl.png"
                                        alt=""
                                    />
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <h6 for="consultation" class="mt-2">Select Consultation Type</h6>
            <div class="input-group">
                <div class="row m-0">
                    <div class="col-sm-6 p-0">
                        <div class="option m-1">
                            <input
                                type="radio"
                                name="consultation"
                                id="ol"
                                value="Online"
                                required
                                v-model="fields.consultation"
                            />
                            <label class="label-d" for="ol" aria-label="ol">
                                <span></span>

                                Online Consultation

                                <div class="card card--white card--sm">
                                    <img
                                        src="/assets/img/noun-medical-check-up-2583365.png"
                                        alt=""
                                    />
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-6 p-0">
                        <div class="option m-1">
                            <input
                                type="radio"
                                name="consultation"
                                v-model="fields.consultation"
                                id="f2f"
                                value="Face-to-Face"
                            />
                            <label class="label-d" for="f2f" aria-label="f2f">
                                <span></span>
                                <p>Face-to-Face Consultation</p>
                                <div class="card card--white card--sm">
                                    <img
                                        src="/assets/img/noun-face-to-face-4877515.png"
                                        alt=""
                                    />
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>

        <div class="form-step">
            <div class="row">
                <div class="col-12">
                    <h6 class="my-4">Reason/Complaints</h6>
                    <textarea
                        class="form-control my-3"
                        rows="8"
                        id="comment"
                        name="reason"
                        v-model="fields.reason"
                        placeholder="Add message here"
                        style="font-size: 13px"
                    ></textarea>
                </div>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <a href="#" class="btn btn-next">Next</a>
            </div>
        </div>

        <div class="form-step">
            <div class="input-group">
                <div class="row">
                    <div class="col-12">
                        <h6 class="my-3">Attach ID</h6>
                        <p>
                            Upload special ID for special rate. (Senior Citizen,
                            PWD, etc. e.g)
                        </p>

                        <input
                            class="form-control"
                            type="file"
                            id="formFile"
                            name="specialId"
                        />
                    </div>
                    <div class="col-12">
                        <h6 class="my-3">Terms and Condition</h6>
                        <div class="d-flex">
                            <input id="checkbox" type="checkbox" />
                            <label for="checkbox">
                                <p class="mx-3 my-0">
                                    I have read, understood, and accepted the
                                    <a href="#" style="color: #35bf53"
                                        >Terms & Conditions</a
                                    >
                                    and
                                    <a href="#" style="color: #35bf53"
                                        >Privacy Policy</a
                                    >
                                </p>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btns-group mt-3">
                <a href="#" class="btn btn-prev">Back</a>
                <input type="submit" value="submit" class="btn" />
            </div>
        </div>
    </form>
</template>

<script>
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import "vue3-loading-overlay/dist/vue3-loading-overlay.css";
import axios from "axios";
import moment from "moment";
import { ref } from "vue";

export default {
    data() {
        return {
            date: "",
            doctors: [],
            fields: {},
        };
    },
    setup() {
        const date = ref(new Date());

        return {
            date,
        };
    },
    // components:{
    // 		PulseLoader

    // },
    methods: {
        customDate(date) {
            this.date = moment(date).format("YYYY-MM-DD");
            axios
                .post("/findDoctors/{id}", { date: this.date })
                .then((response) => {
                    this.doctors = response.data;
                });
            // .catch((error) => {
            //     alert("error");
            // });
        },
        submit() {
            axios
                .post("/Request-Appointment/{id}", this.fields)
                .then((response) => {
                    // this.fields = {}; //Clear input fields.
                    // this.loaded = true;
                    // this.success = true;
                    console.log(response);
                })
                .catch((error) => {
                    this.loaded = true;
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
        },
        doctorAvailable() {
            var id = 1;
            axios.get("/TimeSelect/" + id).then((response) => {
                this.doctors = response.data;
                this.loading = false;
                console.log(response);
            });
        },
    },
    created() {
        this.customDate(), this.doctorAvailable();
    },
};
</script>

<style>
.dp__range_end,
.dp__range_start,
.dp__active_date {
    background: #35bf53;
}
</style>
