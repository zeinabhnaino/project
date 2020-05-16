<template>
    <div class="container">
      <div class="row">
        <h3>All Customers!</h3>
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
                <tr v-for="item in data"  v-bind:key="item">
                  <td >{{ item.firstname }} </td>
                  <td >{{ item.lastname }} </td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</template>
<script>
    export default {
      props:['data']
    
    }
</script>