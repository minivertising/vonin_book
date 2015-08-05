<div style="display:none;">
<!----------------- 선물 팝업 ----------------->
<div id="gift_popup" class="popup_wrap">
  <div class="p_mid gift p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.colorbox.close();return false;" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <a href="http://www.vonin.co.kr/product/detail.jsp?pid=ACM25248" target="_blank" class="pro_1"><img src="images/popup/btn_p_1.png" /></a>
        <a href="http://www.vonin.co.kr/product/detail.jsp?pid=ACM25247" target="_blank" class="pro_2"><img src="images/popup/btn_p_2.png" /></a>
        <a href="http://www.vonin.co.kr/product/detail.jsp?pid=ACM25249" target="_blank" class="pro_3"><img src="images/popup/btn_p_3.png" /></a>
        <a href="http://www.vonin.co.kr/product/detail.jsp?pid=ACM25250" target="_blank" class="pro_4"><img src="images/popup/btn_p_4.png" /></a>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 선물 팝업 ----------------->
<!----------------- 참여방법  팝업 ----------------->
<div id="join_popup" class="popup_wrap">
  <div class="p_mid howto p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.colorbox.close();return false;" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 참여방법  팝업 ----------------->
<!----------------- 개인정보 입력  팝업 ----------------->
<div id="insert_popup" class="popup_wrap">
  <div class="p_mid_input p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="show_confirm();return false;" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="block_input">
          <div class="input_one clearfix">
            <div class="input">
              <input type="text" name="mb_name" id="mb_name" value="성함을 입력해 주세요." onfocus="focus_val(this)" onblur="blur_val(this)">
            </div>
          </div>
          <div class="input_one clearfix">
            <div class="input">
              <input type="text" name="mb_phone" id="mb_phone" value="휴대폰 번호를 입력해 주세요.(숫자만)" onfocus="focus_val(this)" onblur="blur_val(this)" onkeyup="only_num(this);">
            </div>
          </div>
        </div>
        <div class="check_block">
          <div class="check_one first clearfix">
            <div class="in_check">
              <img src="images/popup/check_out.png" alt=""  name="all_agree" id="all_agree" alt="" onclick="all_check()" style="cursor:pointer"/>
            </div>
            <div class="txt_check">
              <img src="images/popup/label_agree_all.png" onclick="all_check()" alt="" style="cursor:pointer"/>
            </div>
          </div>  
          <div class="check_one clearfix">
            <div class="in_check">
              <img src="images/popup/check_out.png" name="use_agree" id="use_agree" onclick="use_check()" style="cursor:pointer" alt=""/>
            </div>
            <div class="txt_check">
              <img src="images/popup/label_agree.png" onclick="use_check()" style="cursor:pointer" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#" onclick="show_use_agree();return false;"><img src="images/popup/agree_info.png" alt=""/></a>
            </div>
          </div>
          <div class="check_one clearfix">
            <div class="in_check">
              <img src="images/popup/check_out.png" name="privacy_agree" id="privacy_agree" style="cursor:pointer" onclick="privacy_check()" alt=""/>
            </div>
            <div class="txt_check">
              <img src="images/popup/label_agree.png" onclick="privacy_check()" style="cursor:pointer" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#" onclick="show_privacy_agree();return false;"><img src="images/popup/agree_info_agency.png" alt=""/></a>
            </div>
          </div>
          <div class="check_one clearfix">
            <div class="in_check">
              <img src="images/popup/check_out.png" name="adver_agree" id="adver_agree" style="cursor:pointer" onclick="adver_check()" alt=""/>
            </div>
            <div class="txt_check">
              <img src="images/popup/label_agree.png" onclick="adver_check()" style="cursor:pointer" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#" onclick="show_adver_agree();return false;"><img src="images/popup/agree_info_ad.png" alt=""/></a>
            </div>
          </div>
        </div>
        <div class="btn_block">
          <a href="#" onclick="input_info();return false;"><img src="images/popup/btn_input_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 개인정보 입력  팝업 ----------------->
<!----------------- 참여완료  팝업 ----------------->
	<div id="thanks_popup" class="popup_wrap">
   	  <div class="p_mid ending p_position">
            <div class="block_close clearfix">
                <a href="index.php" class="btn_close"><img src="images/popup/btn_close.png" /></a>
            </div>
            <div class="block_content">
            	<div class="inner">
                    <div class="block_btn_home">
                    	<a href="index.php"><img src="images/popup/btn_other_movie.png" /></a>
                        <a href="index.php"><img src="images/popup/btn_comp.png" /></a>
                    </div>
                    
                    
                </div><!--inner-->
            </div>
        </div>
	</div>

<!----------------- 참여완료  팝업 ----------------->

<!----------------- 개인정보 활용약관 팝업 ----------------->
<div id="use_agree_popup" class="popup_wrap">
  <div class="p_mid_agree p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="back_input();return false;" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title"><img src="images/popup/title_agree_1.png" /></div>
                    (주)LG생활건강(이하 "LG생활건강")는 이벤트 진행을 위한 개인정보 
                    수집 이용을 위하여 다음과 같이 귀하의 동의를 받고자 합니다.
                    LG생활건강은 보다 원활한 서비스 제공을 위하여 고객의 정보를 
                    수집하고 있습니다. 고객의 정보는 이벤트 서비스에 참여하기 
                    위한 필수정보로서 제공을 원하지 않을 경우 수집하지 않으며, 
                    동의 거부 시 이벤트 참여에 제한을 받을 수 있습니다.
                    (주)LG생활건강은 본 이벤트를 위하여 다음과 같이 고객님의 
                    개인정보를 수집 및 이용합니다.<br><br>
                    > 수집 · 이용 목적: 이벤트 혜택을 제공하기 위한 정보 전달
                    : 이벤트 혜택 이용에 따른 본인확인, 고지사항 전달: 접속 빈도 
                    파악 또는 회원의 서비스 이용에 대한 통계 <br><br>
                    > 수집 필수 항목 : 
                    이름, 연락처<br><br>
                    > 보유/이용기간 : 이벤트 종료 후 3개월까지
                    (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 개인정보 활용약관 팝업 ----------------->

<!----------------- 개인정보 취급위탁동의약관 팝업 ----------------->
<div id="privacy_agree_popup" class="popup_wrap">
  <div class="p_mid_agree p_position">
    <div class="block_close clearfix">
      <a href="#"  onclick="back_input();return false;" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title"><img src="images/popup/title_agree_2.png" /></div>
                    (주)LG생활건강은 서비스 향상과 원활한 진행을 위하여 개인정보
                     처리 업무를 외부 전문 업체에 위탁하여 처리하고 있습니다.
                    고객은 아래와 같은 개인정보 취급 위탁에 동의하지 않을 권리가 
                    있으며 동의 거부시 이벤트 참여에 제한을 받을 수 있습니다.<br><br>
                    > 취급위탁업체 위탁업무 및 이용목적 : 
                    미니버타이징 (주) / 이벤트 대행 및 운영<br><br>
                    > 보유 및 이용기간 : 이벤트 종료 후 3개월까지<br>
                    (단, 관계 법령에 따라 필요한 경우 해당 법률에서 정한 기간까지)
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 개인정보 취급위탁동의약관 팝업 ----------------->

<!----------------- 광고동의약관 팝업 ----------------->
<div id="adver_agree_popup" class="popup_wrap">
  <div class="p_mid_agree p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="back_input();return false;" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="title"><img src="images/popup/title_agree_3.png" /></div>  
                    - (주)LG생활건강은 수집된 개인정보를 이용하여 각종 서비스•상품 및 타사 서비스와 결합된 상품에 대하여 홍보, 가입권유, 프로모션, 이벤트 목적으로 본인에게 정보/광고를 전화, SMS, MMS, 이메일, 우편등을 통해 전달합니다.<br><br>
                    - (주)LG생활건강이 마케팅 / 홍보를 위하여 고객의 개인정보를 이용에 동의를 구하며, 동의 거부시에도 이벤트 참여는 가능하나 할인 및 이벤트 정보 안내 등 서비스는 제한될 수 있습니다.
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 광고동의약관 팝업 ----------------->

<!----------------- 선택창 팝업 ----------------->
<div id="confirm_popup" class="popup_wrap">
  <div class="p_mid out p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="back_input()" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="block_btn_keep">
          <a href="index.php"><img src="images/popup/btn_out.png" /></a>
          <a href="#" onclick="back_input()"><img src="images/popup/btn_keep.png" /></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 선택창 팝업 ----------------->

<!----------------- 유의사항 팝업 ----------------->
<div id="notice_popup" class="popup_wrap">
  <div class="p_mid notice p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.colorbox.close();return false;" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
      </div><!--inner-->
    </div>
  </div>
</div>
<!----------------- 유의사항 팝업 ----------------->

</div>
