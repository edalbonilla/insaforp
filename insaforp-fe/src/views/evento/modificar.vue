
<template>
    <div>
        <legend class="primary-title text-center ">
                <p>Centro de formacion XYZ</p>
                <p>Actualización de Evento</p>
        </legend>
        <form class="pure-form pure-form-aligned center">
        <fieldset>            
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
                        <input  type="date" v-model="horario.diaEvento"> -
                        <input  type="time" v-model="horario.horaInicio"> -
                        <input  type="time" v-model="horario.horaFinal"> -
                        <b-button variant="primary" @click="saveHorario()">Asignar</b-button>
                    </div>
                    <div>
                        <table  class="table">
                            <thead>
                                <tr>
                                    <th>DIA</th>
                                    <th>INICIO</th>
                                    <th>FIN</th>
                                    <th>OPCION</th>                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(hora, index) of horarios" :key="index">
                                   <td>{{hora.diaEvento}}</td>
                                   <td>{{hora.horaInicio}}</td>
                                   <td>{{hora.horaFinal}}</td>
                                   <td>                                                                    
                                        <b-button variant="outline-danger" @click="borrar(hora.id)">Eliminar</b-button>
                                    </td>
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
                            <option :value="evento.programa">{{programa}}</option>
                            <option v-for="(programa, index) of programas" :key="index" :value="programa.id">{{programa.Nombre}}</option>
                        </select>
                    </div>
                    <div class="pure-control-group">
                        <label for="evet-description">FACILITADOR</label>
                        <select name="" id="" v-model="evento.facilitador">
                             <option :value='evento.facilitador'>{{facilitador}}</option>
                            <option v-for="(docente, index) of docentes" :key="index" :value="docente.id">{{docente.Nombre}}</option>
                        </select>
                    </div>
    
                </div>
                <!--FIN FORM SEGUNDA MITAD-->
            </div>
            
            
        </fieldset>
    </form>
        <b-button variant="danger" @click="modificar()">Modificar Evento</b-button> - 
        
        <input @click="regresar()" type="button" value="Salir" class="btn btn-success">
        
        
    </div>
</template>
        

<script>
    
    export default{
        data(){
            return{
                evento:{   
                    id:'',
                    nombre: '',
                    descripcion: "",
                    fechaInicio: "",
                    fechaFin: "",
                    ubicacion: "",
                    departamento: "",
                    municipio: "",
                    horas_curso: '',
                    modalidad: "",
                    tipo_costo: "",
                    costo: '',
                    cantParticipante: '',
                    cantEvaluaciones: '',
                    contrato: '',
                    ordenCompra: '',
                    compraBolsa: '',
                    item: '',
                    programa: "",
                    facilitador: ""
                   },
                   horario:{
                        idEvento: 0,
                        diaEvento: "",
                        horaInicio: "",
                        horaFinal: "", 
                   },
                   horarios:[],
                   savehorarios:[],
                   docentes:[],
                   programas:[],
                   facilitador:'',
                   programa:''                                   
            }
        },
        created(){     
            this.getHorario();
        },
        methods:{
            async modificar(){

                try {                    
                    const eventoDB = await this.axios.put('eventos/'+this.evento.id,this.evento);
                    alert('Evento Creado');
                    this.docente= [];
                    this.$router.push('/eventos');
                    
                } catch (error) {        
                    this.docente= [];
                    this.$router.push('/eventos');                            
                }                                

                 
            },
             async saveHorario(horario){
                this.horario.id = this.evento.id;              
                 const eventoDB = await this.axios.post('calendarizacion',this.horario);
                 this.horario={};
                 this.getHorario();
                 
            },
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
                    alert('Error en docentes'+error);
                }
            },
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
                alert(error);
            }
        },
         getDocenteById(id){             
            const resultado = this.docentes.find( docente => docente.id === id);
            return resultado.Nombre;
        },
         getProgramaById(id){
            const resultado = this.programas.find( programa => programa.id === id);            
            return resultado.Nombre;
        },
        async saveHorario(){     
                this.horario.idEvento=this.evento.id;                                                
                const eventoDB = await this.axios.post('calendarizacion',this.horario);
                this.horario={};
                this.horarios=[];
                this.getHorario();
         
         },
         async getHorario(){     
               try {
                const docentesDB = await this.axios.get('calendarizacion');

                await docentesDB.data.forEach(element => {                   
                    if(element.idEvento == this.$route.params.id){
                        let horario = {};
                        horario.id = element.idCE;
                        horario.diaEvento = element.diaEvento;                    
                        horario.horaInicio = element.horaInicio;                    
                        horario.horaFinal = element.horaFinal;
                        this.horarios.push(horario);                  
                    }  

                });              

              
                } catch (error) {
                    alert('Error en docentes'+error);
                }
         
         },
          async borrar(id){
             try {
                if(confirm("Esta seguro en eliminar este horario")){
                    const programassDB = await this.axios.delete('calendarizacion/'+ id); 
                    this.horarios=[] 
                    this.getHorario();                    
                }

              
            } catch (error) {
                console.log(error);
            }
        },
            regresar(){
                this.evento= {};
                this.$router.push('/eventos'); 
            }

        },
        mounted:function(){
                try {
                    this.getDocentes();
                    this.getProgramas();
                    const eventoDB =  this.axios.get('eventos/'+this.$route.params.id).then(datos=>{
                  
                        this.evento.id = datos.data.idEvento,
                        this.evento.nombre=datos.data.nombre,
                        this.evento.descripcion=datos.data.descripcion,
                        this.evento.fechaInicio=datos.data.fechaInicio,
                        this.evento.fechaFin=datos.data.fechaFin,
                        this.evento.ubicacion=datos.data.ubicacion,
                        this.evento.departamento=datos.data.departamento,
                        this.evento.municipio=datos.data.municipio,
                        this.evento.horas_curso=datos.data.horas_curso,
                        this.evento.modalidad=datos.data.modalidad,
                        this.evento.tipo_costo=datos.data.tipo_costo,
                        this.evento.costo=datos.data.costo,
                        this.evento.cantParticipante=datos.data.cantParticipante,
                        this.evento.cantEvaluaciones=datos.data.cantEvaluaciones,
                        this.evento.contrato=datos.data.contrato,
                        this.evento.ordenCompra=datos.data.ordenCompra,
                        this.evento.compraBolsa=datos.data.compraBolsa,
                        this.evento.item=datos.data.item,
                        this.evento.programa=datos.data.programa,
                        this.evento.facilitador=datos.data.facilitador

                        this.programa = this.getProgramaById(datos.data.programa)
                        this.facilitador = this.getDocenteById(datos.data.facilitador);   

                       
                    });         
                    
                                    
                    

                } catch (error) {
                    console.log(error);                            

                }                      

            }
    }

</script>