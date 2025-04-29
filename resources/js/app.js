import "./bootstrap";

import { createApp } from "vue";
import App from "./components/App.vue";
import "../css/app.css";

const app = createApp();

app.component("app", App);

app.mount("#app");
