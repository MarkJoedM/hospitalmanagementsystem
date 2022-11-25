<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   
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
       
     <div class="container" align="center" style="padding-top: 100px">
      @if (session()->has('message'))
            
      <div style="background-color: green" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
        <span class="inline-block align-middle mr-8">
          <b class="capitalize">{{session()->get('message')}}</b>
        </span>
        <button  class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
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
        <form class="form-container" action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px">
                <label for="">Doctor Name</label>
                <input type="text" style="color: black" name="name" placeholder="Name here" required="">
            </div>

            <div style="padding: 15px">
                <label for="">Phone</label>
                <input type="number" style="color: black" name="phone" placeholder="Phone here" required="">
            </div>

            <div style="padding: 15px">
                <label for="">Doctor Type</label>
                <select name="doctype" id="" style="color: black; width:220px;" required="">
                    <option value="">--Select--</option>
                    <option value="Cardiologist">Cardiologist</option>
                    <option value="Dermatologist">Dermatologist</option>
                    <option value="Physician">Physician</option>
                    <option value="Neurologist">Neurologist</option>
                    <option value="Pediatrician">Pediatrician</option>
                    <option value="Physiatrist">Physiatrist</option>
                    <option value="Pulmonologist">Pulmonologist</option>
                    <option value="Radiologist">Radiologist</option>
                </select>
            </div>

            <div style="padding: 15px">
                <label for="">Room No.</label>
                <input type="text" style="color: black" name="room" placeholder="Room number here" required="">
            </div>

            <div style="padding: 15px">
                <label for="">Doctor Image</label>
                <input type="file" name="file" required="" style="width: 220px">
            </div>

            <div style="padding: 15px">
                <button class="btn btn-success" style="width: 20%">Submit</button>
            </div>
        </form>

     </div>
    </div>
    <!-- container-scroller -->
   @include('admin.script')
  </body>
</html>
