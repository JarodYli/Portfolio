<template>
    <div>
        <input type="text" placeholder="Add task here" v-model="newTask" >
        <button @click="addTask">Add Task</button>
        <button @click="rm">Remove Item</button>
        <div  v-show="!this.show">
        <h1> To do in your Day</h1>
        <ul>
            <TaskItem
            v-for="task in tasks"
            :key="task"
            :item="task"
            :check="checked"
            v-on:clicked="upDateTask"></TaskItem>
        </ul>
        </div>

        <div v-show="this.show">
            <h1> Finished Tasks </h1>
            <button @click="clear">Clear Finished History</button>
        <ul>
            <li v-for="tasks in finishedTasks"
            :key="tasks">{{tasks}}</li>
        </ul>
        </div>
        <button @click="flip">Finished Tasks</button><br>
        

       <!-- Tasks: {{tasks}} <br>
       Finished: {{finishedTasks}} -->
    </div>
</template>

<script>

    import TaskItem from "./TaskItem";

    export default {
        
        data(){
            return{
                tasks: ["laundry", "exercise"],
                finishedTasks: [],
                newTask: "",
                checked: false,
                show: false,
            }
        },

        methods:{

            addTask(){
                var j = this.newTask;
                // 
                if(!this.tasks.includes(j) && !(j == "")){
                this.tasks.push(j);
                this.newTask = '';
                }
            },

            upDateTask(obj){
                var i = 0;
                var j = 0;
                if(obj.value == true){
                    this.finishedTasks.push(obj.item);
                }

                if(obj.value == false){
                    for(j = 0; j < this.finishedTasks.length; j++){

                        if(this.finishedTasks[j] == obj.item){
                            this.finishedTasks.splice(j,j+1);
                        }
                        
                }
                }


            },

            rm(){
            var i = 0;
            var length;
            for(i = 0; i < this.tasks.length; i++){
                if(this.finishedTasks.includes(this.tasks[i])){
                    console.log(this.tasks[i]);
                    this.tasks.splice(i,1);
                    i--;
                };
            }
            

                
            },
            // method to clear history of finished tasks
            clear(){
                this.finishedTasks = [];
            },

            flip(){
                this.show = !this.show;
            }
        }
    }
</script>

<style lang="scss" scoped>

</style>