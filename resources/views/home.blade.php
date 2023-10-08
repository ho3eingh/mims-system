 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
   </head>
 <body>
   <div class="Main">
   <div class="header">
       <button  class="log-btn" onclick="location.href='/login' " >ورود | ثبت نام</button>

      <div class="SearchBox" style="background-color: white;">
         <input type="text"  placeholder="جست و جو">
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16"><path fill="currentColor" d="M10.68 11.74a6 6 0 0 1-7.922-8.982a6 6 0 0 1 8.982 7.922l3.04 3.04a.749.749 0 0 1-.326 1.275a.749.749 0 0 1-.734-.215ZM11.5 7a4.499 4.499 0 1 0-8.997 0A4.499 4.499 0 0 0 11.5 7Z"/></svg>
      </div>
         <div class="logo-menu">
         <a class="logo">
             مدیریت تصاویر پزشکی
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 64 64"><path fill="currentColor" d="M31.624 17.396a8.568 8.568 0 1 0 0-17.134c-4.732 0-8.57 3.836-8.57 8.566a8.57 8.57 0 0 0 8.57 8.568zm11.305 2.607H32.842v8l1.855.454v-1.855c0-1.205 1.098-2.299 3.102-.952c2.823 1.903 5.862 12.712 2.566 12.286c-1.591-.203-2.49-.975-4.242-1.073c-1.423-.073-1.423-.685-1.425-1.49c-.002-.805 0-3.389 0-3.389v-1.44a277.9 277.9 0 0 1-1.855-.453v9.893s2.781-1.891 4.77-.35c1.254.975 2.039 3.781-1.84 6.068c-.895.545-5.768 1.834-7.297-1.036h-1.725a1.412 1.412 0 0 0 0 2.824h10.215a2.932 2.932 0 0 1 2.928 2.93a2.93 2.93 0 0 1-2.928 2.928h-10.57a.66.66 0 0 0 0 1.316h10.57c1.614 0 2.928 1.314 2.928 2.93s-1.314 2.928-2.928 2.928H24.604a1.135 1.135 0 1 1 0-2.272h12.362a.658.658 0 0 0 0-1.315h-10.57a2.933 2.933 0 0 1-2.928-2.928a2.934 2.934 0 0 1 2.928-2.932h10.57a.658.658 0 0 0 0-1.314H26.751a3.686 3.686 0 0 1-3.68-3.683a3.687 3.687 0 0 1 3.68-3.684h2.28c.015 0 .027.008.042.008h.776c.754 0 .725-.798.723-.798V30.21l-1.853.514v1.259s.002 2.584 0 3.389c0 .805-.006 1.417-1.425 1.491c-1.75.098-2.649.87-4.244 1.073c-3.295.425-.254-10.383 2.563-12.287c2.003-1.348 3.106-.254 3.106.952v2.016l1.853-.512V20h-9.643c-6.063 0-11.471 4.913-11.471 10.975v26.567c0 2.073 1.631 3.754 3.699 3.754a3.75 3.75 0 0 0 3.75-3.754V33.588h3.106v29.001h23.354V33.588h3.139v23.954c0 2.073 1.679 3.754 3.751 3.754s3.702-1.681 3.702-3.754V30.975c-.001-6.059-4.968-10.972-11.029-10.972z"/></svg>
         </a>
         <div id="menu-btn">
         <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2"><path d="M5 5L19 19"><animate fill="freeze" attributeName="d" dur="0.4s" values="M5 5L19 19;M5 5L19 5"/></path><path d="M12 12H12" opacity="0"><animate fill="freeze" attributeName="d" begin="0.2s" dur="0.4s" values="M12 12H12;M5 12H19"/><set attributeName="opacity" begin="0.2s" to="1"/></path><path d="M5 19L19 5"><animate fill="freeze" attributeName="d" dur="0.4s" values="M5 19L19 5;M5 19L19 19"/></path></g></svg></div>
        </div>
   </div>

   </div>
      <div id="navbar" >
         <div class="close"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-dasharray="16" stroke-dashoffset="16" stroke-linecap="round" stroke-width="2"><path d="M7 7L17 17"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="16;0"/></path><path d="M17 7L7 17"><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.4s" dur="0.4s" values="16;0"/></path></g></svg></div>
      <ul class="navbar-nav">
         <li class="nav-item">

            <a class="nav-link" href="#Home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg>صفحه اصلی</a></li>
         <li class="nav-item">
            <a class="nav-link" href="">ثبت نام</a></li>
         <li class="nav-item">
            <a class="nav-link" href="">ورود</a></li>
      </ul>
   </div>
   <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
   <script src="js/home.js"></script>
</body>
 </html>
