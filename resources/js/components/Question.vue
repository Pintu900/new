
<template>
    <div>
       <div class="card card-body shadow-lg mb-4" v-for="task in questions" :key="task.id">
           <div class="media">
               <div class="media-body">
                <a href="#">  <h4> {{task.title}}</h4></a>
                           <p>{{task.description}}</p>
                           <span class="badge badge-pill badge-primary"> {{task.user.name}}</span>
                           <span class="badge badge-pill badge-primary">{{task.category.name}}</span>
                      
               </div>
           </div>
       </div>
       
    </div>
</template>


<script>
export default {
    data(){
        return {
            questions: []
        }
          
    },
    mounted(){
     this.getQuestions();
     //console.log('question');
    },
    methods:{
       getQuestions(){
            axios.get('/questions')
                .then(response =>{
                    console.log(response);
                    this.questions = response.data
                })
       }
    }
}
</script>

