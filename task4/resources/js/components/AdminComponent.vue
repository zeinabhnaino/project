<template>
    <div class="container">
      <div class="row">
        <h3>All Users!</h3>
      </div>
      <div class="row">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <th>First Name</th>
                <th>Last Name</th>
                 <th>Status</th>
                <th></th>
                <th></th>
              </thead>
              <tbody>
                <tr v-for="item in data"  v-bind:key="item">
                  <td v-if="item.role==='member'">{{ item.firstname }} </td>
                  <td v-if="item.role==='member'">{{ item.lastname }} </td>
                  <td v-if="item.role==='member'">{{ item.status }} </td>
                  <td v-if="item.role==='member'"> 
                    <a v-bind:href="'/Edit/'+item.id+'/'+item.status"  class="btn btn-primary">Edit</a>
                  </td>
                   <td v-if="item.role==='member'">
                    <a  v-bind:href="'/Delete/'+item.id" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                </tbody>
            </table>
          </div>
      </div>
      <div class="row">
        <a href='/customers'  class="btn btn-success">All Customers</a>
        <a href='/group'  class="btn btn-info">Add Group</a>
      </div>
    </div>
</template>
<script>
    export default {
      props:['data']
    }
</script>