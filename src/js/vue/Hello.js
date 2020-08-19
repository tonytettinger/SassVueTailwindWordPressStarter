import Vue from "vue";

var app5 = new Vue({
  el: "#app-5",
  data: { message: "Hello Vue.js yesnsdp!" },
  methods: {
    reverseMessage: function() {
      this.message = this.message
        .split("")
        .reverse()
        .join("");
    }
  }
});
