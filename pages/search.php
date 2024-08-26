
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="styles.css">
  <title>
Find anything
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="" target="_blank">
      
        <span class="ms-5 font-weight-bold text-white ">Dashboard Title</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/billing.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">photo</i>
            </div>
            <span class="nav-link-text ms-1">Exctractor</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">phone</i>
            </div>
            <span class="nav-link-text ms-1">Contact us</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">settings</i>
            </div>
            <span class="nav-link-text ms-1">Setting</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
       
       
        
      </ul>
    </div>
   
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Index</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Extractor</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Extractor</h6>
        </nav>
        <ul class="navbar-nav  justify-content-end">
        <!-- <li class="mt-2  me-5">
        <a href="#" class="btn btn-danger">Stop</a>
          </li> -->
         
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
</ul>
      </div>
    </nav>
    <!-- End Navbar -->
   
<style>
    .div{
display:grid;
grid-template-columns: 60% 35%;
gap:10px;
margin-left:0%;
/* padding: 10px; */
width: 140%

    }
    .input-group{
display:grid;
grid-template-columns: 1fr 1fr;
width: 100%

/* gap:10px; */

    }
    .find-container {  
    background-color: inherit;  
    padding: 30px;  
    border-radius: 5px;  
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);  
    width: 400%;  
    justify-content: center;  
    align-items: center; 
    margin-left: 20%; 
    /* margin-bottom: 5%; */
}  

h2 {  
    /* margin-bottom: 20px;   */
    text-align: center;  
    color: #333;  
}  

.input-group {  
    position: relative;  
    /* margin-bottom: 20px;   */
}  

input {  
    width: 100%;  
    padding: 10px;  
    border: 1px solid #ccc;  
    border-radius: 5px;  
    outline: none;  
    transition: border 0.3s;  
}  

input:focus {  
    border-color: #0d6efd rgba(13, 110, 253, 0.8);  
}  

.input-highlight {  
    position: absolute;  
    bottom: 0;  
    left: 0;  
    width: 0;  
    height: 2px;  
    background-color: #007bff;  
    transition: width 0.3s;  
}  

input:focus + .input-highlight {  
    width: 100%;  
}  



button {  
    width: 30%;  
    padding: 10px;  
    color: white;  
    border: none;  
    border-radius: 5px;  
    cursor: pointer;  
 
}  

</style>


    
    <div class="find-container" style="width:50%;">  
        <form id="Form">  
            <h2 class>Find Any Place in the World</h2>  
            <div class="div">
                
            <div class="input-group">  
                <div>
                <input type="text" id="place" required placeholder="Place">  
                <span class="input-highlight"></span> 
                </div>
                <div>
                <input type="text" id="location" required placeholder="Location">  
                <span class="input-highlight"></span> 
                </div>  
            </div>  
            <div>
            <button type="submit" class="bg-gradient-primary">Search</button>  
            </div>
            </div>
        </form>  
    </div>  

    <!-- <div class="main"> -->
    <div class="container">
    <div class="row">
        <div class="col-md-8 bg-white border mx-3 p-0">
        <table class="table">
            <thead class="bg-dark text-white m-0 ">
                <tr>
                    <th scope="col">Place</th>
                    <th scope="col">Full Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Website</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="">
</tbody>
</table>
</div>
<div class="col-md-2 bg-white border"  style=" padding: 10px 20px 30px 10px; width: 30%;">
        <h4>Time Elapsed</h4>
        <div>0</div>
        <br><br>
        <h4>Leads Extracted</h4>
        <div>0</div>
        <br><br>
        <h4>Leads with Emails</h4>
        <div>0</div>
        <br><br>
        <h4>Leads with Phone</h4>
        <div>0</div>
        <br><br>
        
    </div>
</div>


</div>


</body>  
</html>  
      </div>
      



    </div>
  </main>
 
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script src="script.js"></script> 
</body>

</html>