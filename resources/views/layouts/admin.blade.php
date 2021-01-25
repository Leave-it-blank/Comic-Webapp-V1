<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

 
  <!-- Custom styles for this template-->
 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="#" crossorigin="anonymous">

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">


  <script>
  var user = {!!json_encode((array)auth()->user()->name) !!};
</script>
  

</head>
<?php   $settings =  DB::table('settings')->where('id', '1')->first(); ?>

<body id="page-top"  class="text-xs" style="background-color: {{$settings->admin_theme_name}}; color: {{$settings->admin_text_meta}};" >






 @include('inc.admin_navbar_small_display')



<div class="grid lg:grid-cols-6" >
    <div class="lg:col-span-1 lg:flex lg:justify-end">
   @include('inc.admin_sidebar')
    </div>
  
    <main class="px-16 py-6 lg:col-span-5 ">
      <div class="container">
     @include('inc.admin_navbar')


      <div>
     
  
        <div class="mt-8 grid lg:grid-cols-1 gap-10">
          <!-- cards go here -->
      

     @yield('content')

     </div>
     </div>
  <!-- load more button 
      <div class="mt-12 flex justify-center">
        <div class="btn bg-secondary-100 text-secondary-200 inline-block hover:shadow-inner transform hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300">Load more</div>
      </div>    --> 
    </main>
  </div>

































<!-- scripts only -->
<div> 
<script src="{{ asset('js/admin.js') }}" defer></script> 




  
    
   </div>
   
</body>
   
           

  
</html>