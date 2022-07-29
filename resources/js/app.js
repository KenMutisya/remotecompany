import './bootstrap';

import { createApp } from 'vue'
import CreateResource from "./components/admin/createResource";
import ViewResources from "./components/admin/ViewResources";

const app = createApp({})

app.component('create-resource', CreateResource)
app.component('view-resources', ViewResources)

app.mount('#app')
