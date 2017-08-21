Vue.use(Vuetify);

var vm = new Vue({
  el: '#create-party',
  data() {
    return {
       partyList : [],
       baseUrlCreate : "https://12c73f9d.ngrok.io/",
       party: {
        name: "",
        creator: "",
        description: "",
        maxinvit: ""
      },
    }
  },
  methods: {
    createNewParty : function (event) {
      return vm.$http.post(vm.baseUrlCreate).then(function(resp){
          return vm.party.key = resp.body.data;
          console.log(resp.body.data);
      }, function(err){
          console.log(err);
      });
    },
  }
})

vm.createNewParty();
