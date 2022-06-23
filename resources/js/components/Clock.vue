<template>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{date_time}}</h3>
                    <!--<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>-->
                    </div>
                </div>
                <div class="col-3">
                    <div class="icon icon-box-success ">
                    <span class="mdi mdi-clock"></span>
                    </div>
                </div>
                </div>
                <h6 class="text-muted font-weight-normal">Clock</h6>
            </div>
            </div>
        </div>
   
</template>

<script>
    export default {
            data() {
                return {
                    date_time: "",
                    
                };
            },
            mounted() {
                    
                    this.clock();
                },
                methods: {
                    
                clock:function(){
                    var x = this;
                     setInterval(function(){
        
                            let novaHora = new Date();
                            // getHours trará a hora
                            // geMinutes trará os minutos
                            // getSeconds trará os segundos
                            let hora = novaHora.getHours();
                            let minuto = novaHora.getMinutes();
                            let segundo = novaHora.getSeconds();
                            // Chamamos a função zero para que ela retorne a concatenação
                            // com os minutos e segundos
                            //minuto = zero(minuto);
                            //segundo = zero(segundo);
                            // Com o textContent, iremos inserir as horas, minutos e segundos
                            // no nosso elemento HTML
                            x.date_time = hora + ":" + minuto;
                            //this.data.minute.push(minuto);
                            console.log(x.date_time)
                            //document.getElementById('hora').textContent = hora+':'+minuto+':'+segundo;
                        },1000)
                        }
                }
                   
               
               
    }
</script>
