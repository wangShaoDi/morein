$(function(){
    // banner
      var $bannerbox=$(".bannerbox");
      var $imgs=$(".bannerbox img");
      var $left=$(".left");
      var $right=$(".right");
      var $btn=$(".btn");
      var $len=$imgs.length;
      var $btnbox=$(".btnbox");
      var banW=$imgs.eq(0).width();
       var flag=true;
      for(var i=1;i<=$len;i++){
       var str=i==1?'<li class="hot" >'+i+'</li>':'<li>'+i+'</li>';
         $btnbox.append(str);
      }
      var $btn=$(".btnbox li");
      $imgs.css({left:banW}).eq(0).css({left:0});
      var now=0;
      var next=0;
      function move(type){
         if(!flag){return;}
         flag=false;
         if(type=="l"){
         next++;
           if(next==$len){
            next=0;
          }
           $imgs.eq(next).css({"left":banW})
         $imgs.eq(now).animate({left:-banW},600,function(){
            flag=true;
         });
         $imgs.eq(next).animate({left:0},600);
         }
         if(type=="r"){
         next--;
           if(next<0){
            next=$len-1;
          }
           $imgs.eq(next).css({"left":-banW})
         $imgs.eq(now).animate({left:banW},600,function(){
            flag=true;
         });
         $imgs.eq(next).animate({left:0},600);
         }
         
         $btn.eq(now).removeClass("hot");
         $btn.eq(next).addClass("hot");
         now=next;
      }
      var t=setInterval(function(){move("l")},2000);
      $bannerbox.mouseover(function(){
         clearInterval(t);
      })
      $bannerbox.mouseout(function(){
         t=setInterval(function(){move("l")},2000);
      })
     $btn.click(function(){
         if(!flag){return;};
         flag=false;
         var index=$(this).index();
         if(now==index){return;}
         if(index>now){
          $imgs.eq(now).animate({left:-banW},600);
          $imgs.eq(index).css({"left":banW}).animate({left:0},600,function(){
            flag=true;
         });
        }else{
         $imgs.eq(now).animate({left:banW},600);
         $imgs.eq(index).css({"left":-banW}).animate({left:0},600,function(){
            flag=true;
         });
        }
         $btn.eq(now).removeClass("hot");
         $btn.eq(index).addClass("hot");
              next=now=index; 
        }) 
      $left.click(function(){
         move("l");
      })
      $right.click(function(){
         move("r");
      })
      // feature
      })    