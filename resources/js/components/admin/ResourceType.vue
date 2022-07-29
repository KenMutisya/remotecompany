<script>
import { h } from 'vue'
import PdfResource from "./Resources/PdfResource";
import LinkResource from "./Resources/LinkResource";
import HtmlSnippetResource from "./Resources/HtmlSnippetResource";

export default {
    props: ['type'],
    render() {
        if (this.type.name === 'PDF') {
            return h(PdfResource);
        }

        if (this.type.name === 'Link') {
            return h(LinkResource);
        }

        if (this.type.name === 'HTML Snippet') {
            return h(HtmlSnippetResource);
        }
    },
}

</script>

<style scoped>

</style>
