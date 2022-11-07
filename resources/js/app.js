import "./bootstrap";
import Alpine from "alpinejs";
import { createApp } from "vue/dist/vue.esm-bundler";
import Example from "./Components/Example.vue";
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import moment from "moment";

window.Alpine = Alpine;
Alpine.start();

// createApp(Example).mount("#app");
const app = createApp(Example);
app.component("Datepicker", Datepicker);
app.mount("#app");
