"use strict";function readURL(t){if(t.files&&t.files[0]){var a=new FileReader;a.onload=function(t){$("#image_upload_preview").removeClass("hide").attr("src",t.target.result)},a.readAsDataURL(t.files[0])}}!function(){function t(){e.value!=i.value?i.setCustomValidity("Passwords Don't Match"):i.setCustomValidity("")}var a=this;$("#signup-pic").on("change",function(){return readURL(a)}),$("a.switchVisibility").on("click",function(){var t=$(a).data("ref");activeClass=$("div."+t),activeClass.removeClass("hide").addClass("animated flipInY").delay(3e3).removeClass("flipOutY"),activeClass.siblings("div.auth-wrap").addClass("animated flipOutY").delay(3e3).addClass("hide").removeClass("flipInY")}),$(".mm-btn").on("click",function(){var t=$(a),e=t.data("preloader")?t.data("preloader"):"teal",i=t.data("text")?t.data("text"):t.text(),s=t.data("icon")?t.data("icon"):"",n=t.data("iconPos")&&""!=s?t.data("iconPos"):"right",l=t.data("redirection")?t.data("redirection"):"";t.text("");var d='<div class="preloader-wrapper small active">\n\t\t\t\t<div class="spinner-layer spinner-'+e+'-only">\n\t\t\t\t\t<div class="circle-clipper left">\n\t\t\t\t\t\t<div class="circle"></div>\n\t\t\t\t\t</div><div class="gap-patch">\n\t\t\t\t\t\t<div class="circle"></div>\n\t\t\t\t\t</div><div class="circle-clipper right">\n\t\t\t\t\t\t<div class="circle"></div>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t</div>';t.addClass("btn-floating white").html(d),setTimeout(function(){if(""!=s){var a=i+' <i class="material-icons white-text '+n+'">'+s+"</i>";t.removeClass("btn-floating white").empty().html(a)}else t.removeClass("btn-floating white").empty().text(i);""!=l&&(window.location.href="./index.html")},5e3)});var e=document.getElementById("sign-password"),i=document.getElementById("confirmpassword");e.onchange=t,i.onkeyup=t}();