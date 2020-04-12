@extends('layouts.app')

@section('content')


<main id="main">

    <section id="pricing" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Writing Task</h3>
          <span class="section-divider"></span>
         
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="box featured wow " data-aos="fade-up">
              <h3>Writing Questions</h3>
              <br>
              @if(count($data)>0)
              @foreach($data as $row)
              <button class="accordion" style="margin:10px">{{$row->taskQue}}</button>
              <div class="panel">

                <div class="col-md-12" style="padding:10px;margin: 5px">
                      <p style="color: gray;font-size: 15px">{{$row->taskAns}}</p>
                         
                </div>
                 
               <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
              </div>
              @endforeach
              @endif
              <div class="alert alert-info" style="text-align: left;margin:30px">
              <strong>Notes:</strong>
              <br>
              <pre>
- Maximum length of answer is 250 words.
- If candidate sends more than one answers than only first one will checked.
- Result will updated weekly.</pre>
            </div>
            </div>
          </div>
        </div>
       @if(Auth::check())
        <div class="row">
          <div class="col-lg-12 col-md-12">
             <div class="box featured wow " data-aos="fade-down">
              <h3>Answer Area</h3>
              <br>
              @if(\Session::has('success'))
              <div class="alert alert-success">
                  <p>{{\Session::get('success')}}</p>
              </div>
            @endif
              <form class="form-group" method="get" action="Uname/{{$data[0]->id}}">
                {{csrf_field()}}
	          	<textarea class="form-control" name="dtxt" placeholder="Put your answer here!" style="height:400px"></textarea>
	          	<br>

                 <input type="submit" name="Wbtn" class="get-started-btn" >
	          </form>
            </div>
          </div>
        </div>
         <div class="row">
          <div class="col-md-12" >
            <div class="box featured wow " style="text-align: left;" data-aos="fade-down">
              <h5 class="section-title" style="border-bottom: 1px solid #1dc8cd;color:black;margin:0px">Important Links</h5>
              <div style="padding: 5px">
                <a href="AllWquestions#pricing" style="color: #07697A">- Model Answers >></a><br>
                <p  style="color: #07697A">- Click on button <a href="result#pricing"><img src="img/results4.png" height="30" width="30"></a> to check your result.</p>
              </div>
            </div>
          </div>
       </div>

        @else
        <div class="row">
          <div class="col-lg-12 col-md-12">
             <div class="box featured wow " data-aos="fade-down">
              <h3>Answer Area</h3>
              <br>
              <div class="row">
                <div class="col-md-12 alert alert-danger" style="height: 50px">
                  <img src="img/alert.png" height="20" width="20"><p style="margin-left:10px;display: inline;text-align: left;color: #721c24"><a href="{{ route('login') }}" style="color: #721c24"><strong>Login</strong></a> Yourself First.</p>
                </div>  
              </div>
              <!--<form class="form-group" method="get" action="">
                {{csrf_field()}}
              
              <br>
                 <input type="submit" name="" class="get-started-btn" disabled="disabled" >
            </form> -->
            </div>
          </div>
        </div>
        @endif
      </div>
    </section><!-- #pricing -->
   
</main>
<script>
function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}





</script>

@endsection