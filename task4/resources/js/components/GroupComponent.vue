<template>
    <div class="container">
      <div class="row">
          <form @submit="AddGroup" method="POST" >
              <div class="form-group">
                    <label>GroupName:</label>
                    <input type="text" class="form-control" v-model="group"/>
              </div>
               <input type="submit" value="submit" class="btn btn-info">
                <a v-bind:href="'/distribution'"  class="btn btn-primary">Distribution Of Users</a>
          </form >
        </div>
        
    </div>
</template>
<script>
export default {
    props:['data'],
    methods: {
                 AddGroup(e)
            {
                e.preventDefault();
                let currentObj = this;
                axios.post('/addgroup', {
                    group: this.group,
                }).then(
                   alert("Group Added!")
                );
                }
            }
    }
</script>