// JavaScript Document
$(function(){
  let topBtn =$('.scroll-top');
  topBtn.hide;
  
  $('.nav-button__hamburger-button__box').click(function(){
    $(this).toggleClass('active');
    $('#header-nav').toggleClass('menu-in');
  });
  
  $(window).scroll(function(){
    if($(this).scrollTop()>1000){
      topBtn.fadeIn();
    }else{
      topBtn.fadeOut();
    }
  });
  
  topBtn.on("click",function(event){
    event.preventDefault();
    $('body,html').animate({
      scrollTop:0
    },500);
  });
  
  $('a[href^="#"]').click(function(){
    var adjust = 50;
    var speed = 800; 
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - adjust;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
  
  $(window).scroll(function(){
    $(".section-top__motto").each(function () {
      var elemPos = $(this).offset().top; 
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height(); 
      if (scroll > elemPos - windowHeight) {
        $(this).addClass("open-motto");
      }
    });
    $(".section-button__top-box__descriptionbox").each(function () {
      var elemPos = $(this).offset().top; 
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height(); 
      if (scroll > elemPos - windowHeight) {
        $(this).addClass("top-box__scroll");
      }
    });
    $(".section-hotel__imgbox").each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if(scroll > elemPos - windowHeight){
        $(this).addClass("section-hotel__imgbox-scroll");
      }
    });
    $(".section-doctor__box__message").each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if(scroll > elemPos - windowHeight){
        $(this).addClass("section-doctor__box__message-scroll");
      }
    });
    $(".consulation-box").each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if(scroll > elemPos - windowHeight){
        $(this).addClass("consulation-box-scroll");
      }
    });
    $(".consulation-content").each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if(scroll > elemPos - windowHeight){
        $(this).addClass("consulation-content-scroll");
      }
    });
  });
  jQuery(window).scroll();
  
  function delayScrollAnime() {
    var time = 0.2;//遅延時間を増やす秒数の値
    var value = time;
    $('.section-animal__list').each(function () {
      var parent = this;					//親要素を取得
      var elemPos = $(this).offset().top;//要素の位置まで来たら
      var scroll = $(window).scrollTop();//スクロール値を取得
      var windowHeight = $(window).height();//画面の高さを取得
      var childs = $(this).children();	//子要素を取得

      if (scroll >= elemPos - windowHeight && !$(parent).hasClass("play")) {//指定領域内にスクロールが入ったらまた親要素にクラスplayがなければ
        $(childs).each(function () {

          if (!$(this).hasClass("fadeUp")) {//アニメーションのクラス名が指定されているかどうかをチェック

            $(parent).addClass("play");	//親要素にクラス名playを追加
            $(this).css("animation-delay", value + "s");//アニメーション遅延のCSS animation-delayを追加し
            $(this).addClass("fadeUp");//アニメーションのクラス名を追加
            value = value + time;//delay時間を増加させる

            //全ての処理を終わったらplayを外す
            var index = $(childs).index(this);
            if((childs.length-1) == index){
              $(parent).removeClass("play");
            }
          }
        })
      }else {
        $(childs).removeClass("fadeUp");//アニメーションのクラス名を削除
        value = time;//delay初期値の数値に戻す
      }
    })
  }
  $(window).scroll(function (){
		delayScrollAnime();/* アニメーション用の関数を呼ぶ*/
	});
});










