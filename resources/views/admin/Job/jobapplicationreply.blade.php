@extends('layouts.addpage')
@section('content')

<!-- Left side column. contains the logo and sidebar -->
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Reply On Message -{{$jobapplicationDetails['Job']['job_title']}}
      </h1>
      <ol class="breadcrumb">
        <li><a  href="{{ route('viewjob',['id'=>$jobapplicationDetails['Job']['id']]) }}">Back To View Job Page-</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
          <!-- MAP & BOX PANE -->
           <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <!-- right column -->
        <div class="col-md-10">
          <!-- Horizontal Form -->
            <div class="box-header with-border">
              <h3 class="box-title">Message Details</h3>
            </div>
             @if (Session::has('error'))
              <div class="alert alert-danger">
                <p>{{ Session::get('error') }}</p>
              </div>
              @endif
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('replymessageonapplication',['id'=>$id])}}" method="post" >
              {{csrf_field()}}
              <input type="hidden" name="id" value="{{$jobapplicationDetails['Job']['id']}}">
              <div class="box-body">
                   

              <div class="form-group">
                <div class="col-sm-12 col-md-6">
                  <label for="inputPassword3" class="control-label">To</label>
                  <input type="text" class="form-control" id="to_email_address"  name="to_email_address" value="{{$jobapplicationDetails['email_address']}}" readonly="readonly">
                </div>
                  <div class="col-sm-12 col-md-6">
                  <label for="inputPassword3" class="control-label">Full Name</label>
                  <input type="text" class="form-control" id="full_name"  name="full_name" value="{{$jobapplicationDetails['first_name']}}&nbsp;{{$jobapplicationDetails['last_name']}}">
                </div>
              </div>
         
              <div class="form-group">
                <div class="col-sm-12 col-md-6">
                  <label for="inputPassword3" class="control-label">From</label>
                  <input type="text" class="form-control" id="email_address"  name="email_address" value="{{$setting[20]['value']}}" readonly="readonly">
                </div>
                  <div class="col-sm-12 col-md-6">
                  <label for="inputPassword3" class="control-label">Name</label>
                  <input type="text" class="form-control" id="name"  name="name" value="{{$setting[22]['value']}}">
                </div>
              </div>
         
            
               <div class="form-group">
                <div class="col-sm-12 col-md-12">
                  <label for="inputPassword3" class="control-label">Message</label>
                  <p>
                    
                  </p>
                </div>
               
                 
              </div>

               <div class="form-group">
                <div class="col-sm-12 col-md-12">
                  <label for="inputPassword3" class="control-label">Reply</label>
                  <textarea class="form-control" id="reply_message"  name="reply_message" required="required" style="height: 150px;"></textarea>
                </div>
               
                 
              </div>
               
                 
          
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Send</button>&nbsp;
                 <button type="button" class="btn btn-danger pull-right Cancel" style="margin-right:10px">Cancel</button>
              </div>
              <!-- /.box-footer -->
            </form>
          <!-- /.box -->
          </div>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
          
         
          <!-- /.box -->
        </div>
       

        <!-- /.col -->
      </div>

     
      <!-- /.row -->

      
      <!-- /.row -->
    @include('admin.Job.messageNewList')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>


<!-- ./wrapper -->
<script type="text/javascript">
  
function getAjaxCall(id){
    var postJson = "";
    $.ajax({
        type:'get',
        url:"{{env('APP_URL')}}/public/getsubmenu/"+id,       
        success:function(res){
          $('#sub_category_id').html(res);
        }
    });
};
</script>
@endsection
