<template>
    <div class="container">
        <div class="row">
            <h3>Choose Groups for Users</h3>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table">
                <thead>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th></th>
                    <th></th>
                </thead>
               <tbody>
                   <tr  v-for="item in users"  v-bind:key="item">
                        <td v-if="item.role==='member'">{{ item.firstname }} </td>
                        <td v-if="item.role==='member'">{{ item.lastname }} </td>
                        <td
                            v-if="item.role==='member'"
                            >
                           
                            <a v-bind:href="'/GroupTo/'+item.id+'/'+group.id"  v-for="group in groups"  
                             v-bind:key="group" class="btn btn-primary">To {{ group.name }}</a>
                        </td>
                   </tr>
               </tbody>
               </table>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
      props:['users','groups']
    }
</script>