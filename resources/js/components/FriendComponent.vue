<template>
  <div class="card-body">
    <br />
    <div class="p-3 mb-2 bg-danger text-white">the list is empty you should add people to play</div>

    <table style="width:100%">
      <tr>
        <th>Santa</th>
        <th>Telephone</th>
        <th>Kid</th>
        <th></th>
        <th></th>
      </tr>

      <tr
        is="friend-table"
        v-for="friend in friends"
        :key="friend.id"
        :friend="friend"
        @update="updateFriend(index, ...arguments)"
        @delete="deleteFriend(index)"
      ></tr>
    </table>
    <friend-form @new="addFriend"></friend-form>
    <!-- <button type="button" class="btn btn-primary">Let's play</button> -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      friends: [
        {
          id: "1",
          person: "alex",
          telephone: "6646127701"
        }
      ]
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    addFriend(friend) {
      this.friends.push(friend);
    },
    updateFriend(index, friend) {
      this.friends[index] = friend;
    },
    deleteFriend(index) {
      this.friends.splice(index, 1);
    }
  }
};
</script>
