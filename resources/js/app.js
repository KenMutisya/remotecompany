import './bootstrap';

import { createApp } from 'vue'
import CreateResource from "./components/admin/createResource";

const app = createApp({})

app.component('create-resource', CreateResource)

app.mount('#app')
