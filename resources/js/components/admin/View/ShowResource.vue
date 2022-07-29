<script>
import { h } from 'vue'
import PDFResource from "./PDFResource";
import HtmlResource from "./HtmlResource";
import LinkResource from "./LinkResource";
export default {
    props: ['resource'],
    render() {
        if (this.resource.resource_type === 'PDF') {
            return h(PDFResource,{
                resource: this.resource
            });
        }
        if (this.resource.resource_type === "HTML") {
            return h(HtmlResource,{
                resource: this.resource
            });
        }
        if (this.resource.resource_type === "Link") {
            return h(LinkResource,{
                resource: this.resource
            });
        }
    },
}

</script>

<style scoped>

</style>
