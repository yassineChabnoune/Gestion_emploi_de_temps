<template>
    <div>
        <div  class="card card1 shadow-lg p-3 mb-5 bg-white rounded" >
            <div class="card-body">
                <div class="image">
                    <img src="../../../public/image/logo.png" width="100" height="100" class="rounded" alt="Cinque Terre" />
                </div>
                <br><br>
                <div class="container">
                    <div class="row">
                        <input  type="text" class="form-control text col-6" placeholder="Ajouter un Element" v-model="newtodo" >
                        <input  type="number" class="form-control text col-6" placeholder="La duree" v-model="newduree" >
                    </div>
                </div>
                 <div class="container">
                     <div class="row">
                       <button class="col-12 ds" v-on:click="Addelement">Add+</button>
                    </div>
                 </div>
                 <br>
                <div class="container">
                 
                            <div class="row" v-for="(todo,index) in todos" v-bind:key="index">
                                <label class="label col-6">{{todo.name}}</label>    <label class="label col-6">{{todo.hours}}</label>
                            </div>
                </div>
                <br>
                <br>
                <div class="container">
                    <div class="row">
                  <button  class="col-6 ds" v-on:click="Show">Générer</button>
                      <button onclick="window.location.href='http://127.0.0.1:8000/api/pdf'" class="col-6 ds">Télécharger Emploi du Temps</button>
            </div></div></div>
        </div>

        <div  class="card card1 shadow-lg p-3 mb-5 bg-white rounded" >
            <div class="card-body">
                <table class="test">
                        <thead>
                            <td class="width-td">tt</td>
                            <td class="width-td">8 -> 10</td>
                            <td class="width-td">10 -> 12</td>
                            <td class="width-td">14 -> 16</td>
                            <td class="width-td">16 -> 18</td>
                        </thead>
                </table>
                <table class="test">
                        <tr class="tr">
                            <td class="td-jour">Lundi</td>
                        </tr>
                        <tr class="tr">
                            <td class="td-jour">Mardi</td>
                        </tr>
                        <tr class="tr">
                            <td class="td-jour">Mercredi</td>
                        </tr>
                        <tr class="tr">
                            <td class="td-jour">Jeudi</td>
                        </tr>
                        <tr class="tr">
                            <td class="td-jour">Vendredi</td>
                        </tr>
                </table>
                <div class="marg">
                <div class="container test ">
                        <div class="row test1">
                             <h5  v-for="(item,index) in info" v-bind:key="index" class="card-emploi">{{item}}</h5>
                          </div>
                       </div>  
             </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data (){
        return{
            todos:[],
            newtodo:'',
            newduree : '',
            info : []
        }
    },
    methods: {
        Addelement(){
            this.todos.push({
                name : this.newtodo,
                hours:parseInt(this.newduree)
            })
            this.newtodo = ''
          
        },
        Show(){
              axios.post("http://127.0.0.1:8000/api/emploi",{test:this.todos})
             .then(response => this.info=response.data )
        },
        down(){
                   axios.get("http://127.0.0.1:8000/api/pdf")
                   
        }
        
    }


}
</script>


