<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">



<meta charset="utf-8">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<body>
<body>
<div id="app">
    <div style="background-color:#b00000;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                 English
                                @break
                                @case('ru')
                                Русский язык
                                @break
                                
                                @default
                                 English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile/en"> English</a>
                            <a class="dropdown-item" href="profile/ru"> Русский язык</a>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</div> 

<style>
         body{
            margin: 0 auto;
            background-color: black;
          
            background-image: url("https://c.pxhere.com/photos/2b/3e/black_and_white_car_classic_garage_job_mechanic_repairer_repairing-919329.jpg!d" );
            background-repeat: no-repeat;
           background-size: 900px 625px;}
           .main{
            background-color: rgba(100,0,0,0.6);

            color:white;
            padding: 40px 40px;
            width: 700px;
            position: absolute;
            top: 400px;
            left: 100px;
             }
            .colortext{
            color: #b00000;
            font-size: 25px;}
            .store{
                position: absolute;
                left: 1100px;
                top: 70px;
            }
            h1{
                color: white;
            }
            .logo{
                position: absolute;
                top: 0px;
            }
            .service{
            	position:absolute;
            	top:530px;
            	left: 100px;
            }
            {
   box-sizing: border-box;
}
.railway {
   max-width: 350px;
   margin: 50px auto 0;
   padding: 20px;
   background:rgba(100,0,0,0.6);
   font-family: 'Oswald', sans-serif;
}
.stripes-block {
   position: relative;
   padding: 10px 10px 15px;
   margin-bottom: 20px;
  
}

.line {
   width: 60%;
   margin: 0 auto;
   height: 15px;
   border-radius: 3px;
  
}
.railway h3 {
   padding: 7px;
   margin-bottom: 20px;
   text-align: center;
   line-height: 1;
   text-transform: uppercase;
   color: white;
   background: black;
}
.form-group {
   margin-bottom: 20px;
   padding: 10px;
   background:black;
}
.form-group input, .form-group label, .form-group textarea {
   display: block;
   width: 100%;
}
.form-group input {
   padding: 0;
   line-height: 30px;
   background: white;
   border-width: 0;
}
.form-group label {
   margin-bottom: 5px;
   color: white;
   text-transform: uppercase;
   font-size: 12px;
}
.submit-block {
   padding: 10px 20px 20px;
   
   text-align: center;
   cursor: pointer;
}
.submit-button {
   display: inline-block;
   padding: 5px 10px;
   background: white;
}
.submit-button input {
   padding: 0;
   background:white;
   border-width: 0;
   text-transform: uppercase;
   cursor: pointer;
}
.anketa{
	position: absolute;
	right: 50px;
	top: 20px;
}
#myChart{
	position: absolute;
	top: 3700px;
}
#myChart1{
	position: absolute;
	top: 3830px;
}
#myChart2{
	position: absolute;
	top: 3960px;
}
.result{
	position: absolute;
	top: 3650px;
	left: 500px;
}
.about{
  position: absolute;
  top: 650px;
  left: 600px;

}
hr{
  background-color: white;
  position: relative;
  top: 600px;
}
#id1{
  width: 300px;
  background-color: white;
  position: relative;
  top: 630px;
}
.car{
  position: absolute;
  top: 800px;

}
       </style>
       <div class="logo">
           <img src="https://image.freepik.com/free-vector/speed-car-logo-template_160069-12.jpg" width="150" height="62">
       </div>

<div class="main"><center>
    <h1>{{__('profile.welcome')}}</h1>
    <h2>{{__('profile.to our garage')}}</h2>
    <h5>{{__('profile.we will make you love your car')}}</h5>
     </div></center>
  
<div class="anketa">
<form action="upload" method="POST" enctype="multipart/form-data" class="railway">
	@csrf
<div class="stripes-block">
<div class="line"></div>
</div>
<h3>{{__('profile.Information about the car owner')}}</h3>
<div class="form-group">
<input type="text" id="name" required><label for="name">{{__('profile.NAME')}}</label>
<input type="text" id="reason" required><label for="pass">{{__('profile.REASON')}}</label>
<input type="email" id="email" required><label for="email">{{__('profile.EMAIL')}}</label>
<input type="file" name="file" required><label for="file">{{__('profile.UPLOAD FILE')}}</label>
<input type="text" id="phone" required><label for="phone">{{__('profile.PHONE NUMBER')}}</label>
</div>
<div class="submit-block">
<div class="submit-button">
<i class="fa fa-train" aria-hidden="true"></i><br>
<button type="submit">{{__('profile.UPLOAD FILE')}}</button>
</div>
</div>
</form>
</div>
<hr>
<hr id="id1">
<div class="about">
    <h1><span class="colortext">{{__('profile.ABOUT')}}</span>{{__('profile.US')}}</h1>
    
 </div> 
 <div class="car">
   <img src="http://pngimg.com/uploads/tesla_car/tesla_car_PNG3.png">
 </div>
<div class="txt">
  
</div>













<div class="result">
    <h1><span class="colortext">{{__('profile.our')}}</span>{{__('profile.result in year')}}</h1>
    
 </div> 

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</script>
</head>
<body>
<canvas id="myChart" width="0" height="0"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("myChart");
   var myChart = new Chart(ctx, {
      type: 'bar',
         data: {
            labels: ["2016", "2019" , "2020" , "2021"],
            datasets: [
               { label: 'GARAGE users',
               data: [7000,9000,10000,15000],
               backgroundColor :['rgba(255, 12, 10, 1)',
               'rgba(234, 102, 235, 1)',
               'rgba(255, 250, 36, 1)',
               'rgba(153, 62, 255, 1)',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>


<canvas id="myChart1" width="0.7" height="0.7"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("myChart1");
   var myChart1 = new Chart(ctx, {
      type: 'pie',
         data: {
            labels: ["car wash","mechanic","purchase"],
            datasets: [
               { label: 'Pie chart example',
               data: [10,20,30],
               backgroundColor :['rgba(255, 12, 10, 1)',
               'rgba(234, 102, 235, 1)',
               'rgba(255, 250, 36, 1)',
               
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
</script>

<canvas id="myChart2" width="0.7" height="0.7"></canvas>
<script type="text/javascript">
   var ctx = document.getElementById("myChart2");
   var myChart2 = new Chart(ctx, {
      type: 'line',
         data: {
            labels: ["January","February","April","May","June","September","October"],
            datasets: [
               { label: "Dataset in GARAGE ",
               data: [65,59,80,84,69,40,55],
               fill:false,"borderColor":"rgb(75,192,24)","lineTension":0.1}
               
            ]
         },
         "options":{}});
     
</script>
</body>
</html>
</body>
</html>
</body>
</html>