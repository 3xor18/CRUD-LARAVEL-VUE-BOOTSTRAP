<template>
    <div id="well">
        <h4>
            En Que Estas Pensando?
        </h4>
        <form>
            <div class="input-group">
                <input class="form-control input-group-sm" maxlength="256" type="text" v-model="descripcion"/>
                <span class="input-group-btn">
                    <button class="btn btn-primary btn-sm ">
                        Agregar
                    </button>
                </span>
            </div>
        </form>
        <hr>
        </hr>
        <ul class="list-unstyled">
            <li v-for="idea in ideas">
                <p>
                    <small class="text-muted">
                        <em>
                            Creado:{{ idea.fecha}}
                        </em>
                    </small>
                    {{ idea.descripcion}}
                </p>
            </li>
        </ul>
    </div>
</template>
<script>
    import axios from 'axios';
    export default{

                        data(){
                              return{
                              ideas:[],
                              }
                             },
                             created:function(){
                                this.getIdeas();
                             },
                             methods:{
                                getIdeas:function(){
                                    var urlIdeas='ideas';
                                    axios.get(urlIdeas).then(response=>{
                                    this.ideas=response.data
                                    });
                                }
                             }
                         
                        }
</script>
