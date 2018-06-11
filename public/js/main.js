
$(document).ready(function(){

    $("#top-btn").hide();
     // ↑ページトップボタンを非表示にする

    $(window).on("scroll", function() {

        if ($(this).scrollTop() > 100) {
            // ↑ スクロール位置が100よりも小さい場合に以下の処理をする
            $('#top-btn').fadeIn("fast");
            // ↑ (100より小さい時は)ページトップボタンをスライドダウン
        } else {
            $('#top-btn').fadeOut("fast");
            // ↑ それ以外の場合の場合はスライドアップする。
        }

    // フッター固定する

        scrollHeight = $(document).height(); 
        // ドキュメントの高さ
        scrollPosition = $(window).height() + $(window).scrollTop(); 
        //　ウィンドウの高さ+スクロールした高さ→　現在のトップからの位置
        footHeight = $("footer").innerHeight();
        // フッターの高さ

        if ( scrollHeight - scrollPosition  <= footHeight ) {
        // 現在の下から位置が、フッターの高さの位置にはいったら
        //  "#top-btn"のpositionをabsoluteに変更し、フッターの高さの位置にする        
            $("#top-btn").css({
                "position":"absolute",
                "bottom": footHeight
            });
        } else {
        // それ以外の場合は元のcssスタイルを指定
            $("#top-btn").css({
                "position":"fixed",
                "bottom": "0px"
            });
        }
    });
    // トップへスムーススクロール
    $('#top-btn a').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 500);
        // ページのトップへ 500 のスピードでスクロールする
        return false;
     });
});

//TOPページの下矢印をスムーススクロール
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#top-mobile]').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top - 100;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});


$(function () {
  $('body').addClass('fade-layer-off');
  $('<div class="fade-layer"/>').prependTo('body').fadeOut(2000, function(){
      $(this).remove();
  });
  $(window).on("beforeunload",function(e){
      $('body').fadeOut();
  });
});