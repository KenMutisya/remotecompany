<template>
<div>
    <form class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                <div class="space-y-6 sm:space-y-5">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Title </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <input type="text" v-model="title"
                                   class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <p v-if="errors.title" class="text-red-500 text-xs italic mt-3">{{ errors.title.toString() }}.</p>

                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Snippet Description </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea  rows="3" v-model="snippetdescription"
                                      class="max-full shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                            <p v-if="errors.snippetdescription" class="text-red-500 text-xs italic mt-3">{{ errors.snippetdescription.toString() }}.</p>

                        </div>
                    </div>
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> HTML Snippet </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea rows="3" v-model="snippet"
                                      class="max-full shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                            <p v-if="errors.snippet" class="text-red-500 text-xs italic mt-3">{{ errors.snippet.toString() }}.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-5">
            <div class="flex justify-end">
                <button type="button"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Cancel
                </button>
                <button @click.prevent="saveHTMLSnippet"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <template v-if="!saving">
                        Save
                    </template>
                    <template v-else>
                        <i class="fa fa-spin fa-spinner"></i>
                    </template>
                </button>
            </div>
        </div>
    </form>

</div>
</template>

<script>
export default {
    name: "HtmlSnippetResource",
    data() {
        return {
            saving: false,
            errors: '',
            title: '',
            snippetdescription: '',
            snippet: ''
        }
    },
    methods: {
        saveHTMLSnippet() {
            this.saving = true;
            axios.post('/htmlresource',{
                title: this.title,
                snippetdescription: this.snippetdescription,
                snippet: this.snippet
            }).then(response => {
                this.saving = false;
                this.title = '';
                this.snippetdescription = '';
                this.snippet = '';
                this.errors = '';
            }).catch(error => {
                this.errors = error.response.data.errors;
                this.saving = false;
            }).finally(()=>this.saving = false);
        }
    },
}
</script>

<style scoped>

</style>
