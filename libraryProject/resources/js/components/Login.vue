<template>
    <div class="login row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form @submit.prevent="authenticate">
                        <div class="form-group row">
                            <label for="email">Email:</label>
                            <input type="email" v-model="form.email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group row">
                            <label for="password">Password:</label>
                            <input type="password" v-model="form.password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group row">
                            <input type="submit" value="Login">
                        </div>
                      <!--  <div class="form-group row" v-if="authError">
                            <p class="error">
                                {{ authError }}
                            </p>
                        </div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "login",
        data() {
            return {
                form: {
                    email: '',
                    password: ''
                },
                error: null
            };
        },
        methods: {
            authenticate() {
                //this.$store.dispach('login');
                axios.post('http://127.0.0.1/api/user/login',this.$data.form)
                .then((response) => {
                    localStorage.setItem('user', JSON.stringify(response.data.user));
                    //this.$store.commit('loginSuccess', response.data.user);

                    //console.log("log", JSON.stringify(response.data.user));
                    //JSON.parse(localStorage.getItem('user'));
                    
                    this.$router.push({path: '/home'})
                })
                .catch((error) => {
                    //this.$store.commit('loginFailed', {error});
                    (error) => console.log(error)
                });
            }
        }
        //computed: {
          //  authError() {
            //    return this.$store.getters.authError;
            //}
        //}
    }
</script>

<style scoped>
.error {
    text-align: center;
    color: red;
}
</style>