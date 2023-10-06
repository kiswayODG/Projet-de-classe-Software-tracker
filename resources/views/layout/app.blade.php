<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>SoftTracker - Gestion de logiciel</title>


     <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.7.0.js"></script>
   
   <!-- Dépendance de la librairie datatable -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
    
</head>

<body>
<div class="main-wrapper">

@include('layout.topBar')
@include('layout.sideBar')

    <div class="page-wrapper">  @yield('content')</div>

</div>

<script src="{{url('assets/js/popper.min.js')}}"></script> 
 <script src="{{url('assets/js/bootstrap.min.js')}}"></script> 

<!-- dependance pour gerer le side bar (ouverture & fermeture) -->
<script src="{{url('assets/js/feather.min.js')}}"></script>
<script src="{{url('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{url('assets/js/script.js')}}"></script>
</body>
</html>
