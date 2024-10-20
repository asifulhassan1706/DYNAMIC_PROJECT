@extends('backend.layout.template')

@section('body-content')

    <div class="container">
        <h2 style="text-align:center; font-weight:900; color:DodgerBlue">Section</h2>
        <div class="form-group">
            <label for="">Select Section</label>
            <select name="sectionname" id="section" class="form-control">
                <option value="">Select Section</option>
                @foreach($sections as $d)
                <option value="{{ $d->id }}"> {{ $d->sectionname }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Select Sub Section</label>
            <select name="subsections" id="subsections" class="form-control">

            </select>

        </div>
        <div class="form-group">

        </div>
    </div>
    <script>
           $(document).ready(function(){
           
               $("#section").change(function(){
                    console.log('fff');
                    var section_id = $(this).val();
                    $("#subsections").empty();

                    $.ajax({
                        url: "http://127.0.0.1:8000/api/subsections/"+section_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(res){
                            var subsections = res.subsections;
                            var str = '';
                            for(var i=0;i<subsections.length;i++){
                               // console.log(subsections[i].n);
                                str += '<option value="'+subsections[i].id+'">'+subsections[i].sectionname+'</option>';
                            }
                            $("#subsections").append(str);
                        }
                    });
                });
           });
              
                
              
            
    </script>
@endsection