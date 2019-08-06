<template>
  <tr>
    <td>
      <input v-if="editMode" type="text" class="form-control" v-model="friend.person">
      <p v-else>{{friend.person}}</p>
    </td>
    <td>
      <input v-if="editMode" type="text" class="form-control" v-model="friend.telephone">
      <p v-else>{{friend.telephone}}</p>
    </td>
    <td>???</td>
    <td>
      <button v-if="editMode" type="button" class="btn btn-primary"  v-on:click="onClickUpdate()">Save Changes</button>
      <button v-else type="button" class="btn btn-warning" v-on:click="onClickEdit()">Edit</button>
    </td>
    <td>
      <button type="button" class="btn btn-danger" v-on:click="onClickDelete()">Delete</button>
    </td>
  </tr>
</template>
<script>
export default {
  props: ["friend"],
  data(){
    return {
      editMode: false
    };
  },

  methods: {
    onClickDelete() {
    this.$emit("delete");
    },
    onClickEdit() {
      this.editMode = true;
    },
    onClickUpdate() {
      const params = {
        person: this.friend.person,
        telephone: this.friend.telephone
      };
      this.editMode = false;
      this.$emit("update", params);
      // axios.put(`/thoughts/${this.thought.id}`, params).then(response => {
      //   this.editMode = false;
      //   const thought = response.data;
      //   this.$emit("update", thought);
      // });
    }
  }
};
</script>

