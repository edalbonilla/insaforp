<template>
    <b-container>
        <legend class="primary-title text-center ">
                <p>Centro de formacion XYZ</p>
                <p>Creación de Facilitadores</p>
        </legend>
        <center>
            <b-col md="5" center>
                <b-row class="text-center">                         
                    <b-col md="10">
                        <input v-model="docente.Nombre"  type="text" class="form-control" placeholder="Nombre">
                    </b-col>      
                    <b-col md="2">
                        <input @click="crearDocente" type="button" value="Añadir" class="btn btn-success">
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
                    Nombre:'',
                }

            }
        },
        methods:{
            async crearDocente(){
                try {
                    const eventoDB = await this.axios.post('docentes',this.docente);
                    alert('Facilitador Creado');
                } catch (error) {
                    console.log(error);
                    this.docente.nombre = '';
                    alert('Nombre de usuario ya existe, si sigue presentando este problemas comunicarse con el administrador');

                }
                
                this.docente.nombre = '';
                this.$router.push('/docentes')

            }
        }
        
    }

</script>