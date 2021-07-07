<template>
    <b-container>
        <h1>Gestion de Docentes </h1>
        <b-col md="12">
            <b-button variant="success" @click="crearDocente()">Crear Docentes</b-button>
            <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nombre</th>
                            <th>Opciones</th>                        
                        </tr>
                    </thead>                        
                    <tbody>
                        <tr v-for="(docente, index) in docentes" :key="index">
                            <td>
                                {{docente.id}}
                            </td>
                            <td>
                                {{docente.Nombre}}
                                
                            <td>
                                <b-button variant="outline-primary" @click="verEvento(docente.id)">Actualizar</b-button> -
                                <b-button variant="outline-danger" @click="deleteDocente(docente.id)">Eliminar</b-button>
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
            eventos:[],
            docentes:[]            
        }
    },
    created(){

        this.getDocentes();
    },
    methods:{
        async getDocentes(){
            try {
                const docentesDB = await this.axios.get('docentes');

                await docentesDB.data.forEach(element => {
                   
                    let docente = {};
                    docente.id = element.idDocente;                    
                    docente.Nombre = element.Nombre;                    
                    this.docentes.push(docente);

                });              

              
            } catch (error) {
                console.log(error);
            }
        },
        verEvento(id){
            this.$router.push('docentes/modificar/'+id)
        },
        crearDocente(){
            this.$router.push('docentes/crear')
        },
        async deleteDocente(id){
             try {
                if(confirm("Esta seguro en eliminar este facilitador")){
                    const docentesDB = await this.axios.delete('docentes/'+ id); 
                    this.docentes=[] 
                    this.getDocentes();                    
                }

              
            } catch (error) {
                console.log(error);
            }
        },
    }
}
</script>