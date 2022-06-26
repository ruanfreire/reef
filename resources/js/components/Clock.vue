<template>
<div class="row">
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
<div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{temp_data.temp}}</h3>
                    <!--<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>-->
                    </div>
                </div>
                <div class="col-3">
                    <div class="icon ">
                    <span class=''><img :src="'https://openweathermap.org/img/w/'+temp_data_icon+'.png'" alt=''></span>
                    </div>
                </div>
                </div>
                <h6 class="text-muted font-weight-normal">Weather {{temp_data_name}}</h6>
                
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{temp_data.humidity}}</h3>
                    <!--<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>-->
                    </div>
                </div>
                <div class="col-3">
                    <div class="icon ">
                    <span class='mdi mdi-water'></span>
                    </div>
                </div>
                </div>
                <h6 class="text-muted font-weight-normal">Weather {{temp_data_name}} air humidity</h6>
                
            </div>
            </div>
        </div>
</div>
        
   
</template>

<script>
    export default {
            data() {
                return {
                    date_time: "00:00",
                    temp_data_name: "Carregando",
                    temp_data_icon: "10d",
                    temp_data: [
                        {
                            feels_like:'00', 
                            humidity: '00',
                            pressure: '00',
                            temp: '00',
                            temp_max: '00',
                            temp_min: '00'
                        }
                    ],
                };
            },
            mounted() {
                    
                   
                },
                created: function () {
                     this.clock();
                    this.weather();
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
                           // console.log(x.date_time)
                            //document.getElementById('hora').textContent = hora+':'+minuto+':'+segundo;
                        },1000)
                        },
                weather:function(){
                   
                    var x = this;
                    var key = 'c7fc3a6413957ae64c074355f9e63f75';
                    
                     navigator.geolocation.getCurrentPosition(function(position) {
                       let lat = position.coords.latitude;
                       let long = position.coords.longitude;
                        fetch('https://api.openweathermap.org/data/2.5/weather?lat='+lat+'&lon='+long+'&units=metric&appid=' + key)  
                        .then(function(resp) { return resp.json() }) // Convert data to json
                        .then(function(data) {
                            x.temp_data_name = data.name + ' ' + data.weather[0].description;
                            x.temp_data_icon = data.weather[0].icon;
                            x.temp_data = {
                                feels_like: data.main.feels_like, 
                                humidity: data.main.humidity,
                                pressure: data.main.pressure,
                                temp: data.main.temp,
                                temp_max: data.main.temp_max,
                                temp_min: data.main.temp_min
                            },
                            console.log( x.temp_data );
                        })
                        .catch(function() {
                            // catch any errors
                        });
                    });
                }

                }
                   
               
               
    }
</script>
