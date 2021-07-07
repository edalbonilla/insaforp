<template>
    <b-container>
        <legend class="primary-title text-center ">
                <p>Centro de formacion XYZ</p>
                <p>Creación de Facilitadores</p>
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
                        <input @click="crear" type="button" value="Añadir" class="btn btn-success">
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
                    Nombre:'',
                    Descripcion:''
                }

            }
        },
        methods:{
            async crear(){
                try {
                    const eventoDB = await this.axios.post('programas',this.form);
                    alert('Creado exitosamente');
                } catch (error) {
                    console.log(error);
                    this.form=[];
                    alert('Nombre del programa ya existe, si sigue presentando este problemas comunicarse con el administrador');

                }
                
                this.form=[];
                this.$router.push('/programas')

            }
        }
        
    }

</script>