export default{
    name:'AlertComponent',
    props:{
        visible:Boolean,
        variant:String,
        title:String
    },
    data(){
        return{
            OpenClose: this.visible
        }
    },
    methods: {
        OpenCloseFun(){
            this.OpenClose= false
        }
    },
    watch:{
        visible:function(newVal,oldVal){
            this.OpenClose= newVal
        }
    }
}
