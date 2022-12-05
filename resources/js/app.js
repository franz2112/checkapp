import "./bootstrap";
import Alpine from "alpinejs";
import { createApp } from "vue/dist/vue.esm-bundler";
import Example from "./Components/Example.vue";
import loader from "./Components/loader.vue";
import miniLoader from "./Components/miniLoader.vue";
import Datepicker from "@vuepic/vue-datepicker";
import "@vuepic/vue-datepicker/dist/main.css";
import ToastPlugin from "vue-toast-notification";
import "vue-toast-notification/dist/theme-sugar.css";
window.Alpine = Alpine;
Alpine.start();

// Vue.component("Appointment", require("./components/Appointment.vue").default);
// createApp(Example).mount("#app");
const app = createApp(Example);

app.component("Datepicker", Datepicker);
app.component("loader", loader);
app.component("miniLoader", miniLoader);
app.use(ToastPlugin);
app.mount("#app");
