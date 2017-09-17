new Vue({
  el: '#lista',
  data:{
    keeps:[]
  },
  created: function() {
		this.getKeeps();
    console.log(this.keeps);
	},


	methods: {
		getKeeps: function() {
      var urlKeeps="tasks";
      console.log(urlKeeps);
      axios.get(urlKeeps).then(response=>{

        this.keeps=response.data

      });

      console.log(this.keeps);
    }
  }
});
