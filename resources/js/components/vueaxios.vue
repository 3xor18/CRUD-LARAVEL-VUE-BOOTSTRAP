<template>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1 v-for="idea as ideas">
                    {{idea.id}}
                </h1>
            </div>
        </div>
    </div>
</template>
<script>
    import axios from 'axios'

    export default{


                        data(){
                        	return{
                        		ideas:[]
                        	}
                         },
                         created:function(){
                         	this.getIdeas();
                         	
                         },
                         methods:{
                         	getIdeas:function(){
                         		var urlIdeas='aaaa';
                         		axios.get(urlIdeas).then(response=>{
                         			this.ideas=response.data
                         		});
                         	}
                         }
                        }
</script>
