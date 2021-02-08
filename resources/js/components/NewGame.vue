<template>
    <div>New game</div>
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
            getTest() {
                axios.get('/api/new')
                    .then(response => {
                        console.log('response', response);
                    })
                    .catch(error => {
                        console.log('error', error);
                    });
            }
        },
        mounted() {
            this.getTest();
        }
    }
</script>
