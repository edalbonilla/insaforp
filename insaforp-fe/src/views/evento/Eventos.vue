<template>
    <div class="container">
        <h1>Eventos Calendarizados</h1>
        <br>
        <div>
             <b-button variant="success" @click="crearEvento()">Crear Evento</b-button>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <th>fecha evento</th>
                        <th>Facilitador</th>
                        <th>Opciones</th>
                    </tr>
                </thead>                    
                <tbody>
                    <tr v-for="(evento, index) in eventos" :key="index">
                        <td>
                            {{evento.id}}
                        </td>
                        <td>
                            {{evento.nombre}}
                        </td>
                        <td>
                            {{evento.descripcion}}
                        </td>
                        <td>
                            {{evento.fechaInicio}}
                        </td>
                        <td>
                            {{evento.facilitador}}
                        </td>
                        <td>                            
                            <b-button variant="outline-primary" @click="modificar(evento.id)">Actualizar</b-button> -
                            <b-button variant="outline-danger" @click="borrar(evento.id)">Eliminar</b-button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
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
        this.getEventos();
        

        
    },
    methods:{
        async getEventos(){
            try {
                const eventosDB = await this.axios.get('eventos');

                await eventosDB.data.forEach(element => {                   
                    let evento = {};

                    evento.id = element.idEvento;
                    evento.nombre = element.nombre;
                    evento.descripcion = element.descripcion;
                    evento.fechaInicio = element.fechaInicio;
                    evento.facilitador = this.getDocenteById(element.facilitador);
                    
                    this.eventos.push(evento);

                });

              
     

                //console.log(eventosDB.data);
            } catch (error) {
                console.log(error);
            }
        },
        verEvento(id){
            this.$router.push('eventos/'+id)
        },
         crearEvento(id){
            this.$router.push('crear-eventos')
        },
        
        modificar(id){
            this.$router.push('evento/modificar/'+id)
        },
        crear(){
            this.$router.push('evento/crearEventos')
        },
        async borrar(id){
             try {
                if(confirm("Esta seguro en eliminar este Programa")){
                    const programassDB = await this.axios.delete('eventos/'+ id); 
                    this.eventos=[] 
                    this.getEventos();                    
                }

              
            } catch (error) {
                console.log(error);
            }
        },
        async getDocentes(){
              try {
                const docentesDB = await this.axios.get('docentes');

                await docentesDB.data.forEach(element => {
                   
                    let docente = {};
                    docente.id = element.idDocente;                    
                    docente.Nombre = element.Nombre;                    
                    this.docentes.push(JSON.parse(JSON.stringify(docente)));                    

                });              

              
            } catch (error) {
                console.log(error);
            }
        },
        getDocenteById(id){
            const resultado = this.docentes.find( docente => docente.id === id);
            return resultado.Nombre;
        }
    }
}
</script>

