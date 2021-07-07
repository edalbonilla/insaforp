<template>
    <b-container>
        <h1>Gestion de Programas </h1>
        <b-col md="12">
            <b-button variant="success" @click="crear()">Crear Programa</b-button>
            <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Opciones</th>                        
                        </tr>
                    </thead>                        
                    <tbody>
                        <tr v-for="(programa, index) in programas" :key="index">
                            <td>
                                {{programa.id}}
                            </td>
                            <td>
                                {{programa.Nombre}}
                                
                            </td>
                            <td>
                                {{programa.descripcion}}
                                
                            </td>
                            <td>
                                <b-button variant="outline-primary" @click="modificar(programa.id)">Actualizar</b-button> -
                                <b-button variant="outline-danger" @click="borrar(programa.id)">Eliminar</b-button>
                            </td>
                        </tr>
                    </tbody>
            </table>
        </b-col>
        
    </b-container>
</template>



<script>
export default {
    data(){
        return{
            programas:[]            
        }
    },
    created(){

        this.getProgramas();
    },
    methods:{
        async getProgramas(){
            try {
                const programasDB = await this.axios.get('programas');

                await programasDB.data.forEach(element => {
                   
                    let programa = {};
                    programa.id = element.idPrograma;                    
                    programa.Nombre = element.Nombre; 
                    programa.descripcion = element.Descripcion; 
                    this.programas.push(programa);

                });              

              
            } catch (error) {
                console.log(error);
            }
        },
        modificar(id){
            this.$router.push('programas/modificar/'+id)
        },
        crear(){
            this.$router.push('programas/crear')
        },
        async borrar(id){
             try {
                if(confirm("Esta seguro en eliminar este Programa")){
                    const programassDB = await this.axios.delete('programas/'+ id); 
                    this.programas=[] 
                    this.getProgramas();                    
                }

              
            } catch (error) {
                console.log(error);
            }
        },
    }
}
</script>