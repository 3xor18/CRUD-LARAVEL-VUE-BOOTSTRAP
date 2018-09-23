<template>
    <div id="well">
        <h4>
            En Que Estas Pensando?
        </h4>
        <form v-on:submit.prevent="createIdea">
            <div class="input-group">
                <input class="form-control input-group-sm" maxlength="256" type="text" v-model="newidea"/>
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
                            Creado:{{ since(idea.fecha)}}
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
    import toastr from 'toastr';
    import moment from 'moment';
    moment.lang('es');
    export default{

                        data(){
                              return{
                              ideas:[],
                              newidea:'',
                              }
                             },
                             created:function(){
                                this.getIdeas();
                             },
                             methods:{
                                since:function(d){
                                    return moment(d).fromNow();
                                },
                                getIdeas:function(){
                                    var urlIdeas='ideas';
                                    axios.get(urlIdeas).then(response=>{
                                    this.ideas=response.data
                                    });
                                },
                                createIdea:function(){
                                    var url=('guardar-ideas');
                                    axios.post(url,{
                                        descripcion:this.newidea
                                    }).then(response=>{
                                        this.getIdeas();
                                        this.newidea='';
                                        toastr.success('Exito!');
                                    }).catch(error=>{
                                        toastr.error('Error!');
                                    });
                                }
                             }
                         
                        }
</script>
