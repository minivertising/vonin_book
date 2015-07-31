<div style="display:none;">
<!----------------- 선물 팝업 ----------------->
<!-- <div id="gift_popup" style="position:absolute;background:white;width:500px;height:700px;">
  <a href="#" onclick="$.colorbox.close()">닫기</a>
  <h1>당신의 설렘을 되찾기 위해!</h1>
  <h3>설렘의 시작은 피부관리 입니다. 책 속에 숨겨진 보닌 올인원으로 시작하세요!</h3>
</div> -->
<div id="gift_popup" class="popup_wrap">
  <div class="p_mid gift p_position">
    <div class="block_close clearfix">
      <a href="#" onclick="$.colorbox.close();return false;" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <a href="#" class="pro_1"><img src="images/popup/btn_.png" /></a>
        <a href="#" class="pro_2"><img src="images/popup/btn_.png" /></a>
        <a href="#" class="pro_3"><img src="images/popup/btn_.png" /></a>
        <a href="#" class="pro_4"><img src="images/popup/btn_.png" /></a>
      </div><!--inner-->
    </div>
  </div>
</div>

<!----------------- 선물 팝업 ----------------->
<!----------------- 참여방법  팝업 ----------------->
<!-- <div id="join_popup" style="position:absolute;background:white;width:500px;height:700px;">
  <a href="#" onclick="$.colorbox.close()">닫기</a>
  <h1>참여방법</h1>
  <h3>참여방법에 대한 설명</h3>
</div> -->

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
      <a href="#" onclick="$.colorbox.close()" class="btn_close"><img src="images/popup/btn_close.png" /></a>
    </div>
    <div class="block_content">
      <div class="inner">
        <div class="block_input">
          <div class="input_one clearfix">
            <div class="input">
              <input type="text" name="mb_name" id="mb_name">
            </div>
          </div>
          <div class="input_one clearfix">
            <div class="input_phone clearfix">
              <div class="phone_ip">
                <select name="mb_phone1" id="mb_phone1">
                  <option value="010">010</option>
                  <option value="011">011</option>
                  <option value="016">016</option>
                  <option value="017">017</option>
                  <option value="018">018</option>
                  <option value="019">019</option>
                </select>
              </div>
              <div class="phone_ip"><input type="tel" name="mb_phone2" id="mb_phone2"></div>
              <div class="phone_ip"><input type="tel" name="mb_phone3" id="mb_phone3"></div>
            </div>
          </div>
        </div>
        <div class="check_block">
          <div class="check_one first clearfix">
            <div class="in_check">
            -
            </div>
            <div class="txt_check">
              <img src="images/popup/label_agree_all.png"  name="all_agree" id="all_agree" alt=""/>
            </div>
          </div>  
          <div class="check_one clearfix">
            <div class="in_check">
            -
            </div>
            <div class="txt_check">
              <img src="images/popup/agree_info.png" name="use_agree" id="use_agree" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#" onclick="show_use_agree();return false;"><img src="images/popup/btn_agree.png" alt=""/></a>
            </div>
          </div>
          <div class="check_one clearfix">
            <div class="in_check">
            -
            </div>
            <div class="txt_check">
              <img src="images/popup/agree_info_agency.png" name="privacy_agree" id="privacy_agree" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#" onclick="show_privacy_agree();return false;"><img src="images/popup/btn_agree.png" alt=""/></a>
            </div>
          </div>
          <div class="check_one clearfix">
            <div class="in_check">
            -
            </div>
            <div class="txt_check">
              <img src="images/popup/agree_info_ad.png" name="adver_agree" id="adver_agree" alt=""/>
            </div>
            <div class="btn_check">
              <a href="#" onclick="show_adver_agree();return false;"><img src="images/popup/btn_agree.png" alt=""/></a>
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
          <a href="index.php"><img src="images/popup/btn_.png" /></a>
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
      <a href="#" onclick="back_input()" class="btn_close"><img src="images/popup/btn_close.png" /></a>
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
      <a href="#"  onclick="back_input()" class="btn_close"><img src="images/popup/btn_close.png" /></a>
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
      <a href="#" onclick="back_input()" class="btn_close"><img src="images/popup/btn_close.png" /></a>
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

</div>