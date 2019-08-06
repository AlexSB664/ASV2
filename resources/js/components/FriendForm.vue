<template>
  <form action v-on:submit.prevent="newFriend()">
    <div class="form-row">
      <div class="col">
        <label class="label" for="title">Friend:</label>
        <input
          class="input"
          id="person"
          type="text"
          name="person"
          placeholder="Name of the person"
          required
          v-model="person"
        />
      </div>
      <div class="col">
        <label class="label" for="description">Telephone:</label>
        <input
          class="input"
          type="text"
          name="telephone"
          placeholder="Telephone of the person"
          required
          v-model="telephone"
        />
      </div>
      <div class="col">
        <br />
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </div>
  </form>
</template>

<script>
export default {
  data() {
    return {
      person: "",
      telephone: ""
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    newFriend() {
      const params = {
        person: this.person,
        telephone: this.telephone
      };
      this.person = "";
      this.telephone = "";
      this.$emit("new", params);
      // axios.post("/thoughts", params).then(response => {
      //   const thought = response.data;
      //   this.$emit("new", thought);
      // });
    }
  }
};
</script>