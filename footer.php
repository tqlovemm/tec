
</section>

<div class="container-fluid visible-sm visible-xs" style="margin-bottom: 20px;">
    <div class="row" style="border-bottom: 1px solid #5a5a5a;">
        <!--微信公众号以及联系方式start-->

        <h5 class="text-center" style="color:white">联系我们</h5>

        <ul class="list-inline contact-phone">
            <li><a href="tel://<?=$tel?>"><img src="./img/gai1/phone-top.png"></a></li>
            <span></span>
            <li>
                <a id="weichat-1" href="img/gai1/3FC8A207CF0E1EE73AC6689E5D2B85A3.png">
                    <img src="./img/gai1/weichat-top.png">
                </a>
            </li>
            <span></span>
            <li><a href="http://wpa.qq.com/msgrd?v=3&uin=1607962445&site=qq&menu=yes" target="_blank" ><img src="./img/gai1/qq-top.png"></a></li>
        </ul>
        <div id="credit"></div>

        <!--微信公众号以及联系方式end-->


    </div>
    <div class="row" style="border-bottom: 1px solid #5a5a5a;padding:15px 15px 25px 15px ;">
        <h5 class="text-center" style="margin: 15px 0;color:white;">关注我们的官方微博，了解最新豪车俱乐部动态</h5>
        <div class="center-block text-center"><a href="http://weibo.com/13gydz?profile_ftype=1&is_all=1#_rnd1451270513481" target="_blank" class="btn btn-danger btn-myself"><img src="img/contact/微博图标.png"><span style="vertical-align:bottom;">TEC引擎俱乐部官方微博</span></a></div>
    </div>

    <div class="row" style="margin-top: 20px;">

        <ul class="list-inline footer-lists text-center">

            <li><a href="./services.php">服务</a></li>
            <li><a href="./charter.php">章程</a></li>
            <li><a href="./join.php">加入我们</a></li>
            <li><a href="./contact.php">联系我们</a></li>
          <!--  <li><a href="">活动视频</a></li>
            <li><a href="">tec团队</a></li>
            <li><a href="">最新活动</a></li>-->
        </ul>
    </div>



</div>

<footer class="tm-footer">
    <div class="container">
        <div class="visible-md visible-lg">
            <h5 class="text-center text-bold" style="margin: 15px 0;">关注我们的官方微博，了解最新豪车俱乐部动态</h5>
            <div class="center-block text-center"><a href="http://weibo.com/13gydz?profile_ftype=1&is_all=1#_rnd1451270513481" target="_blank" class="btn btn-danger btn-myself"><img src="img/contact/微博图标.png"><span style="vertical-align:bottom;">TEC引擎俱乐部官方微博</span></a></div>
        </div>
        <div class="row tm-copyright">
            <p class="col-lg-12 small copyright-text text-center">苏州遇见文化传媒有限公司版权所有&copy;2015-<?=date('Y',time())?>&nbsp;&nbsp;<a href="#" target="_blank" title="TEC引擎俱乐部">TEC引擎俱乐部</a></p>
            <h5 class="text-center" style="margin-top:30px;">  www.tecclub.cn</h5>
        </div>

    </div>
</footer> <!-- Footer content-->

<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script type="text/javascript" src="js/templatemo-script.js"></script>
<script defer src="js/jquery.flexslider-min.js"></script><!-- FlexSlider -->
<script type="text/javascript" src="js/jquery.imgbox.pack.js"></script>

<script>

    $(document).ready(function() {
        $("#weichat-1").imgbox();


    });
    $(window).load(function() {



            if(window.screen.availHeight<=768) {

                $('.mobile-menu-icon').click(function(){

                    if($('.templatemo-nav-container nav').css('display')=='block'){

                        $('.templatemo-top-section').on('touchmove', function (event) {
                            event.preventDefault();
                        });

                    }else {

                        $(".templatemo-top-section").unbind("touchmove");
                    }

                });


            }
        setTimeout(function(){
            $('#home-cover').fadeOut(1500,function(){});
        },1000);
 /*  if($(window).width()<768){

            setTimeout(function(){
                $('.templatemo-nav').slideDown(500,function(){

                    setTimeout(function(){
                        $('.templatemo-nav').slideUp(500);
                    },500);

                });
            },300);
        }*/

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            prevText: "&#xf104;",
            nextText: "&#xf105;"
        });

        $('body').addClass('loaded');
    });
</script>
<div class="bdsharebuttonbox hidden"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

</body>
</html>
