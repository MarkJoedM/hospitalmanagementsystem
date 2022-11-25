<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include('admin.css')

  <style type="text/css">
    label{
        display: inline-block;
        width: 200px;
    }
  </style>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding: 100px;">
            @if (session()->has('message'))
            
              <div style="background-color: green" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
                <span class="inline-block align-middle mr-8">
                  <b class="capitalize">{{session()->get('message')}}</b>
                </span>
                <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
                  <span>×</span>
              
                </button>
              </div>
              <script>
                function closeAlert(event){
                  let element = event.target;
                  while(element.nodeName !== "BUTTON"){
                    element = element.parentNode;
                  }
                  element.parentNode.parentNode.removeChild(element.parentNode);
                }
              </script>
        
            @endif

            <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px">
                    <label for="">Doctor Name</label>
                    <input type="text" style="color: black" name="name" value="{{$data->name}}">
                </div>
                <div style="padding: 15px">
                    <label for="">Phone</label>
                    <input type="number" style="color: black" name="phone" value="{{$data->phone}}">
                </div>
                <div style="padding: 15px">
                    <label for="">Doctor Type</label>
                    <input type="text" style="color: black" name="doctype" value="{{$data->doctype}}">
                </div>
                <div style="padding: 15px">
                    <label for="">Room</label>
                    <input type="text" style="color: black" name="room" value="{{$data->room}}">
                </div>
                <div style="padding: 15px">
                    <label for="">Old Image</label>
                    <img height="150" width="150" src="doctorimage/{{$data->image}}">
                </div>
                <div style="padding: 15px">
                    <label for="">Change Image</label>
                    <input type="file" name="file" style="width: 220px">
                </div>
                <div style="padding: 15px">
                    <button class="btn btn-primary" style="width: 30%">Update</button>
                </div>

            </form>

        </div>


      </div>
    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
