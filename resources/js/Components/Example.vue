<template>
    <loader v-if="loading"></loader>

    <div
        class="form py-0 vld-parent"
        enctype="multipart/form-data"
        ref="formContainer"
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
                <div class="col-md-12">
                    <h6 class="mt-2">Select Date</h6>
                    <Datepicker
                        class="d-flex flex-column"
                        v-model="fields.date"
                        inline
                        autoApply
                        required
                        :enableTimePicker="false"
                        :minDate="new Date()"
                        :format="customDate"
                        :value="date.date"
                        name="date"
                    ></Datepicker>
                </div>
            </div>
            <div class="ms-4">
                <a id="btn" type="submit" class="btn btn-next width-50 ml-auto">
                    <div v-if="loads">
                        <miniLoader></miniLoader>
                    </div>
                    <div v-else>Next</div>
                </a>
            </div>
        </div>
        <div class="form-step">
            <p id="output" class="my-2 text-danger"></p>
            <!-- {{ fields.doctor }} -->
            <h6 class="mt-2" for="doctor">Select Doctor</h6>
            <div class="input-group">
                <div class="row m-0">
                    <div
                        class="col-sm-6 p-0"
                        v-for="(d, doctor) in doctors"
                        :key="d.id"
                    >
                        <div class="option m-1">
                            <input
                                v-on:click="isHidden = false"
                                type="radio"
                                name="doctor"
                                v-model="fields.doctor"
                                :id="d.doctor.Dlname"
                                :value="d.doctor.id"
                                @change="customTime()"
                            />
                            <label
                                class="label-d"
                                :for="d.doctor.Dlname"
                                aria-label="Doctor{{ d.Dlname }}"
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
                                        height="180"
                                        style="object-fit: cover"
                                    />
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- <div class="col-sm-6 p-0">
                        <div class="option m-1">
                            <input
                                type="radio"
                                name="doctor"
                                id="suggest"
                                v-model="fields.doctor"
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
                    </div> -->
                </div>
            </div>

            <h6 for="consultation" class="mt-2">Select Consultation Type</h6>
            <div class="input-group">
                <div class="row m-0">
                    <div class="col-sm-6 p-0">
                        <div class="option m-1">
                            <input
                                v-on:click="isHidden = false"
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
                                        style="object-fit: cover"
                                    />
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-6 p-0">
                        <div class="option m-1">
                            <input
                                v-on:click="isHidden = false"
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
                                        style="object-fit: cover"
                                    />
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button
                    v-if="!isHidden"
                    type="button"
                    class="btn btn-secondary p-1"
                    v-on:click="uncheckAll"
                    style="
                        font-size: 11px;
                        background-color: gainsboro;
                        color: #171717;
                    "
                >
                    Clear
                </button>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Back</a>
                <button href="#" class="btn btn-next">
                    <div v-if="loads">
                        <miniLoader></miniLoader>
                    </div>
                    <div v-else>Next</div>
                </button>
            </div>
        </div>

        <div class="form-step">
            <div class="col-md-12">
                <h6 class="mt-2">Select Time</h6>
                <div class="input-group">
                    <div class="row m-0">
                        <div
                            class="col-sm-4 p-0"
                            v-for="(t, index) in times"
                            :key="index"
                            :value="times"
                        >
                            <div class="option m-1">
                                <input
                                    v-on:click="isHiddens = false"
                                    type="radio"
                                    name="time"
                                    v-model="fields.time"
                                    :id="t.time"
                                    :value="t.time"
                                    required
                                />
                                <label
                                    class="label-d"
                                    :for="t.time"
                                    aria-label="ol"
                                >
                                    <span></span>
                                    <div>{{ t.time }}</div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button
                    v-if="!isHiddens"
                    type="submit"
                    class="btn btn-secondary p-1"
                    v-on:click="uncheckAll"
                    style="
                        font-size: 11px;
                        background-color: gainsboro;
                        color: #171717;
                    "
                >
                    Clear
                </button>
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
                        <div class="row">
                            <div class="col-12">
                                <h6 class="my-4">Reason/Complaints</h6>
                                <textarea
                                    class="form-control my-3"
                                    rows="3"
                                    id="comment"
                                    name="reason"
                                    v-model="fields.reason"
                                    placeholder="Add message here"
                                    style="font-size: 13px"
                                ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h6 class="my-0">Attach ID</h6>
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
                </div>
            </div>

            <div class="btns-group mt-3">
                <a href="#" class="btn btn-prev">Back</a>
                <input
                    type="submit"
                    value="submit"
                    class="btn"
                    v-on:click="submit()"
                />
            </div>
        </div>
    </div>
</template>

<script>
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import axios from "axios";
import moment from "moment";
import { ref, computed } from "vue";

export default {
    data() {
        return {
            isHidden: true,
            isHiddens: true,
            loading: false,
            loads: false,
            date: "",
            doctors: [],
            times: [],
            fields: {
                doctor: "",
                consultation: "",
                date: "",
                time: "",
                reason: "",
                specialId: "",
            },
        };
    },
    setup() {
        const date = ref(new Date());
        const allowedDates = computed(() => {
            return [new Date("2022-12-08")];
        });

        return {
            allowedDates,
            date,
        };
    },
    methods: {
        uncheckAll: function () {
            this.fields.doctor = "";
            this.fields.consultation = "";
            this.fields.time = "";
        },
        add(event) {
            event.target.className += " disabled";
        },
        customDate(date) {
            this.loads = true;
            this.date = moment(date).format("YYYY-MM-DD");
            var id = window.location.href.split("/").pop();
            axios
                .post("/api/findDoctors/" + id, { date: this.date })
                .then((response) => {
                    // console.log(response);
                    setTimeout(() => {
                        this.doctors = response.data;
                        this.loads = false;
                    }, this.loading);
                });
            // .catch((error) => {
            //     alert("error");
            // });
        },
        customTime(date, doctor) {
            this.loads = true;
            this.dates = moment(date).format("YYYY-MM-DD");
            var id = window.location.href.split("/").pop();
            axios
                .post("/api/findTimes/" + id, {
                    date: this.date,
                    doctor: this.fields.doctor,
                })
                .then((response) => {
                    // console.log((this.times = response.data));
                    setTimeout(() => {
                        this.times = response.data;
                        this.loads = false;
                    }, this.loading);
                });
            // .catch((error) => {
            //     alert("error");
            // });
        },
        submit(date) {
            this.loading = true;
            var id = window.location.href.split("/").pop();
            this.dates = moment(date).format("YYYY-MM-DD");
            axios
                .post("/user/Request-Appointment/" + id, {
                    doctor: this.fields.doctor,
                    consultation: this.fields.consultation,
                    time: this.fields.time,
                    specialId: this.fields.specialId,
                    reason: this.fields.reason,
                    date: this.date,
                })
                .then((response) => {
                    setTimeout(() => {
                        this.fields = {};
                        this.loading = false;
                        // console.log(response);
                    }, this.loading);
                    // window.location.reload();
                    this.$toast.open({
                        message: "Appointment Request Successful!",
                        type: "success",
                        duration: 20000,
                        dismissible: true,
                    });
                    // console.log(response);
                })
                .catch((error) => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
        },
    },
    created() {
        this.customDate(), this.customTime();
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
