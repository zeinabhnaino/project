<template>
    <div class="container">
        <div class="row">
            <form @submit="formSubmit" method="POST">
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" v-model="fname"/>
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" v-model="lname"/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" v-model="email"/>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" v-model="password"/>
                </div>
                <button class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
              fname: '',
              lname: '',
              email:'',
              password:''
            };
        },
        methods: {
            formSubmit(e) {
                e.preventDefault();
                let currentObj = this;
                axios.post('/formSubmit', {
                    fname: this.fname,
                    lname: this.lname,
                    email: this.email,
                    password: this.password
                }).then(
                   alert("Registration Succed!")
                );
                }
            }
    }
</script>
