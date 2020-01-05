<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light ">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" >Link1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">{{info}}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

 
</template>
 <script>
    /*export default {
        data(){
            return{
                info:""
            }
        },
        mounted() {
          axios.post("http://127.0.0.1:8000/api/emploi",{test:[
{name:"math",hours:4},
{name:"phisique",hours:6},
{name:"chimique",hours:4},
{name:"francais",hours:2},
{name:"sport",hours:2},
{name:"englais",hours:4}]})
          .then(response => (this.info = response.data))
    }
    }*/
</script>