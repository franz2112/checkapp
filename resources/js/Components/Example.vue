<template>
    <Datepicker
        v-model="date"
        inline
        autoApply
        :enableTimePicker="false"
        :format="customDate"
        name="date"
    ></Datepicker>
    <p>Selected date: {{ date }}</p>
</template>

<script>
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import moment from "moment";
import { ref } from "vue";

export default {
    name: "date",
    setup() {
        const date = ref(new Date());

        return {
            date,
        };
    },
    methods: {
        customDate(date) {
            this.date = moment(date).format("YYYY-MM-DD");
            axios
                .post("/Request-Appointment/{id}", { date: this.time })
                .then((response) => {
                    console.log(this.date);
                });
        },
    },
    // onMounted() {

    // },
};
</script>
