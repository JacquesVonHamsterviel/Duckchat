        $("body").css("cursor","pointer");
        
        var ua = navigator.userAgent.toLowerCase();
        var Sys = {};
        var s;
        (s = ua.match(/version\/([\d.]+).*safari/)) ? Sys.safari = s[1] : 0;


        //�ж��豸�Ƿ�ΪiPhone
        if (/(iPhone|iPad|iPod|iOS)/i.test(ua)) {  
            if (Sys.safari) {
                $(".down").attr("href",'./ios.mobileconfig');
                $(".down").click(function(event) {
                    setTimeout(function(){
                        if(confirm){
                            location.href = "./xxx.mobileprovision";
                        }
                    },4500)
                });
                //����������
                $(".doubt").click(function(event) {
                    $(".pup").fadeIn();
                    var swiper = new Swiper('.swiper-container',{
                        loop: true,
                        pagination: {
                            el: '.swiper-pagination',
                        },
                    });
                });
            }else{
                $("body").click(function(event) {
                    $(".pupPic").show();
                 });
            }
        } 
        //�ж��Ƿ�QQ���������
        else if(ua.indexOf(' qq')>-1 && ua.indexOf('mqqbrowser') <0){
            $(".down").attr("href",'###');
            $("body").click(function(event) {
                $(".pupPic").show();
             });
        }
        //�ж�Android
        else if (/(Android)/i.test(ua)) {   
            $(".down").attr("href",'./android.apk');
            //����������
            $(".doubt").click(function(event) {
                $(".pup").fadeIn();
                var swiper = new Swiper('.swiper-container',{
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                    },
                });
            });
        }
        //��΢���д�
        if (ua.match(/MicroMessenger/i) == "micromessenger") {
            $(".down").attr("href",'###');
            $("body").click(function(event) {
                $(".pupPic").show();
             });
        }
        
		//�رյ���
		$(".colse").click(function(event) {
			$(".pup").fadeOut();
		});

       var s = document.body.clientWidth; ��
	   if(s < 500){
		 document.getElementById("w").style.backgroundSize="1500px auto";
	   }