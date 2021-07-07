<template>
    <b-container>
        <legend class="primary-title text-center ">
                <p>Centro de formacion XYZ</p>
                <p>Actualización de Facilitadores</p>
        </legend>
        <center>
            <b-col md="5" center>
                <b-row class="text-center">                         
                    <b-col md="8">
                        <input v-model="docente.Nombre"  type="text" class="form-control" placeholder="Nombre">
                    </b-col>      
                    <b-col md="2">
                        <input @click="modificarDocente()" type="button" value="Modificar" class="btn btn-danger">                        
                    </b-col>      
                    <b-col md="2">                        
                        <input @click="regresar()" type="button" value="Salir" class="btn btn-success">
                    </b-col>                                
                
                </b-row >
            </b-col>
        </center>
       
    </b-container>
</template>
        

<script>

    export default{
        data(){
            return{
                docente:{
                    id:'',
                    Nombre:'',
                }

            }
        },
        methods:{
            async modificarDocente(){
                try {                    
                    const eventoDB = await this.axios.put('docentes/'+this.docente.id,this.docente);
                    alert('Facilitador Creado');
                    this.docente= [];
                    this.$router.push('/docentes');
                    
                } catch (error) {
                    console.log(error);            
                    this.docente= [];
                    this.$router.push('/docentes');                            
                }                                

            },
            regresar(){
                this.docente= [];
                this.$router.push('/docentes'); 
            }
            
        },
        mounted:function(){
                try {
                    const eventoDB =  this.axios.get('docentes/'+this.$route.params.id).then(datos=>{
                        this.docente.id = datos.data.idDocente;                        
                        this.docente.Nombre = datos.data.Nombre;
                    });                    
                    

                } catch (error) {
                    console.log(error);
                    this.docente.nombre = '';                    

                }
                
                               

            }
        
    }

</script>