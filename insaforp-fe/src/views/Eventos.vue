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
                        <th>descripcion</th>
                        <th>fecha evento</th>
                        <th>Facilitador</th>
                        <th>view</th>
                    </tr>
                </thead>
                    <tr v-for="(evento, index) in eventos" :key="index">
                        <td>
                            {{evento.id}}
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
                            <b-button variant="outline-primary" @click="verEvento(evento.id)">Crear Evento</b-button>
                        </td>
                    </tr>

                <tbody>

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
        this.getEventos();

        this.getDocentes();
    },
    methods:{
        async getEventos(){
            try {
                const eventosDB = await this.axios.get('eventos');

                await eventosDB.data.forEach(element => {
                   // console.log(element);
                    let evento = {};

                    evento.id = element.idEvento;
                    evento.descripcion = element.descripcion;
                    evento.fechaInicio = element.fechaInicio;
                    evento.facilitador = element.facilitador;
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
        async getDocentes(){
            let docente = {};
            try {
                const docentesDB = await this.axios.get('docentes');
                
                await docentesDB.data.forEach(element2 => {                                
                   
                   this.docentes.push(element2);

                   console.log(element2);

                });
     

                //console.log(eventosDB.data);
            } catch (error) {
                console.log(error);
            }
        },
    }
}
</script>

