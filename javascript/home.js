 // إضافة الوظائف للزر القائمة
 var menuToggle = document.querySelector('.menu-toggle');
 var nav = document.querySelector('nav');
 
 menuToggle.addEventListener('click', function() {
   nav.classList.toggle('active');
 });

 

  var linkElement = document.getElementById("encodedLink");
  var linkURL = "https://web.facebook.com/profile.php?id=100056526041664"; // رابط البرمجة الأصلي
  
  var encodedURL = encodeURIComponent(linkURL);
  linkElement.href = encodedURL;
