<template>
    <a href="/new">New</a>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                index: []
            }
        },
        methods: {
            getIndex() {
                axios.get('/api/index')
                    .then(response => {
                        console.log('response', response);
                    })
                    .catch(error => {
                        console.log('error', error);
                    });
            },
        },
        mounted() {
            this.getIndex();
        }
    }
</script>
