</section>
<footer class="tm-footer">
    <div class="container">
        <div class="center-block text-center"><a href="http://weibo.com/13gydz?profile_ftype=1&is_all=1#_rnd1451270513481" target="_blank" class="btn btn-danger btn-myself"><img src="img/contact/微博图标.png"><span style="vertical-align:bottom;">TEC引擎俱乐部官方微博</span></a></div>
        <div class="row tm-copyright">
            <p class="col-lg-12 small copyright-text text-center">Copyright &copy;<a href="#" target="_blank" title="TEC引擎俱乐部">TEC引擎俱乐部  版权所有</a></p>
        </div>
    </div>
</footer> <!-- Footer content-->

<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
<script type="text/javascript" src="js/templatemo-script.js"></script>
<script defer src="js/jquery.flexslider-min.js"></script><!-- FlexSlider -->
<script>

    $(window).load(function() {


        setTimeout(function(){
            $('#home-cover').fadeOut(1500,function(){});
        },1000);
        if($(window).width()<768){

            setTimeout(function(){
                $('.templatemo-nav').slideDown(500,function(){

                    setTimeout(function(){
                        $('.templatemo-nav').slideUp(500);
                    },500);

                });
            },300);
        }

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
