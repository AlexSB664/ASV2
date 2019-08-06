<template>
<div class="card-body">
    <div class="col">
      <label class="label" for="title">Friend 1:</label>
      <input
        class="input"
        id="person1"
        type="text"
        name="person1"
        placeholder="Name of the person"
        required
      />
    </div>
    <div class="col">
      <label class="label" for="description">Telephone:</label>
      <input
        class="input"
        id="telephone1"
        type="text"
        name="telephone1"
        placeholder="Telephone of the person"
        required
      />
    </div>
    <div class="col">
      <br />
      <button type="button" class="btn btn-success">Add</button>
    </div>
</div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
