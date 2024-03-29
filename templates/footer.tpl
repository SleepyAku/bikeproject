<footer class="bg-dark text-white">
            <div class="container py-4">
                <div class="row py-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Customer services</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#!">Help & Contact Us</a></li>
                            <li><a class="footer-link" href="#!">Returns & Refunds</a></li>
                            <li><a class="footer-link" href="#!">Online Stores</a></li>
                            <li><a class="footer-link" href="#!">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <h6 class="text-uppercase mb-3">Company</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#!">What We Do</a></li>
                            <li><a class="footer-link" href="#!">Available Services</a></li>
                            <li><a class="footer-link" href="#!">Latest Posts</a></li>
                            <li><a class="footer-link" href="#!">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-uppercase mb-3">Social media</h6>
                        <ul class="list-unstyled mb-0">
                            <li><a class="footer-link" href="#!">Twitter</a></li>
                            <li><a class="footer-link" href="#!">Instagram</a></li>
                            <li><a class="footer-link" href="#!">Tumblr</a></li>
                            <li><a class="footer-link" href="#!">Pinterest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-top pt-4" style="border-color: #1d1d1d !important">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start">
                            <p class="small text-muted mb-0">© 2021 All rights reserved.</p>
                        </div>
                        <div class="col-md-6 text-center text-md-end">

                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JavaScript files-->
        <script src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/vendor/bootstrap/js/bootstrap.bundle.min.js">
        </script>
        <script src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/vendor/nouislider/nouislider.min.js"></script>
        <script src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/vendor/swiper/swiper-bundle.min.js"></script>
        <script
            src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/vendor/choices.js/public/assets/scripts/choices.min.js">
        </script>
        
        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        </script>
    
    
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap4.min.js"></script>



        <script>
            // ------------------------------------------------------- //
            //   Inject SVG Sprite - 
            //   see more here 
            //   https://css-tricks.com/ajaxing-svg-sprite/
            // ------------------------------------------------------ //
            function injectSvgSprite(path) {

                var ajax = new XMLHttpRequest();
                ajax.open("GET", path, true);
                ajax.send();
                ajax.onload = function(e) {
                    var div = document.createElement("div");
                    div.className = 'd-none';
                    div.innerHTML = ajax.responseText;
                    document.body.insertBefore(div, document.body.childNodes[0]);
                }
            }
            // this is set to BootstrapTemple website as you cannot 
            // inject local SVG sprite (using only 'icons/orion-svg-sprite.c2a8f15b.svg' path)
            // while using file:// protocol
            // pls don't forget to change to your domain :)
            injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
        </script>
        <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<script>


        function cancelregistration() {
            $('#myregistration').modal('hide');
            $('#myregistration').hide();
            //$('.modal-backdrop').hide();
        }


        function registerpopup() {

            $('#myregistration').modal('show');

        }



        function cancellogin() {

            $('#mylogin').modal('hide');
            $('#mylogin').hide();
            $('.modal-backdrop').hide();

        }


        var isadmin = false;

        function updatelogin() {
        
       
        userName = document.getElementById("emaillogin").value;
        password = document.getElementById("password").value;


        if (checkLogin(userName, password) == false) {

            document.getElementById("loginstatus").innerText = "User ID / Password Not Correct";
            userName = "";
            password = "";
            document.getElementById("password").value = "";
            return false;

        }


        //This will set the Account menu item to show after a login
        var apagesDropdown = document.getElementById("accountDropdown");
        apagesDropdown.style.visibility = "visible";



        document.getElementById("login").innerText = "Logout";
        sessionStorage.setItem("username", userName);

        console.log("isadmin: " + isadmin);

        if (isadmin == true) {
            var adminDropdown = document.getElementById("adminDropdown");
            adminDropdown.style.visibility = "visible";
        } else {
            var adminDropdown = document.getElementById("adminDropdown");
            adminDropdown.style.visibility = "hidden";
        }


        $('#mylogin').modal('hide');
        $('#mylogin').hide();
        $('.modal-backdrop').hide();

        return true;

    }



    
    function checkLogin(arguserName, argpassword) {

        //console.log("checkLogin: "+arguserName+" pw:"+argpassword+" gameid:"+gameid+" id: "+playerId);
        
          if( arguserName == "")
          {
              return false;
          }
  
     
          var strreturnlogin = false;
  
          $.ajax({
              type: "GET",
              url: "checklogin.php",
              dataType: "text",
              async: false,
              data: {
                  type: "login",
                  user: arguserName,
                  password: argpassword,
              },

              success: function(data) {

                        data = data.replace(/^\s+|\s+$/g, '');
                        console.log("checkLogin data:[" + data + "]");


                        if (data.trim() == "0") {
                            strreturnlogin = false;

                        } else if (data.trim() == "error") {
                            strreturnlogin = false;

                        } else {
                            strreturnlogin = true;
                            userName = arguserName;
                            if (data.trim() == "admin")
                                isadmin = true;
                            else
                                isadmin = false;

                        }


                        return strreturnlogin;
  
                 
              },
          });
  
  
          return strreturnlogin;
  
      }


      function updateregister() {



//clearInterval(setintervalstart);

var passwordr = document.getElementById("passwordr").value;


var password2r = document.getElementById("password2r").value;


userName = "";

document.getElementById("password").value = "";
document.getElementById("emaillogin").value = "";



if (passwordr != "" && password2r == passwordr) {
    
    var displayname = document.getElementById("emailr").value;
   


    if (checkRegistration(displayname, passwordr, document.getElementById("emailr").value ) == "error") {

        userName = "";
        document.getElementById("registrationmessage").innerText = "Email is already Present. Try Loggin in.";
        return false;

    }
    else
    {
        userName = "";

        $('#myregistration').modal('hide');

        $('#myregistration').hide();
        //$('.modal-backdrop').hide();

        $('#mylogin').modal('show');



    }



}
else{
    userName = "";
     document.getElementById("registrationmessage").innerText = "Passwords do not Match.";
     return;
}


}


function checkRegistration(arguserName, argpassword, argemail) {



                var strreturn = false;
                
                $.ajax({
                    type: "GET",
                    url: "checkregistration.php",
                    dataType: "text",
                    async: false,
                    data: {
                        type: "register",
                        email: argemail,
                        password: argpassword,
                        username: arguserName,
                    },
                    success: function(data) {
                        
                        data = data.trim();

                        if (data == "0") {
                            strreturn = false;
                        } else if (data == "error") {
                            strreturn = false;
                        } else {
                            strreturn = true;
                                                      
                        }
                       
                    },
                });


                return strreturn;

            }


    </script>


