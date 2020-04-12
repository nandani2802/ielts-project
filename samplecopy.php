background-image:url({{ Voyager::image( Voyager::setting('admin.bg_image'), voyager_asset('images/F1.jpg') ) }}); background-size: cover; background-position: 0px;


#038D5B


 height: 100vh;
  background: linear-gradient(45deg, rgba(29, 224, 153, 0.8), rgba(29, 200, 205, 0.6)), url("../img/homebg.jpg") center top no-repeat;


    @if(count($vocab)>0)
        <table class="table table-hover">
        <tr>
          <th>word</th>
          <th>synonyms</th>
          <th>antonyms</th>
        </tr>  
        @foreach($vocab as $row)
          <tr>
            <td>{{$row->word}}</td>
            <td>{{$row->synonyms}}</td>
            <td>{{$row->antonyms}}</td>
          </tr>
        @endforeach
        </table>
      @endif
 

 SELECT * FROM `vocabularies` WHERE date_format(created_at, '%Y-%m-%d') = date_format(now(),'%Y-%m-%d');



 select * from tutorials where task_id = (select id from tasks where tname = 'Writing task 2')




 rgba(29, 224, 153, 0.8), rgba(29, 200, 205, 0.6)



 background: linear-gradient(45deg, rgba(28, 40, 51, 0.8), rgba(81, 90, 90, 0.6)), url("../img/homebg.jpg") center top no-repeat;