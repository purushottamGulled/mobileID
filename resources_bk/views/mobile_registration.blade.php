@extends('layouts.app')

@section('content')
<style>
.activated{
  width:500px;
  padding:6px;
}
input[type=small-text-box] {
    max-width: 100%;
    border: 0;
    background-color: #f9f9f9;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-right: 5px;
    padding-left: 10px;
    border-radius: 5px;
    font-size: 16px;
    border: 2px solid #fafafa;
    margin-top: 5px;
    margin-bottom: 16px;
    display: block;
    box-shadow: inset 1px 1px 3px rgb(0 0 0 / 20%);
    position: relative;
    transition: .2s;
  }
  
  label {
    display: block;
    font-weight: 600;
}
textarea {
    max-width: 100%;
    width: 780px;
    background-color: #f9f9f9;
    margin-top: 15px;
    padding: 50px;
}
</style>
<div class="wrapper">
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mobile Id Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
       <div class="card">
        <div class="card-header">
        
      <div id="routerView">
      <div id="registrationRoutePage"></div><p class="header-description"></p><h5><span>1 - Enter the <b>externalRef and deviceName</code></span></h5>

      <p><label>External reference</label></p><input id="externalRef" type="small-text-box" aria-label="External reference"><p><label>Device name</label></p><input id="deviceName" type="small-text-box" aria-label="Device name"><br><h5><span>2 - Click the <b>Activate device</b> button</span></h5><div>
      <button class="btn btn-primary button" id="activate_device" onclick='doRegister()'>Activate device</button></div><p><label>Activation code</label></p><input id="pairingCode" readonly="readonly" placeholder="Received code" aria-label="Activation code" type="small-text-box">
      <input id="activated_status" readonly="readonly" value="" placeholder="Received code" aria-label="Activation code" type="hidden">
      <br>
      <h5><span>3 - Use mobile app and enter activation code to activate MobileID on your device</span></h5>
      <p><label>Registration response</label></p><textarea disabled="disabled" id="registration_response" aria-label="Registration response"></textarea></div>
        </div>
       
        <div class="card-body">
           <p><strong>
           </strong>
          </p>
        </div>
      </div>
    </section>
  </div>
  
</div>
@endsection
<!-- ./wrapper -->
@push('scripts')
<script>
function doRegister(){
  var client_id = document.getElementById("externalRef").value;
  var client_name = document.getElementById("deviceName").value;
  var activated_device = document.getElementById("activated_status").value;
  var base_url = '{{ env('APP_URL') }}';
        $.ajax({
             type:'POST',
             url:base_url +'/client',
             dataType:'json',
             data:{
                 "_token": "{{ csrf_token() }}",
                 "client_id":client_id,
                 "client_name":client_name,
                 "activated_device":activated_device,
             },
             success:function(data){
              //console.log(data);
              if (data.is_activated==1) {
                document.getElementById("activated_status").value=1;
                var pairingCode = document.getElementById("pairingCode");
                pairingCode.value= data.activation_code;
                pairingCode.setAttribute("class", "activated");
                
              }
              else if(data.status=='error'){
                 document.getElementById("registration_response").innerHTML = JSON.stringify(data);
                
              }
              else{
                 document.getElementById("pairingCode").value = data.activation_code;
                
              }

             }

        });

     }
</script>
@endpush
