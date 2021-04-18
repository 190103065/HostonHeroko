<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">


<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel Uploading</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- Styles -->



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
   background:#4a4a4a;
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
	top: 3600px;
	left: 550px;
}

#id6{
  width: 300px;
  background-color: white;
  position: relative;
  top: 3560px;
}

#id7{
  background-color: white;
  position: relative;
  top: 3500px;
}
.charity{
position: absolute;
top: 4300px;
left: 600px;
}
#id8{
  background-color: white;
  position: relative;
  top: 4200px;
}
#id9{
  width: 300px;
  background-color: white;
  position: relative;
  top: 4230px;
}
.about{
  position: absolute;
  top: 650px;
  left: 600px;

}
.shop{
  position: absolute;
  top: 1310px;
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

#id2{
  background-color: white;
  position: relative;
  top: 1230px;
}
#id3{
  width: 300px;
  background-color: white;
  position: relative;
  top: 1260px;
}
.car{
  position: absolute;
  top: 800px;

}

.naz4{
  position: absolute;
  top: 4500px;
  left: 570px;
}
.col-md-8{
  color: white;
}
.txt{
  position: absolute;
  top: 850px;
  left: 750px;
}
.tex{
  position: absolute;
  top: 1500px;

}
.logo{
  position: absolute;
  top: -20px;
  left: -50px;

}
.flex-containers{
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      position:absolute;
      top:1500px;
       left: 20px;
       right: 20px;
      }
     .flex-containers div{
      padding:20px;
      border:1px solid red;
      }  
      h1,h2,h3,h4,h5,h6{
        color: white;
      } 
      .garag{
        position: absolute;
        top: 2900px;
        left: 350px;
      }
      #id4{
  background-color: white;
  position: relative;
  top: 2790px;
}
#id5{
  width: 300px;
  background-color: white;
  position: relative;
  top: 2820px;
}
.custom{
  position: absolute;
  top: 3100px;
  left: 125px;

}
.re{position: absolute;
  top: 3300px;
  left: 190px;

}
.pe{
position: absolute;
top: 3300px;
  left: 540px;
}
.zi{
position: absolute;
top: 3300px;
  left: 900px;
}
#hh{
  position: absolute;
  top: -30px;
  left: 575px;

}
#hh2{
  position: absolute;
  top: -30px;
  left: 575px;

}
#hh3{
  position: absolute;
  top: -30px;
  left: 575px;

}
#hn{
  position: absolute;
  top: 50px;
  left: 325px;
}
.box1{
  position: absolute;
  top: 1500px;
}
.box2{
  position: absolute;
  top: 1900px;
}
.box3{
  position: absolute;
  top: 2400px;
}
#nn{
  position: absolute;
  top: 110px;
  left: 325px;
}
#nk{
  position: absolute;
  top: 180px;
  left: 325px;
}
#nt{
  position: absolute;
  top: 250px;
  left: 325px;
}
.ank{
  position: absolute;
  top: 1450px;
  left: 950px;
  
}

.stripes-block1 {
   position: relative;
   padding: 10px 10px 15px;
   margin-bottom: 20px;
  
}

.line1 {
   width: 60%;
   margin: 0 auto;
   height: 15px;
   border-radius: 3px;
  
}
.railway1 h3 {
   padding: 7px;
   margin-bottom: 20px;
   text-align: center;
   line-height: 1;
   text-transform: uppercase;
   color: white;
   background: rgba(100,0,0,0.6);
}
.form-group1 {
   margin-bottom: 20px;
   padding: 10px;
   background:black;
}
.form-group1 input, .form-group1 label, .form-group1 textarea {
   display: block;
   width: 100%;
}
.form-group1 input {
   padding: 0;
   line-height: 30px;
   background: white;
   border-width: 0;
}
.form-group1 label {
   margin-bottom: 5px;
   color: white;
   text-transform: uppercase;
   font-size: 12px;
}
.submit-block1 {
   padding: 10px 20px 20px;
   
   text-align: center;
   cursor: pointer;
}

.submit-button1 input {
   padding: 0;
   background:white;
   border-width: 0;
   text-transform: uppercase;
   cursor: pointer;
}

.ank2{
  position: absolute;
  top: 1850px;
  left: 950px;
  
}

.stripes-block2 {
   position: relative;
   padding: 10px 10px 15px;
   margin-bottom: 20px;
  
}

.line2 {
   width: 60%;
   margin: 0 auto;
   height: 15px;
   border-radius: 3px;
  
}
.railway2 h3 {
   padding: 7px;
   margin-bottom: 20px;
   text-align: center;
   line-height: 1;
   text-transform: uppercase;
   color: white;
   background: rgba(100,0,0,0.6);
}
.form-group2 {
   margin-bottom: 20px;
   padding: 10px;
   background:black;
}
.form-group2 input, .form-group2 label, .form-group2 textarea {
   display: block;
   width: 100%;
}
.form-group2 input {
   padding: 0;
   line-height: 30px;
   background: white;
   border-width: 0;
}
.form-group2 label {
   margin-bottom: 5px;
   color: white;
   text-transform: uppercase;
   font-size: 12px;
}
.submit-block2 {
   padding: 10px 20px 20px;
   
   text-align: center;
   cursor: pointer;
}

.submit-button2 input {
   padding: 0;
   background:white;
   border-width: 0;
   text-transform: uppercase;
   cursor: pointer;
}


.ank3{
  position: absolute;
  top: 2350px;
  left: 950px;
  
}

.stripes-block3 {
   position: relative;
   padding: 10px 10px 15px;
   margin-bottom: 20px;
  
}

.line3 {
   width: 60%;
   margin: 0 auto;
   height: 15px;
   border-radius: 3px;
  
}
.railway3 h3 {
   padding: 7px;
   margin-bottom: 20px;
   text-align: center;
   line-height: 1;
   text-transform: uppercase;
   color: white;
   background: rgba(100,0,0,0.6);
}
.form-group3 {
   margin-bottom: 20px;
   padding: 10px;
   background:black;
}
.form-group3 input, .form-group3 label, .form-group3 textarea {
   display: block;
   width: 100%;
}
.form-group3 input {
   padding: 0;
   line-height: 30px;
   background: white;
   border-width: 0;
}
.form-group3 label {
   margin-bottom: 5px;
   color: white;
   text-transform: uppercase;
   font-size: 12px;
}
.submit-block3 {
   padding: 10px 20px 20px;
   
   text-align: center;
   cursor: pointer;
}

.submit-button3 input {
   padding: 0;
   background:white;
   border-width: 0;
   text-transform: uppercase;
   cursor: pointer;
}
.hey{
  color: black;
}
     </style>
       <div class="logo">
           <img src="uploads/nnn.png"  width="300px" height="300px">
       </div>

<div class="main"><center>
    <h1>{{__('profile.welcome')}}</h1>
    <h2>{{__('profile.to our garage')}}</h2>
    <h5>{{__('profile.we will make you love your car')}}</h5>
     </div></center>
  
<div class="anketa">
<form action="http://localhost/pro/public/mail/send" enctype="multipart/form-data" class="railway">
	@csrf
<div class="stripes-block">
<div class="line"></div>
</div>
<h3>{{__('profile.Information about the car owner')}}</h3>
<div class="form-group">
<input type="text" id="name" required><label for="name">{{__('profile.NAME')}}</label>
<input type="text" id="reason" required><label for="pass">{{__('profile.REASON')}}</label>
<input type="email" id="email" required><label for="email">{{__('profile.EMAIL')}}</label>
<input type="text" id="phone" required><label for="phone">{{__('profile.PHONE NUMBER')}}</label>
<input type="date" name=""><label for="date">{{__('profile.DATA')}}</label>

<select name="menu" size="1">
<option value="first">Иван Семенович</option>
<option selected="selected" value="second">Петр Казаханов</option>
<option value="third">Кайрат Нуров</option>
<option value="fourth">Иван Петрович</option>
</select>
<label for="menu">{{__('profile.MECHANIC')}}</label>

</div>
<div class="submit-block">
<div class="submit-button">
<i class="fa fa-train" aria-hidden="true"></i><br>
<button type="submit">{{__('profile.SEND')}}</button>
</div>
</div>
</form>
</div>
<hr>
<hr id="id1">
<div class="about">
    <h1><span class="colortext">{{__('profile.ABOUT')}}</span>{{__('profile.US')}}</h1>
    
 </div> 

<hr id="id2">
<hr id="id3">
<div class="shop">
    <h1><span class="colortext">{{__('profile.our')}}</span>{{__('profile.services')}}</h1>
</div>
 <div class="car">
   <img src="http://pngimg.com/uploads/tesla_car/tesla_car_PNG3.png">
 </div>
<div class="txt">
  <h1>
{{__('profile.Our auto service has been on the market for more than 6 years.')}} {{__('profile.And we can say with')}} </h1>
<h1>{{__('profile.our heads held high that we are the best in this field.')}} {{__('profile.Our auto service')}}</h1>
<h1>{{__('profile.was founded in 2015, by our CEO Kosherbay Nazgul.')}} {{__('profile.We are ready to work harder and harder.')}}</h1>

</div>



  <div class="box1">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqUu4GklRCnIvhF70xjgUEJn50wXIg1JUQaA&usqp=CAU" width="300" height="300">
    <center><h3 id="hh"><span class="colortext">{{__('profile.Technical Inspection')}}</span></h3>
    <h4 id="hn">{{__('profile.GARAGE car service performs technical inspection of vehicles of the following categories:')}}</h4>

<h5 id="nn">{{__('profile.* M1-vehicles used for passenger transportation and having, in addition to the drivers seat, no more than eight seats;')}}</h5>
<h5 id="nk">{{__('profile.* M2-vehicles used for the carriage of passengers, having, in addition to the drivers seat, more than 8 seats, the technically permissible maximum weight of which does not exceed 5 tons;')}}</h5>
<h5 id="nt">{{__('profile.* N1-vehicles for the transport of goods with a technically permissible maximum mass of not more than 3.5 tons;')}}
</h5>
<h2>{{__('profile.You can pre-register for a technical inspection at a single number ')}}<span class="colortext"> 51-10-10</span> {{__('profile.or write to us by email ')}}</h2>
</div>
<div class="ank">
<form enctype="multipart/form-data" class="railway1">
  @csrf
<div class="stripes-block1">
<div class="line1"></div>
</div>
<h3>{{__('profile.Enroll or registred now')}}</h3>
<div class="form-group1">
<input type="text" id="name" required><label for="name">{{__('profile.NAME')}}</label>
<input type="email" id="email" required><label for="email">{{__('profile.EMAIL')}}</label>
<input type="text" id="phone" required><label for="phone">{{__('profile.PHONE NUMBER')}}</label>
</div>
<div class="submit-block1">
<div class="submit-button1">
<button type="submit">{{__('profile.SEND')}}</button>
</div>
</div>
</form>
</div>


  <div class="box2">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEWdiX8afUYXvOFAhSr6Pkwo3c9cBIwo8PYg&usqp=CAU" width="300" height="300">
    <center><h3 id="hh"><span class="colortext">{{__('profile.Locksmith Work')}}</span></h3>
      <h4 id="hn">{{__('profile.Submitted works:')}}</h4>
   
<h5 id="nn">{{__('profile.* Car wash complex;')}}</h5>
<h5 id="nk">{{__('profile.* Hardware oil replacement;')}}</h5>
<h5 id="nt">{{__('profile.* Fuel system diagnostics and cleaning;')}}</h5>
<h2>{{__('profile.You can pre-register for a technical inspection at a single number;')}} <span class="colortext"> 51-10-10</span> {{__('profile.or write to us by email ')}} </h2>
</div>
<div class="ank2">
<form enctype="multipart/form-data" class="railway2">
  @csrf
<div class="stripes-block2">
<div class="line2"></div>
</div>
<h3>{{__('profile.Enroll or registred now')}}</h3>
<div class="form-group2">
<input type="text" id="name" required><label for="name">{{__('profile.NAME')}}</label>
<input type="email" id="email" required><label for="email">{{__('profile.EMAIL')}}</label>
<input type="text" id="phone" required><label for="phone">{{__('profile.PHONE NUMBER')}}</label>
</div>
<div class="submit-block2">
<div class="submit-button2">
<button type="submit">{{__('profile.SEND')}}</button>
</div>
</div>
</form>
</div>

  <div class="box3">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRskKr2oqNkLd9lsXPtFHOLR-heZ-yH4LdKmA&usqp=CAU" width="300" height="300">
    <center><h3 id="hh3"><span class="colortext">{{__('profile.Bodywork Works')}}</span></h3>
    <h4 id="hn">{{__('profile.Advantages of painting cars in the GARAGE service:')}}</h4>
   
<h5 id="nn">{{__('profile.* Every employee of the paint shop has a huge amount of theoretical knowledge and solid practical experience;')}}</h5>
<h5 id="nk">{{__('profile.* We offer really reasonable prices for body repairs and give a guarantee for the work performed;')}}</h5>
<h5 id="nt">{{__('profile.* We are happy to work with both individuals and organizations, conclude contracts for corporate maintenance and repair of fleets;')}}</h5>
<h2>{{__('profile.You can pre-register for a technical inspection at a single number ')}}<span class="colortext"> 51-10-10</span> {{__('profile.or write to us by email ')}}</h2>
</div>
<div class="ank3">
<form enctype="multipart/form-data" class="railway3">
  @csrf
<div class="stripes-block3">
<div class="line3"></div>
</div>
<h3>{{__('profile.Enroll or registred now')}}</h3>
<div class="form-group3">
<input type="text" id="name" required><label for="name">{{__('profile.NAME')}}</label>
<input type="email" id="email" required><label for="email">{{__('profile.EMAIL')}}</label>
<input type="text" id="phone" required><label for="phone">{{__('profile.PHONE NUMBER')}}</label>
</div>
<div class="submit-block3">
<div class="submit-button3">
<button type="submit">{{__('profile.SEND')}}</button>
</div>
</div>
</form>
</div>





  


<div class="garag">
  
<h1><span class="colortext">{{__('profile.GARAGE')}}</span>{{__('profile.CAR SERVICE HAS EARNED THE TRUST OF CUSTOMERS')}}</h1>
</div>

<hr id="id4">
<hr id="id5">


<div class="custom"><img src="uploads/aaa.png"></div>
  <div class="re"><center>
    <h1>{{__('profile.GREAT EXPERIENCE')}}</h1>
    <h3>{{__('profile.We repair more than 6 years')}}</h3>
  </center></div>
  <div class="pe"><center>
    <h1>{{__('profile.GUARANTEES')}}</h1>
    <h3>{{__('profile.We guarantee high quality of services')}}</h3>
  </center></div>
  <div class="zi"><center>
    <h1>{{__('profile.AVAILABILITY')}}</h1>
    <h3>{{__('profile.Convenient location Optimal prices')}}</h3>
  </center></div>








<div class="naz4">



    <div class="container mt-5">
        <h3 class="text-center mb-5">{{__('profile.Upload your charity')}}</h3>
        <form action="{{route('upload.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3 text-center">
                <div class="preview"></div>
            </div>            

            <div class="custom-file">
                <input type="file" name="fileCollection[]" class="custom-file-input" id="multiImg" multiple="multiple">
                <label class="custom-file-label" for="images">{{__('profile.Select File')}}</label>
            </div>

            <button type="submit" name="submit" class="btn btn-danger btn-block mt-5">
                {{__('profile.Upload')}}
            </button>
        </form>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
    $(function() {
        var imgPrev = function(input, imgPlaceholder) {

            if (input.files) {
                var allFiles = input.files.length;

                for (i = 0; i < allFiles; i++) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPlaceholder);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $('#multiImg').on('change', function() {
            imgPrev(this, 'div.preview');
        });
    });    
    </script>

</div>



<hr id="id8">
<hr id="id9">
<div class="charity">
    <h1><span class="colortext">{{__('profile.CHARITY')}}</span></h1>
    
 </div> 




<hr id="id6">
<hr id="id7">
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