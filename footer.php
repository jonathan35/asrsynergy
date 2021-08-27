
<div class="row text-center p-4 p-md-2" style="background:#3E5FB0; background-image: linear-gradient(#304885, #3E5FB0); color:#FFF; font-size:15px;">
    <div class="col-12 col-md-10 offset-md-1">
        <div class="row text-center pt-2">
            <div class="col-12 text-center back-top">
                <i class="fa fa-chevron-circle-up back-top-icon" aria-hidden="true" onclick="scroll_top();" style="-webkit-filter: drop-shadow(0 0 5px #222); filter: drop-shadow(0 0 5px #222); position:relative; top:7px;"></i>
            </div>
            <script>
            function scroll_top(){
                var body = $("html, body");
                body.stop().animate({scrollTop:0}, 500, 'swing', function() { });
            }
            </script>
        </div>

        <div class="row d-flex pt-4 pb-5 text-left" >

            <div class="col-12 col-md">
                <div class="footer-title pt-4 pt-md-2">Projects</div>
                <div class="row">                
                    <?php 
                    $types = sql_read("select * from category where status=1 order by position asc, id desc limit 8");
                    /*foreach($types as $type){?>
                    <div class="col-6 col-md-12 pt-1">
                        <a href="#<?php echo ROOT?>type/<?php echo $str_convert->to_url($type['category'])?>"><?php echo $type['category']?></a>
                    </div>
                    <?php }*/?>
                    <div style="text-transform:capitalize">
                        <div class="col-6 col-md-12 pt-1"><a href="#">MUARA TUANG PARK</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">SYNERGY SQUARE</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">KONG PING HEIGHT</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">SYNERGY SQUARE (KK)</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">TAMAN SRI MATANG</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">TAMAN GITA JAYA</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">TAMAN MATANG JAYA</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">KONG PING HEIGHT</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">SYNERGY GARDEN</a></div>
                        <!--<div class="col-6 col-md-12 pt-1"><a href="#">MATANG JAYA II</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">KENNY HILL VILLAS</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">MATANG JAYA III</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">FEDERAL PARK</a></div>
                        <div class="col-6 col-md-12 pt-1"><a href="#">FEDERAL PARK - Phase 1</a></div>-->
                    </div>
                </div>
            </div>

            <div class="col-12 col-md">
                
       
                <div class="footer-title pt-4 pt-md-2">
                    <div style="width:140px; overflow:display;">Open</div>
                </div>
                <div class="pb-1">
                    Monday to Friday:<br>
                    8.00am - 5.00pm<br>
                    <div style="padding:8px;"></div>
                    Sunday:<br>
                    8.00am - 12.30pm<br>
                    <div style="padding:8px;"></div>
                    Sunday & Public Holidays:<br>
                    Closed
                </div>

                
            </div>


            <div class="col-12 col-md">
                <div class="footer-title pt-4 pt-md-2">Social</div>
                <div class="pb-1">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="<?php echo ROOT?>images/facebook-f.svg" width="14px" style="margin:10px">
                    </a>
                    <a href="https://wa.me/60168653957" target="_blank">
                        <img src="<?php echo ROOT?>images/whatsapp.svg" width="20px" style="margin:10px">
                    </a>
                    <a href="#" target="_blank">
                    <img src="<?php echo ROOT?>images/instagram.svg" width="20px" style="margin:10px">
                    </a>
                </div>
                <div class="footer-title pt-4 pt-md-2">Contact</div>
                
                <div class="pb-1">
                    Fax: +60 82 646208
                </div>
                <div class="pb-1">
                    Phone: +60 82 646617
                </div>

                <div class="footer-title pt-4 pt-md-2">Email</div>
                <div class="pb-1">
                    asrkch@hotmail.com
                </div>
                
            </div>

            <div class="col-12 col-md">
                

                <div class="footer-title pt-4 pt-md-2">Address</div>
                <div class="pb-1">
                    Lot 6807- 6808,<br>
                    Synergy Square,<br>
                    Jalan Matang,<br>
                    93050 Kuching, Sarawak
                </div>
                <br><br>
                <div class="pb-1">
                <a href="https://www.google.com/maps/place/Advance+Synergy+Realty+Limited/@1.5738268,110.2954187,17z/data=!3m1!4b1!4m5!3m4!1s0x31fb062ad0b8e589:0x92c05aac631c779!8m2!3d1.5738214!4d110.2976074" target="_blank" style="color:lightblue;">
                    <img src="<?php echo ROOT?>images/678111-map-marker-512.webp" width="18px" style="display:inline-block;">View Map</a>
                </div>
            </div>
        


        </div>

        <br><br>
        




    </div>
    
</div>

<div class="row">
    <div class="col-12 p-2 text-center" style="background:#2e4680; color:#FFF; font-size:15px;">
        <?php echo date('Y')?>. asrsynergy.com.my All rights reserved. Powered by Quest Marketing.
    </div>
</div>

<div id="enquiryModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content modal-edit-panel">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="text-black" aria-hidden="true">&times;</span>
                </button>
                <div class="login-panel form-rounded">
                    <?php include 'message.php'?>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
function change_title(title){
    $('input[name=tour]').val(title);
}
</script>

<?php include_once 'config/session_msg.php';?>