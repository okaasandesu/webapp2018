
$(document).ready(function(){

    $("#top-btn").hide();
     // ���y�[�W�g�b�v�{�^�����\���ɂ���

    $(window).on("scroll", function() {

        if ($(this).scrollTop() > 100) {
            // �� �X�N���[���ʒu��100�����������ꍇ�Ɉȉ��̏���������
            $('#top-btn').fadeIn("fast");
            // �� (100��菬��������)�y�[�W�g�b�v�{�^�����X���C�h�_�E��
        } else {
            $('#top-btn').fadeOut("fast");
            // �� ����ȊO�̏ꍇ�̏ꍇ�̓X���C�h�A�b�v����B
        }

    // �t�b�^�[�Œ肷��

        scrollHeight = $(document).height(); 
        // �h�L�������g�̍���
        scrollPosition = $(window).height() + $(window).scrollTop(); 
        //�@�E�B���h�E�̍���+�X�N���[�������������@���݂̃g�b�v����̈ʒu
        footHeight = $("footer").innerHeight();
        // �t�b�^�[�̍���

        if ( scrollHeight - scrollPosition  <= footHeight ) {
        // ���݂̉�����ʒu���A�t�b�^�[�̍����̈ʒu�ɂ͂�������
        //  "#top-btn"��position��absolute�ɕύX���A�t�b�^�[�̍����̈ʒu�ɂ���        
            $("#top-btn").css({
                "position":"absolute",
                "bottom": footHeight
            });
        } else {
        // ����ȊO�̏ꍇ�͌���css�X�^�C�����w��
            $("#top-btn").css({
                "position":"fixed",
                "bottom": "0px"
            });
        }
    });
    // �g�b�v�փX���[�X�X�N���[��
    $('#top-btn a').click(function () {
        $('body,html').animate({
        scrollTop: 0
        }, 500);
        // �y�[�W�̃g�b�v�� 500 �̃X�s�[�h�ŃX�N���[������
        return false;
     });
});

//TOP�y�[�W�̉������X���[�X�X�N���[��
$(function(){
   // #�Ŏn�܂�A���J�[���N���b�N�����ꍇ�ɏ���
   $('a[href^=#top-mobile]').click(function() {
      // �X�N���[���̑��x
      var speed = 400; // �~���b
      // �A���J�[�̒l�擾
      var href= $(this).attr("href");
      // �ړ�����擾
      var target = $(href == "#" || href == "" ? 'html' : href);
      // �ړ���𐔒l�Ŏ擾
      var position = target.offset().top - 100;
      // �X���[�X�X�N���[��
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