<script>
import { h } from 'vue'
import PDFResource from "./PDFResource";
export default {
    props: ['resource'],
    render() {
        if (this.resource.resource_type === 'App\\Models\\PDFResource') {
            return h(PDFResource,{
                resource: this.resource
            });
        }
    },
}

</script>

<style scoped>

</style>
