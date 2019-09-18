<aside class="col-md-3 education-sidebar">

                            <!--// Widget Search \\-->
                            
                      <!--// Widget Search \\-->

                            <!--// Widget Cetagories \\-->
                            <div style="background-color:#3F51B5;" class="education-widget-heading"><h2 style="color:#FFF">Latest News</h2></div>
                            

  <div style=" border:1px solid #DFDFDF; padding:8px"  class="widget widget_cetagories">
                           
                                <ul>


 <?php
if (class_exists('Database'))
{
   if (class_exists('NewsManagement'))
      {
          
      }
  else
      {
       include_once("commom-class/common-function.php");
      }
    
}
else 
{
 
include_once("../web/admin_panel/class/class.NewsManagement.php");

}

$tb_handle=new NewsManagement();




				
 
				 
				$tb_handle->ScrollingNewsNewForLatestUpdates();
//$tb_handle->ScrollingNewsNew();
 
 
                                 ?>
                               
<!--
                                    <li><a href="404.html">&raquo;&nbsp;Notification: Degree 1st semester regular Examinations 2018<img src="images/new_flash.gif" width="33" height="16"></a> </li>
                                    <li><a href="404.html">&raquo;&nbsp;List of participant of music competition</a></li>
                                    <li><a href="404.html">&raquo;&nbsp;Notification: Degree 3rd semester regular and back Examinations 2018<img src="images/new_flash.gif" width="33" height="16"></a></li>
                                    <li><a href="404.html">&raquo;&nbsp;Time table: Degree 1st Semester (Back) Examinations (Old Course), 2018<img src="images/new_flash.gif" width="33" height="16"></a></li>
                                    <li><a href="404.html">&raquo;&nbsp;Applications are invited for Music Competition to be held on 3rd December 2017<img src="images/new_flash.gif" width="33" height="16"></a></li>
                                    
                                   --><!-- <li><a href="404.html"><strong>More News</strong>&nbsp;&raquo;</a></li>
-->
                                      
                                </ul>
                             
                          </div>
                       
                            <!--// Widget Cetagories \\-->

                            <!--// Widget Featured Courses \\-->
                            <div style="background-color:#3F51B5;" class="education-widget-heading"><h2 style="color:#FFF">Learners' Support Services</h2></div>
                            <div  class="widget widget_featured_courses">
                                <ul>
                                    <li>
                                        <a href="http://jnantaranga.kkhsou.in" target="_blank"><img src="extra-images/side-featured-img1.jpg" alt=""></a>
                                            
                                        
                                    </li>
                                    <li>
                                       <a href="https://www.youtube.com/user/kkhsou" target="_blank"><img src="extra-images/side-featured-img2.jpg" alt=""></a>
                                           
                                       
                                    </li>
                                    <li>
                                        <a href="http://eslm.kkhsou.in/" target="_blank"><img src="extra-images/eslm.jpg" style="border:1px solid black;height:100px;width:100%;" alt=""></a>

                                    </li>
                                </ul>
                            </div>
                            <!--// Widget Featured Courses \\-->

                           

                            <!--// Widget Caendar \\-->
                          
                            <div class="widget widget_calendar">
                          <a href="examination-result.php"><img src="extra-images/exam.jpg" width="270" height="43"></a></div>
                            <!--// Widget Caendar \\-->
                            
                             <!--// Widget Caendar \\-->
                          
                            <div class="widget widget_calendar">
                          <a href="Subscribe.php"><img src="extra-images/sub.jpg" width="270" height="43"></a></div>
                            <!--// Widget Caendar \\-->
                            
                             <!--// Widget Caendar \\-->
                          
                            <div class="widget widget_calendar">
                          <a href="other-downloads.php"><img src="extra-images/down.jpg" width="270" height="43"></a></div>
                            <!--// Widget Caendar \\-->

                            <!--// Widget Gallery \\-->
                           
                           
                            <!--// Widget Gallery \\-->
                        </aside>