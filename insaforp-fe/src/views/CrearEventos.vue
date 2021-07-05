
<template>
    <div>
        <h1>Informacion del evento </h1>
        <form class="pure-form pure-form-aligned center">
        <fieldset>
    
            <legend class="primary-title text-center ">
                <p>Centro de formacion XYZ</p>
                <p>Información de la acción formativa</p>
            </legend>
            <div class="pure-g">
                <!--FORM PRIMERA MITAD-->
                <div class="pure-u-1-2">
                    <div class="pure-control-group">
                        <label for="evet-name">NOMBRE</label>
                        <input id="evet-name" placeholder="Nombre del evento" type="text" v-model="evento.nombre">
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-description">DESCRIPCIÓN</label>
                        <input id="evet-name" placeholder="Descripción General del evento" type="text" v-model="evento.descripcion">
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-name">INICIO / FIN</label>
                        <input id="evet-name" type="date" v-model="evento.fechaInicio">
                        <input id="evet-name" type="date" v-model="evento.fechaFin">
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-name">UBICACIÓN</label>
                        <input id="evet-name" placeholder="UBICACIÓN" type="text" v-model="evento.ubicacion">
                    </div>
                    <div class="pure-control-group">
                        <label for="event-department">DEPARTAMENTO</label>
                        <select name="" id="event-department" v-model="evento.departamento">
                            <option value=' Ahuachapán'> Ahuachapán</option>
                            <option value='Santa Ana'>Santa Ana</option>
                            <option value='Sonsonate'>Sonsonate</option>
                            <option value='Chalatenango'>Chalatenango</option>
                            <option value='La Libertad'>La Libertad</option>
                            <option value='San Salvador'>San Salvador</option>
                            <option value='Cuscatlán'>Cuscatlán</option>
                            <option value='La Paz'>La Paz</option>
                            <option value='Cabañas'>Cabañas</option>
                            <option value='San Vicente'>San Vicente</option>
                            <option value=' Usulután'> Usulután</option>
                            <option value='San Miguel'>San Miguel</option>
                            <option value='Morazán'>Morazán</option>
                            <option value='La Unión'>La Unión</option>
                        </select>
                    
                        <label for="event-municipality">MUNICIPIO</label>
                        <select name="" id="event-municipality" v-model="evento.municipio">
                            <option value='Ahuachapán'>Ahuachapán</option>
                            <option value='Apaneca'>Apaneca</option>
                            <option value='Atiquizaya'>Atiquizaya</option>
                            <option value='Concepción de Ataco'>Concepción de Ataco</option>
                            <option value='El Refugio'>El Refugio</option>
                            <option value='Guaymango'>Guaymango</option>
                            <option value='Jujutla'>Jujutla</option>
                            <option value='San Francisco Menéndez'>San Francisco Menéndez</option>
                            <option value='San Lorenzo'>San Lorenzo</option>
                            <option value='San Pedro Puxtla'>San Pedro Puxtla</option>
                        </select>
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-name">HORAS CURSO:</label>
                        <input id="evet-name" placeholder="Nombre del evento" type="text" v-model="evento.horas_curso">
                    </div>
                    <div class="">
                        <label>CALENDARIZACIÓN DEL EVENTO</label>
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-name">FECHA Y HORA</label>
                        <input  type="date" v-model="horario.diaEvento">
                        <input  type="time" v-model="horario.horaInicio">
                        <input  type="time" v-model="horario.horaFinal">
                        <b-button variant="primary" @click="crearHorario()">Crear Evento</b-button>
                    </div>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>DIA</th>
                                    <th>INICIO</th>
                                    <th>FIN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="hora of horarios">
                                   <td>{{hora.diaEvento}}</td>
                                   <td>{{hora.horaInicio}}</td>
                                   <td>{{hora.horaFinal}}</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
    
                </div>
                <!--FIN FORM PRIMERA MITAD-->
                <!--FORM SEGUNDA MITAD-->
    
                <div class="pure-u-1-2">
                    <div class="pure-control-group">
                        <label for="evet-type">MODALIDAD</label>
                        <select name="" id="" v-model="evento.modalidad">
                            <option value="Virtual-Distancia">Virtual-Distancia</option>
                        </select>
                    </div>
                    <div class="pure-control-group"> 
                        <label for="evet-description">TIPO DE COSTO</label>
                        <select name="" id="" v-model="evento.tipo_costo">
                            <option value="Participante/Curso">Participante/Curso</option>
                        </select>
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-name">COSTO</label>
                        <input id="evet-name" placeholder="$0.00" type="text" v-model="evento.costo">
                        <label for="evet-name"># PARTICIPANTES</label>
                        <input id="evet-name" placeholder="0" type="text" v-model="evento.cantParticipante">
                    </div>
                    <div class="pure-control-group">
                        <label for="event-department">CANTIDAD DE EVALUACIONES</label>
                        <input id="evet-name" placeholder="# de Evaluaciones" type="text" v-model="evento.cantEvaluaciones">
                    </div>
                    <div class="pure-control-group">
                        <label for="event-municipality">CONTRATO</label>
                        <input id="evet-name" placeholder="# de Contrato" type="text" v-model="evento.contrato">
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-name">ORDEN DE COMPRA:</label>
                        <input id="evet-name" placeholder="# Orden de Compra" type="text" v-model="evento.ordenCompra">
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-name"># COMPRA BOLSA</label>
                        <input id="evet-name" placeholder="# de Compra en bolsa" type="text" v-model="evento.compraBolsa">
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-name"># ITEM</label>
                        <input id="evet-name" placeholder="# Item" type="text" v-model="evento.item">
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-description">PROGRAMA</label>
                        <select name="" id="" v-model="evento.programa">
                            <option value="Programa">Programa</option>
                        </select>
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-description">FACILITADOR</label>
                        <select name="" id="" v-model="evento.facilitador">
                            <option value="Jairo Machuca">Jairo Machuca</option>
                        </select>
                    </div>
    
                </div>
                <!--FIN FORM SEGUNDA MITAD-->
            </div>
            
            
        </fieldset>
    </form>
        <b-button variant="success" @click="crearEvento()">Crear Evento</b-button>
        
    </div>
</template>
        

<script>
    
    export default{
        data(){
            return{
                evento:{                    
                    nombre: "nombre del curso",
                    descripcion: "Curso de formación profesional 1",
                    fechaInicio: "2021-07-04",
                    fechaFin: "2021-07-10",
                    ubicacion: "soyapango",
                    departamento: "san salvador",
                    municipio: "soyapango",
                    horas_curso: 10,
                    modalidad: "presencial",
                    tipo_costo: "clientes",
                    costo: 950,
                    cantParticipante: 15,
                    cantEvaluaciones: 20,
                    contrato: 253689,
                    ordenCompra: 254897,
                    compraBolsa: 25,
                    item: 4,
                    programa: "",
                    facilitador: ""
                   },
                   horario:{
                        idEvento: 1,
                        diaEvento: "2021-07-05",
                        horaInicio: "08:00:00",
                        horaFinal: "16:00:00",
                   },
                   horarios:[],
                   savehorarios:[]
                   
                
            }
        },
        methods:{
            async crearEvento(){

                try {
                 console.log(this.evento);
                 
                 const eventoDB = await this.axios.post('eventos',this.evento); 

                 console.log(eventoDB);

                 let horario = [];
                 this.horarios.forEach(element => {
                    horario.idEvento = eventoDB.data.id;
                    horario.diaEvento = element.diaEvento;
                    horario.horaInicio =element.horaInicio;
                    horario.horaFinal =element.horaFinal;   

                    this.saveHorario(horario);
                    
                  
                     
                 });              
                 
                 
                } catch (error) {
                    console.log(error);
                }
                 
            },
             async crearHorario(){
                 let horario = [];                
                 horario.idEvento = this.horario.idEvento;
                 horario.diaEvento = this.horario.diaEvento;
                 horario.horaInicio =this.horario.horaInicio;
                 horario.horaFinal =this.horario.horaFinal;

                 this.horarios.push(horario);
                 console.log(this.horarios);
                 
            },
             async saveHorario(horario){
                 
                   
                 
                 const eventoDB = await this.axios.post('calendarizacion',horario);

                                 
                 
            } 
        }
    }

</script>