require('./bootstrap');

import axios from "axios";

window.axios = axios;AnimationTimeline

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.axios.defaults.headers.common["X-CSRF-TOKEN"] = csrfToken;

