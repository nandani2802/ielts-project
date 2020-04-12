@extends('layouts.app')

@section('content')
<main id="main"> 
    <section id="pricing" class="section-bg" style="background-color: #fff" >
      <div class="container">
        
        <!--<div class="section-header">
          <h3 class="section-title">Heading</h3>
          <span class="section-divider"></span>
        </div>-->


        <div class="row" style="padding: 50px">
            @if(count($data)>0)
            @foreach($data as $row)
            
            <div class="col-md-12">
                <div data-aos="fade-up" data-aos-duration="1000">
                <h3 style="color: black">{{$row->title}}</h3>
                <p style="margin:5px;color: gray">{{$row->introduction}}<br></p><br>
                </div>

                <div style="background:#F4F7FA;padding: 50px" data-aos="fade-up" data-aos-duration="1000">
                <p style="font-size:20px;color: #0B4680">{{$row->question}}</p>
                <!-- <p>{{$row->image}}</p> -->
                @if($row->image != "")
                <center><img src="../storage/app/public/{{$row->image}}" height="400"></center><br><br>
                @endif
                @if($row->task_id == 4 || $row->task_id == 6)
                <pre style="color:#3B3C3D">{{$row->answer}}</pre>
                @else
                <p style="color:#3B3C3D">{{$row->answer}}</p>
                @endif
                </div>

                <br><br>
                <div data-aos="fade-up" data-aos-duration="1000">
                <!--<h3 style="color: black">Bar graph tutorial</h3><br>-->
                @if($row->video != "")
                <center>
                    <?php
                        $myvideo = JSON_decode($row->video);
                      ?>
                    <video width="100%" height="400" controls>   

                        <source src="../storage/app/public/{{$myvideo[0]->download_link}}" type="video/mp4">
                    </video>
                </center>
                @endif
                </div>
            </div>

            @endforeach
            @endif
        </div>

      </div>
    </section><!-- #pricing -->
</main>

@endsection
