<template>
<section>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-9">
                    <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{temp_data[0].temp}}</h3>
                    <!--<p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>-->
                    </div>
                </div>
                <div class="col-3">
                    <div class="icon ">
                    <span class=''><img :src="'http://openweathermap.org/img/w/'+temp_data_icon+'.png'" alt=''></span>
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
                    <h3 class="mb-0">{{temp_data[0].humidity}}</h3>
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
</section>
        
        
    
</template>

<script>
    export default {
            data() {
                return {
                    temp_data_name: "",
                    temp_data_icon: "",
                    temp_data: [],
                };
            },
            mounted() {
                    
                    this.weather();
                },
                methods: {
                    
                weather:function(){
                   
                    var x = this;
                    var key = 'c7fc3a6413957ae64c074355f9e63f75';
                    
                     navigator.geolocation.getCurrentPosition(function(position) {
                       let lat = position.coords.latitude;
                       let long = position.coords.longitude;
                        console.log(lat);
                        console.log(long);
                        fetch('https://api.openweathermap.org/data/2.5/weather?lat='+lat+'&lon='+long+'&units=metric&appid=' + key)  
                        .then(function(resp) { return resp.json() }) // Convert data to json
                        .then(function(data) {
                            x.temp_data_name = data.name + ' ' + data.weather[0].description;
                            x.temp_data_icon = data.weather[0].icon;
                            x.temp_data.push(data.main);
                            console.log(x.temp_data);
                        })
                        .catch(function() {
                            // catch any errors
                        });
                    });
                }
                }
                   
               
               
    }
</script>
