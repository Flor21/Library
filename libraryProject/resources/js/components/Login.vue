<template>
    <form>
        <div class="form-group">
            <label for="email">Mail</label>
            <input
                type="email"
                id="email"
                name="email"
                class="form-control"
                v-model="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                name="password"
                class="form-control"
                v-model="password">
        </div>
        <button type="submit" class="btn btn-primary" @click.prevent="login">Login</button>
    </form>
</template>

<script>
    import axios from 'axios';
    import home from '@/js/components/Home'
    export default {
        data() {
            return {
                username: '',
                email: '',
                password: ''
            }
        },
        methods: {
            login() {
                axios.post('http://127.0.0.1/api/user/login',
                {email: this.email, password: this.password},
                {headers: {'X-Requested-With': 'XMLHttpRequest'}})
                .then(
                    (response) => {
                        const token = response.data.token;
                        const base64Url = token.split('.')[1];
                        const base64 = base64Url.replace('-', '+').replace('_', '/');
                        // console.log(JSON.parse(window.atob(base64)));
                        localStorage.setItem('token', token);
                    }
                )
                .catch(
                    (error) => console.log(error)
                );
                this.$router.push('home')
            }
        }
    }
</script>