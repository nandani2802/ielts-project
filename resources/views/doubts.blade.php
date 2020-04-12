@extends('layouts.app')

@section('content')


<main id="main">

    <section id="pricing" class="section-bg" style="background-color: #eff5f5">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Student Section</h3>
          <span class="section-divider"></span>
         
        </div>

        <div class="row">
          <div class="col-lg-12" data-aos="fade-right">
            @if(\Session::has('success'))
              <div class="alert alert-success ">
                  <p>{{\Session::get('success')}}</p>
              </div>
            @endif
          </div>
           
          <div class="col-lg-12 col-md-12">
             <div class="box featured wow fadeInLeft" >
              <h3>Solve your doubts here!</h3>
              <br>

              <form class="form-group" method="get" action="{{url('doubts/pricing')}}">
                {{csrf_field()}}
	          	<textarea class="form-control" name="dtxt" placeholder="Put your doubt here!"></textarea>
	          	<br>
                 <input type="submit" name="dsubmit" class="get-started-btn">
	          </form>  
            </div>
          </div>
        </div>
      </div>
    </section><!-- #pricing -->

   <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Solutions</h3>
          <span class="section-divider"></span>
          <!--<p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
        </div>
        <br>
        <div class="row" >
          @if(count($data)>0)
          @foreach($data as $row)

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" style="height: 250px;overflow-y: scroll;">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href=""> {{$row->squery}}</a></h4>
              <p class="description"> {{$row->sreply}}</p>
            </div>
          </div>
          @endforeach
          @endif
          
        </div>
      </div>
    </section><!-- #more-features -->

</main>

@endsection