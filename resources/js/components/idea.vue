<template>
    <div>
        <ul>
            <li v-for="item in nombre">
                posteado por:{{item}}
            </li>
        </ul>
        <input v-model="name" v-on:keyup.enter="addName"/>
    </div>
</template>
<script>
    export default{

                        data(){
                              return{
                              nombre:[nombre=>'uno','dos','tres']
                              }
                              name=''
                             },
                             methods:{
                                addName:function(){
                                    this.nombre.push(this.name);
                                    this.name='';
                                }
                             }
                         
                        }
</script>
