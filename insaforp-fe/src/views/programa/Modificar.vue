<template>
    <b-container>
        <legend class="primary-title text-center ">
                <p>Centro de formacion XYZ</p>
                <p>Actualización de Programas</p>
        </legend>
         <center>
            <b-col md="5" center>
                                       
                    <b-col md="10">
                        <input v-model="form.Nombre"  type="text" class="form-control" placeholder="Nombre">
                    </b-col>      
                    <br>
                    <b-col md="10">
                        <input v-model="form.Descripcion"  type="text" class="form-control" placeholder="Descripcion">
                    </b-col> 
                    <br>
                    <b-col md="10">
                        <input @click="modificar()" type="button" value="Modificar" class="btn btn-danger">                        
                    </b-col>      
                    <b-col md="2">                        
                        <input @click="regresar()" type="button" value="Salir" class="btn btn-success">
                    </b-col>                                
                            
            </b-col>
        </center>        
       
    </b-container>
</template>
        

<script>

    export default{
        data(){
            return{
                form:{
                    id:'',
                    Nombre:'',
                    Descripcion:'',
                }

            }
        },
        methods:{
            async modificar(){
                try {                    
                    const eventoDB = await this.axios.put('programas/'+this.form.id,this.form);
                    alert('Facilitador Creado');
                    this.form= [];
                    this.$router.push('/programas');
                    
                } catch (error) {                      
                    this.form= [];
                    this.$router.push('/programas');                            
                }                                

            },
            regresar(){
                this.form= [];
                this.$router.push('/programas'); 
            }
            
        },
        mounted:function(){
                try {
                    const eventoDB =  this.axios.get('programas/'+this.$route.params.id).then(datos=>{
                        this.form.id = datos.data.idPrograma;                        
                        this.form.Nombre = datos.data.Nombre;
                        this.form.Descripcion = datos.data.Descripcion;
                    });                    
                    

                } catch (error) {
                    console.log(error);
                    this.form = [];                    

                }
                
                               

            }
        
    }

</script>