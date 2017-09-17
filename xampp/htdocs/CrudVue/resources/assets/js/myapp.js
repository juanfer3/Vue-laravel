new Vue({
  el: '#lista',
  create: function(){
    this.getKeeps;
  }
    data:{
    keeps:[] //todas las teareas
  },
  methods:{
    getKeeps: function(){
      var urlKeeps = 'tasks';
      axios.get(urlKeeps).then(response=>{
        this.keeps = response.data
      });
    }
  }
});
