<template>
    <nav v-if="paginator!==undefined" aria-label="Pagination Navigation" class="flex justify-between" role="navigation">
        <span v-if="onFirstPage"
              class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-gray-100 border border-gray-300 cursor-default leading-5 rounded-md">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd"
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      fill-rule="evenodd"/>
            </svg>
        </span>
        <inertia-link v-else :href="previous"
                      class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd"
                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                      fill-rule="evenodd"/>
            </svg>
        </inertia-link>

        <inertia-link v-if="hasMorePages" :href="next"
                      class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"
                      rel="next">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      fill-rule="evenodd"/>
            </svg>
        </inertia-link>
        <span v-else
              class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-gray-100 border border-gray-300 cursor-default leading-5 rounded-md">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd"
                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                      fill-rule="evenodd"/>
            </svg>
            </span>
    </nav>
</template>

<script>
export default {
    name: "SimplePaginator",
    props: {
        paginator: {
            current_page: Number,
            data: Array,
            first_page_url: String,
            from: Number,
            last_page: Number,
            last_page_url: String,
            links: Array,
            next_page_url: String,
            path: String,
            per_page: Number,
            prev_page_url: String,
            to: Number,
            total: Number,
        }
    },

    methods: {},

    computed: {
        onFirstPage() {
            return this.paginator.current_page === 1;
        },

        hasMorePages() {
            return this.paginator.current_page < this.paginator.last_page;
        },

        next() {
            return this.paginator.next_page_url;
        },

        previous() {
            return this.paginator.prev_page_url;
        },
    }

}
</script>

<style scoped>

</style>
