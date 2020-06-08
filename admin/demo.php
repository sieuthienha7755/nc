<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My HUMG</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
     <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
  
  <style>
  #txt {
    text-transform:lowercase;
  }
  #fab {
  border-radius: 50px;
  padding:0;
  padding-left:10px !important;
  padding-right:10px !important;
    position: fixed;
    bottom: 20px;
    right: 20px;
  font-size:30px !important;
            }
  #classid, #courseid, #coursename, #year, #division {cursor: pointer;}
  .navbar-brand.abs
    {
      position: absolute;
      left: 50%;
      text-align: center;
    }

  </style>
</head>

<body>
    <?php
        $page = "index";
        include 'navigation.php';
    ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Trang chủ</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Giới thiệu</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Liên hệ</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Hỗ trợ</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/4.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">Prof.Anderson</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Tài khoản</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Đăng xuất</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                include 'navigation_mobi.php'
            ?>
            
        </div>
        
        <body>
<p class="text-center font-weight-bold" style="margin-top:10;">Classes</p>
<button id="fab" class="btn btn-primary" type="button" data-toggle="modal" data-target="#addclassModal" >+</button>
<div class="container">
<div class="table-responsive">
<?php
  require('connect.php'); 
  $query = $conn->prepare("SELECT * FROM `courseinfo` LEFT JOIN `classinfo` on courseinfo.courseid = classinfo.courseid");
  $query->execute();
  $r = $query->get_result();
  echo('<table id="mytable" class="table table-hover"><thead id="tablehead"><tr ><th>Select</th><th id="classid">Class ID &#x21D5;</th><th id="courseid">Course ID &#x21D5;</th><th id="coursename">Course Name &#x21D5;</th><th id="year">Year &#x21D5;</th><th id="division">Division &#x21D5;</th><th>Edit</th><th>Delete</th></tr></thead><tbody>');
  while ($assoc = $r->fetch_assoc()){
  if(is_null($assoc['classid'])){}
  else{
  
  echo "<tr>";
  echo "<td><input class='get_value' type='checkbox' name='cid[]' value=".$assoc['classid']."></td>";
  echo "<td>".$assoc['classid']."</td>";
  echo "<td>".$assoc['courseid']."</td>";
  echo "<td>".$assoc['coursename']."</td>";
  echo "<td>".$assoc['year']."</td>";
  echo "<td>".$assoc['division']."</td>";
  echo '<td><button type="button" class="btn" data-toggle="modal" data-target="#EditModal" data-classid="'.$assoc['classid'].'" data-courseid="'.$assoc['courseid'].'" data-year="'.$assoc['year'].'" data-division="'.$assoc['division'].'">&#x1f58a;</button></td>';
  echo "<td>";
  echo "<form action='../admin/classdel.php' method='post'  style='width=50%;'>";
  echo "<input name='classid' type='text' value= ".$assoc['classid']." style= 'display:none;width:200;'/>";
  echo "<button class='cnf btn btn-danger' type='submit' name = 'submit' style='width:50;'>X</button>";
  echo "</form>";
  echo"</td>";
  echo "</tr>";
  }
  }
?>
</tbody>
</table>
<button type="button" name="submit" class="btn btn-danger cnf" id="multi-del">Delete Selected</button>  
</div>
</div>
<div>
<!-- ADD Modal -->
    <div class="modal fade" id="addclassModal">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> Add a class </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
<div class="modal-body">
    <form action="../admin/classadd.php" method="post">
    <div class="form-group">
    <label for="courseid" class="col-form-label">Course ID :</label>
    <input type="number" class="form-control" name="courseid" required>
  </div>
  <div>
    <label class="mr-sm-2" for="inlineFormCustomSelect">Year :</label>
    <select name="year" class="custom-select mr-sm-2 year" id="inlineFormCustomSelect">
      <option value="nam1" selected>Năm 1</option>
      <option value="nam2">Năm 2</option>
      <option value="nam3">Năm 3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="division" class="col-form-label">Division :</label>
    <input name="division" class="form-control" value="a" id="txt" type="text" required>
  </div>
</div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
         <input class="btn btn-primary"type="submit" name="submit" value="ADD" >
         </form>
      </div>
      
      </div>
    </div>
    </div> 
    <!--EditModal-->
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../admin/classedit.php" method="post">
          <div class="form-group">
            <label for="classid" class="col-form-label">Class ID:</label>
            <input name="classid" type="number" class="form-control classid" readonly>
          </div>
      <div class="form-group">
            <label for="courseid" class="col-form-label">Course ID:</label>
            <input name="courseid" type="number" class="form-control courseid" required>
          </div>
          <div>
        <label class="mr-sm-2" for="inlineFormCustomSelect">Year:</label>
        <select name="year" class="custom-select mr-sm-2 year" id="inlineFormCustomSelect">
        <option selected>Choose</option>
        <option value="fy">FY</option>
        <option value="sy">SY</option>
        <option value="ty">TY</option>
        </select>
          </div>
      <div class="form-group">
            <label for="division" class="col-form-label">Division:</label>
            <input name="division" value="a" type="text" class="form-control division" id="txt" required>
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
      </div>
    </div>
  </div>
</div>
</div>
<script>
window.onload = function() {
  document.getElementById('classid').click();
  document.getElementById('classid').click();
};
</script>
<script>
$(document).ready(function(){  
      $('#multi-del').click(function(){  
           var languages = [];  
           $('.get_value').each(function(){  
                if($(this).is(":checked"))  
                {  
                     languages.push($(this).val());  
                }  
           });  
            
           $.ajax({  
                url:"../admin/classdelmulti.php",  
                method:"POST",  
                data:{languages:languages}, 
                success:function(text){
          alert(text);
        }  
           });  
      });  
 });  
 </script> 
 <!--Edit Modal-->
<script>
$('#EditModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var classid = button.data('classid')
  var courseid = button.data('courseid')
  var year = button.data('year')
  var division = button.data('division')
  var modal = $(this)
  modal.find('.modal-body .classid').val(classid)
  modal.find('.modal-body .courseid').val(courseid)
  modal.find('.modal-body .year').val(year)
  modal.find('.modal-body .division').val(division)
})
</script>
<script>
function sortTable(f,n){
  var rows = $('#mytable tbody  tr').get();

  rows.sort(function(a, b) {

    var A = getVal(a);
    var B = getVal(b);

    if(A < B) {
      return -1*f;
    }
    if(A > B) {
      return 1*f;
    }
    return 0;
  });

  function getVal(elm){
    var v = $(elm).children('td').eq(n).text().toUpperCase();
    if($.isNumeric(v)){
      v = parseInt(v,10);
    }
    return v;
  }

  $.each(rows, function(index, row) {
    $('#mytable').children('tbody').append(row);
  });
}
var f_classid = 1;
var f_courseid = 1;
var f_coursename = 1;
var f_division = 1;
var f_year = 1;
$("#classid").click(function(){
    f_classid *= -1;
    var n = $(this).prevAll().length;
    sortTable(f_classid,n);
});
$("#courseid").click(function(){
    f_courseid *= -1;
    var n = $(this).prevAll().length;
    sortTable(f_courseid,n);
});
$("#coursename").click(function(){
    f_coursename *= -1;
    var n = $(this).prevAll().length;
    sortTable(f_coursename,n);
});
$("#division").click(function(){
    f_division *= -1;
    var n = $(this).prevAll().length;
    sortTable(f_division,n);
});
$("#year").click(function(){
    f_year *= -1;
    var n = $(this).prevAll().length;
    sortTable(f_year,n);
});
</script>
<script>
$(function() {
    $('.cnf').click(function() {
        return window.confirm("Are you sure?");
    });
});
</script>
        
        <?php
            include 'footer.php';   
        ?>
    </div>
    <script type="text/javascript">
        function hideNav() {
            document.getElementById("sidebarCollapse").click();
        }
    </script>
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/morrisjs/raphael-min.js"></script>
    <script src="js/morrisjs/morris.js"></script>
    <script src="js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>