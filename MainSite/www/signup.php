<?php
namespace Diman\Openlive\Pages;
//error_reporting(E_ALL & ~E_DEPRECATED);
require './sys/Prepare.php';

use function Diman\Openlive\Prepare\showBar;
use Gregwar\Captcha\CaptchaBuilder;
// Captcha
$builder = new CaptchaBuilder;
$builder->build();
// Enable bar
showBar();
if($_SESSION['Authorization']) {
    header("Location: /");
    die();
}
?>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="https://web.archive.org/web/20110811024957cs_/https://secure.wlxrs.com/nh2J3BbiyrXy6AIFbPtV3bvrIynRXJp4pLi05tOFU1VlDYDwFocNtxCA99v67dVE0iUZ3bjE6xxEGOmuD7nxvG!j09HypTK4yblqcTq62q0/Base/16.0.1770/NYKpPzcj59csignup.css?ZfDHJ0dwkwrfIMoja3-R7w" type="text/css">
   </head>
   <body>
      <div id="m_wh">
         <script type="text/javascript">//<![CDATA[
            function $MB(b,e,h,g,f){if(!window.$f)return;b=b||event;var i=b.target||b.srcElement,a=$f.pn(i,"c_ml");if(a&&!a.menu){var c=_ge(a.getAttribute("hid"));if(c&&c.parentNode!=a.parentNode){$css.add(c,"uxfa_m c_m t_hovl");var d=c.cloneNode(true);d.setAttribute("hid",a.getAttribute("hid"));a.parentNode.insertBefore(d,a.nextSibling);$Do.when("$Header.MenuBind",0,d)}}try{$menu.bind(b,h,g,1,0,0,undefined,f)}catch(j){}if(e)$Do.when("$WLXIMCL.initialize",0,0)}function $SP(a){$WLXIM.switchPresence(a);$menu.closeCurrent()}function $MeMenu(b,a){$MB(b,0,a,0,750);$Do.when("$ThemeMenuInit")}
            //]]>
         </script><script type="text/javascript">//<![CDATA[
            var $B={'ltr':1,'SignedOut':1,'Mozilla':1,'Other_Other':1,'Other_M5':1,'Other_D0':1,'Full':1,'RE_Other':1,V:5.0}
            //]]>
         </script>
         <div id="c_header" class="c_hb t_hdbg" style="min-width:987px;">
            <div class="c_hta t_hdbgimg">
               <div class="c_hg" style="background-image:url(https://web.archive.org/web/20110811024957im_/https://secure.wlxrs.com/$live.controls.images/h/g.png);padding-bottom:7px;">
                  <div class="c_h t_hdt c_hmm" style="width:947px;">
                     <div class="c_htr">
                        <div class="c_hleft">
                           <div class="c_hl" style="top:12px;">
                              <a class="c_hlp c_nootl uxfa_ml c_ml link c_hbrln" hid="c_winLogo" href="https://web.archive.org/web/20110811024957/https://home.live.com/?rru=home&amp;livecom=1" target="_top" onfocus="$MB(event,0,0,{x:21,y:0})" onmouseover="$MB(event,0,0,{x:21,y:0})"><span class="c_is"><span class="is_c" dir="ltr"><img class="is_img" onload="$Do.when('$IS.Init',0,this);" style="background-image:url(https://web.archive.org/web/20110811024957im_/https://secure.wlxrs.com/$live.controls.images/h/s7.png);background-position:-0px -8px;width:18px;height:17px;" src="https://web.archive.org/web/20110811024957im_/https://secure.wlxrs.com/$live.controls.images/is/invis.gif" alt="Windows Live"></span></span><span class="c_hbrnd">Windows Live<span class="c_tm">™</span></span></a>
                              <ul class="uxfa_m c_m t_hovl">
                                 <li><a href="https://web.archive.org/web/20110811024957/https://home.live.com/?rru=home&amp;livecom=1" target="_top" hid="c_ht_home">Home</a><span class="c_ms"></span></li>
                                 <li><a href="https://web.archive.org/web/20110811024957/https://devices.live.com/" target="_top" hid="c_ht_devices">Devices</a></li>
                                 <li><a href="https://web.archive.org/web/20110811024957/https://devices.live.com/Devices/Mobile" target="_top" hid="c_ht_mobile">Mobile</a></li>
                                 <li><a href="https://web.archive.org/web/20110811024957/http://g.live.com/9uxp9en-us/hdr_dwnld??su=http://shared.live.com/Live.AccountManagement" target="_top" hid="c_ht_install">Downloads</a><span class="c_ms"></span></li>
                                 <li><a href="https://web.archive.org/web/20110811024957/https://home.live.com/allservices/" target="_top" hid="c_ht_services">All services</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="c_hright">
                           <div id="c_me" class="c_me c_mcp" thov="1"><a id="c_signin" href="https://web.archive.org/web/20110811024957/https://login.live.com/login.srf?wa=wsignin1.0&amp;rpsnv=11&amp;ct=1313030998&amp;rver=6.1.6206.0&amp;wp=MBI_SSL&amp;wreply=https:%2F%2Fsignup.live.com%2Fsignup.aspx%3Flic%3D1&amp;lc=1033&amp;id=68692&amp;mkt=en-US" class="signIn TextSizeLarge" target="_top">Sign in</a></div>
                        </div>
                        <div class="c_clr"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script type="text/javascript">var $HIC={};$HIC.e=7;
            $HIC.m=0;
            $HIC.l=0;$HIC.NoWebIm=1;
         </script><script type="text/javascript">//<![CDATA[
            var $HeaderCookie={};(function(){var a=$HeaderCookie,b=_ge("c_mocc"),c=_ge("c_murc"),f=$B.rtl?"&#x200f;":"";function d(a){if(b&&!$HIC.NoWebIm){b.style.display="inline";if(a>999)a="99+";b.innerHTML="&nbsp;"+f+"("+a+")"}$HIC.m=a;$Do.when("$Header.UpdateCookie",this)}a.updateContactsCount=d;function g(){if(this.dataIsGood&&$HIC.m)return $HIC.m;else return 0}a.getContactsCount=g;function e(a){if(c){c.style.display="inline";if(a>9999)a="999+";c.innerHTML="&nbsp;"+f+"("+a+")"}$HIC.l=a;$Do.when("$Header.UpdateCookie",this)}a.updateUnreadCount=e;function h(){if(this.dataIsGood&&$HIC.l)return $HIC.l;else return 0}a.getUnreadCount=h;if($HIC.m)d(parseInt($HIC.m));if($HIC.l)e(parseInt($HIC.l))})()
            //]]>
         </script>
      </div>
      <div class="c_base c_fixwth">
         <div id="c_content" class="c_main">
            <div id="tempimgcontainer" style="display:none"><img width="1" height="1" src="https://web.archive.org/web/20110811024957/https://switch.atdmt.com/action/WL_HM_AllMarkets_W3HMAccountSignUp_Pageview"></div>
            <!-- form as a signup control -->
            <div class="topbotrow">
               <h1 id="pgtitle">
                  Create your Windows Live ID
               </h1>
               <p id="pgtitletext">
                  It gets you into all Windows Live services—and other places you see <img height="16" width="16" alt="Windows Live ID" src="https://web.archive.org/web/20110811024957im_/https://secure.shared.live.com/L!DVM52K1-gpciK4meLeqQ/images/liveidicon.gif" title="Windows Live ID">
                  <br>
                  All information is required.
               </p>
               <div class="bluebar">
                  &nbsp;
               </div>
               <div id="signinsec" class="signintext row">
                  <p>
                     If you use <strong>Hotmail</strong>, <strong>Messenger</strong>, or <strong>Xbox LIVE</strong>, you already have a Windows Live ID.
                     <a href="https://web.archive.org/web/20110811024957/https://login.live.com/login.srf?wa=wsignin1.0&amp;rpsnv=11&amp;ct=1313030998&amp;rver=6.1.6206.0&amp;wp=MBI_SSL&amp;wreply=https:%2F%2Fsignup.live.com%2Fsignup.aspx%3Flic%3D1%26ne%3D1&amp;lc=1033&amp;id=68692&amp;wlu=1" title="Sign in">
                     Sign in</a>
                  </p>
               </div>
            </div>
            <form id="SignUpForm" method="post" action="" autocomplete="off" onsubmit="SignUp.DoPost();return false;">
               <div class="helparea">
                  <div class="row">
                     <div class="capslockHolder">
                        <div class="capslock" id="dCapsLock" style="visibility: hidden">Caps Lock is on</div>
                     </div>
                  </div>
               </div>
               <div class="helparea" style="z-index: 200; height: auto;">
                  <div id="cmembernamelive" class="row hide">
                     <p id="iMembernameLiveError" class="error" style="display: none">
                     </p>
                     <p id="iLiveMessage" class="error message" style="display: none">
                     </p>
                     <p id="chkavailwkwld" class="cwork hide">
                        <img width="16" height="16" alt="Working..." src="https://web.archive.org/web/20110811024957im_/https://secure.shared.live.com/L!DVM52K1-gpciK4meLeqQ/images/hig_progcircle_animated.gif">
                        Working...
                     </p>
                     <label for="imembernamelive">
                     Windows Live ID:
                     </label>
                     <div id="memnamecont">
                        <input id="imembernamelive" name="imembernamelive" type="text" maxlength="64" value="" onfocus="SignUp.Fields[FT.MN].evt_Live_onfocus(event)" onchange="SignUp.Fields[FT.MN].evt_Live_onchange(event)" onblur="SignUp.Fields[FT.MN].evt_Live_onblur(event)"><span id="mnat">@</span>
                        <select id="idomain" name="idomain" onchange="SignUp.Fields[FT.MN].evt_Domain_onchange(event)" onfocus="SignUp.Fields[FT.MN].evt_Domain_onfocus(event)">
                           <option value="hotmail.com">hotmail.com</option>
                           <option value="LIVE.COM">LIVE.COM</option>
                        </select>
                        <label for="idomain" style="display: none">Domains</label>
                     </div>
                     <div id="sugcont">
                        <div id="sug">
                           <a id="sugclose" href="#" title="Close" onclick="SignUp.HideMNS();return false;">
                           X</a>
                           <div id="sugadv">
                              <h4>
                                 Windows Live ID advanced search
                              </h4>
                              <p class="hint">
                                 Enter words you'd like in your ID, such as your first name or interests.
                              </p>
                              <label for="isug1" style="display: none;">
                              Enter a word</label>
                              <input id="isug1" class="inputhint" name="isug1" type="text" value=" Enter a word" onchange="SignUp.ValidateMNS();" onfocus="SignUp.MNSTouch(this);">
                              <label for="isug2" style="display: none;">
                              Enter another word</label>
                              <input id="isug2" class="inputhint" name="isug2" type="text" value=" Enter another word" onchange="SignUp.ValidateMNS();" onfocus="SignUp.MNSTouch(this);">
                              <label for="isug3" style="display: none;">
                              Enter another word</label>
                              <input id="isug3" class="inputhint" name="isug3" type="text" value=" Enter another word" onchange="SignUp.ValidateMNS();" onfocus="SignUp.MNSTouch(this);">
                              <p id="sugsearch">
                                 <a href="#" id="sugsearchlk" onclick="SignUp.MNSAdv();return false;">
                                 Search for Windows Live ID options</a>
                              </p>
                           </div>
                           <div id="sugwait">
                              <p>
                                 <img width="16" height="16" alt="Working..." src="https://web.archive.org/web/20110811024957im_/https://secure.shared.live.com/L!DVM52K1-gpciK4meLeqQ/images/hig_progcircle_animated.gif">
                                 Working...
                              </p>
                           </div>
                           <div id="sugerror">
                           </div>
                           <div id="sugavail">
                              <h4>
                                 Available IDs
                              </h4>
                              <p class="hint">
                                 Click an option:
                              </p>
                              <div id="mysugs">
                              </div>
                           </div>
                           <div id="sugdont">
                              <h4>
                                 Don't like these?
                              </h4>
                              <a href="#" id="advsearch" title="Use Windows Live ID advanced search" onclick="SignUp.DisplayAdvMNS();return false;">
                              Use Windows Live ID advanced search</a>
                           </div>
                        </div>
                     </div>
                     <div id="chkavail">
                        <button id="ichkavailbutton" type="button" title="Check availability" onclick="SignUp.DisplayMNS()">
                        Check availability</button>
                     </div>
                     <p id="easilinkctr" class="linkinline">
                        <a id="ieasiswitch" href="#" onclick="SignUp.Fields[FT.MN].updateState(STATE.MN.EASI);return false;">
                        Or use your own email address</a>
                     </p>
                  </div>
                  <div class="helppop" style="display: none;">
                     <div id="membernamelivehelp" class="helpctr">
                     </div>
                  </div>
                  <div class="helppop" style="display: none;">
                     <div id="mnoptlivehelp" class="helpctr">
                     </div>
                  </div>
               </div>
               <div class="helparea" style="z-index: 1; height: auto;">
                  <div id="cmembernameeasi" class="row">
                     <p id="iMembernameEasiError" class="error" style="display: none">
                     </p>
                     <p id="iEasiMessage" class="error message" style="display: none">
                     </p>
                     <p id="chkavailwkeasi" class="cwork hide">
                        <img width="16" height="16" alt="Working..." src="https://web.archive.org/web/20110811024957im_/https://secure.shared.live.com/L!DVM52K1-gpciK4meLeqQ/images/hig_progcircle_animated.gif">
                        Working...
                     </p>
                     <label for="imembernameeasi">
                     Use your email address:</label>
                     <input id="imembernameeasi" name="imembernameeasi" class="inputhint" type="text" maxlength="112" value="Example: someone@example.com" onfocus="SignUp.Fields[FT.MN].evt_EASI_onfocus(event)" onblur="SignUp.Fields[FT.MN].evt_EASI_onblur(event)" onchange="SignUp.Fields[FT.MN].evt_EASI_onchange(event)"><br>
                     <p id="livelinkctr" class="linkinline">
                        <a id="iliveswitch" href="#" onclick="SignUp.Fields[FT.MN].updateState(STATE.MN.Live);return false;">
                        Or get a Windows Live email address</a>
                     </p>
                  </div>
                  <div class="helppop" style="display: none;">
                     <div id="membernameeasihelp" class="helpctr">
                     </div>
                  </div>
                  <div class="helppop" style="display: none;">
                     <div id="mnopteasihelp" class="helpctr">
                     </div>
                  </div>
               </div>
               <div class="helparea" style="z-index: 1; height: auto;">
                  <div class="row">
                     <p id="iPwdError" class="error" style="display: none">
                     </p>
                     <label for="iPwd">
                     Create a password:</label>
                     <input id="iPwd" name="iPwd" type="password" onfocus="SignUp.Fields[FT.PWD].evt_onfocus(event)" onblur="SignUp.Fields[FT.PWD].evt_onblur(event)" onchange="SignUp.Fields[FT.PWD].evt_onchange(event)" onkeyup="SignUp.Fields[FT.PWD].evt_onkeyup(event)" onkeypress="SignUp.Fields[FT.PWD].evt_onkeypress(event)"><br>
                     <p class="hint">
                        6-character minimum; case sensitive
                     </p>
                  </div>
                  <div class="row">
                     <label for="iRetypePwd">
                     Retype password:</label>
                     <input id="iRetypePwd" name="iRetypePwd" type="password" onfocus="SignUp.Fields[FT.RPWD].evt_onfocus(event)" onblur="SignUp.Fields[FT.RPWD].evt_onblur(event)" onchange="SignUp.Fields[FT.RPWD].evt_onchange(event)" onkeypress="SignUp.Fields[FT.RPWD].evt_onkeypress(event)"><br>
                  </div>
                  <div class="helppop" style="display: none;">
                     <div id="passwordhelp" class="helpctr">
                     </div>
                  </div>
               </div>
               <div class="helparea" style="z-index: 1; height: auto;">
                  <div id="altinput" class="row hide">
                     <p id="iAltEmailError" class="error" style="display: none">
                     </p>
                     <label for="iAltEmail">
                     Alternate email address:</label>
                     <input id="iAltEmail" name="iAltEmail" type="text" maxlength="113" value="" onfocus="SignUp.ShowHelp('alt')" onchange="SignUp.ValidateField(this)"><br>
                     <p id="qsalinkctr" class="linkinline">
                        <a id="iqsaswitch" href="#" onclick="SignUp.DisplayReset('qsa');return false;">
                        Or choose a security question for password reset</a>
                     </p>
                  </div>
                  <div class="helppop" style="display: none;">
                     <div id="resethelp" class="helpctr">
                     </div>
                  </div>
               </div>
               <div id="qsainput" class="hide helparea" style="z-index: 1; height: auto;">
                  <div id="SecretQuestionContainer" class="row">
                     <p id="iSQError" class="error" style="display: none;"></p>
                     <label for="iSQ">Question:</label>
                     <select id="iSQ" name="iSQ">
                        <option value="0" selected="">Select one</option>
                        <option value="Mother's birthplace">Mother's birthplace</option>
                        <option value="Best childhood friend">Best childhood friend</option>
                        <option value="Name of first pet">Name of first pet</option>
                        <option value="Favorite teacher">Favorite teacher</option>
                        <option value="Favorite historical person">Favorite historical person</option>
                        <option value="Grandfather's occupation">Grandfather's occupation</option>
                     </select>
                     <br>
                  </div>
                  <div class="row">
                     <p id="iSAError" class="error" style="display: none">
                     </p>
                     <label for="iSA">
                     Secret answer:</label>
                     <input id="iSA" name="iSA" type="text" maxlength="32" onfocus="SignUp.ShowHelp('qsa')" onchange="SignUp.ValidateField(this)"><br>
                     <p class="hint">
                        5-character minimum; not case sensitive
                     </p>
                     <p id="altlinkctr" class="linkinline">
                        <a id="ialtswitch" href="#" onclick="SignUp.DisplayReset('alt');return false;">
                        Or use an alternate email address</a>
                     </p>
                  </div>
                  <div class="helppop" style="display: none;">
                     <div id="qsahelp" class="helpctr">
                     </div>
                  </div>
               </div>
               <div class="helparea" style="z-index: 1; height: auto;">
                  <div class="row">
                     <p id="iFirstNameError" class="error" style="display: none">
                     </p>
                     <label for="iFirstName">
                     First name:</label>
                     <input id="iFirstName" name="iFirstName" type="text" maxlength="40" value="" onfocus="SignUp.ShowHelp('name')" onchange="SignUp.ValidateField(this)"><br>
                  </div>
                  <div class="row">
                     <p id="iLastNameError" class="error" style="display: none">
                     </p>
                     <label for="iLastName">
                     Last name:</label>
                     <input id="iLastName" name="iLastName" type="text" maxlength="40" value="" onfocus="SignUp.ShowHelp('name')" onchange="SignUp.ValidateField(this)"><br>
                  </div>
                  <div class="helppop" style="display: none;">
                     <div id="namehelp" class="helpctr">
                     </div>
                  </div>
               </div>
               <div class="helparea">
                  <div id="CountryRegionContainer" class="row" style="z-index: 1; height: auto;">
                     <label for="iCountry">Country/region:</label>
                     <select id="iCountry" name="iCountry">
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo (DRC)</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Côte d'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Islas Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji Islands</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern and Antarctic Lands</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia, The</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong SAR</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="SJ">Jan Mayen</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KR">Korea</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao SAR</option>
                        <option value="MK">Macedonia, Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="KP">North Korea</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Authority</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn Islands</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">São Tomé and Príncipe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="BL">St. Barthélemy</option>
                        <option value="SH">St. Helena</option>
                        <option value="KN">St. Kitts and Nevis</option>
                        <option value="LC">St. Lucia</option>
                        <option value="MF">St. Martin</option>
                        <option value="PM">St. Pierre and Miquelon</option>
                        <option value="VC">St. Vincent and the Grenadines</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="UK">United Kingdom</option>
                        <option value="US" selected="">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VA">Vatican City</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.S.</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                     </select>
                     <br>
                     <div class="helppop" style="display: none;">
                        <div id="ctryhelp" class="helpctr"></div>
                     </div>
                  </div>
                  <div id="RegionContainer" class="row" style="display: block;">
                     <p id="iRegionError" class="error" style="display: none;"></p>
                     <label for="iRegion">State:</label>
                     <select id="iRegion" name="iRegion">
                        <option value="0" selected="">Select one</option>
                        <option value="1003">Alabama</option>
                        <option value="1040">Alaska</option>
                        <option value="1945">Arizona</option>
                        <option value="1951">Arkansas</option>
                        <option value="10595903">Armed Forces Asia</option>
                        <option value="10595904">Armed Forces Europe</option>
                        <option value="10595905">Armed Forces Pacific</option>
                        <option value="5599">California</option>
                        <option value="7636">Colorado</option>
                        <option value="7798">Connecticut</option>
                        <option value="8831">Delaware</option>
                        <option value="9130">District of Columbia</option>
                        <option value="11032">Florida</option>
                        <option value="12004">Georgia</option>
                        <option value="13656">Hawaii</option>
                        <option value="14713">Idaho</option>
                        <option value="14808">Illinois</option>
                        <option value="14882">Indiana</option>
                        <option value="14987">Iowa</option>
                        <option value="16121">Kansas</option>
                        <option value="16480">Kentucky</option>
                        <option value="19283">Louisiana</option>
                        <option value="19840">Maine</option>
                        <option value="20487">Maryland</option>
                        <option value="20543">Massachusetts</option>
                        <option value="21196">Michigan</option>
                        <option value="21412">Minnesota</option>
                        <option value="21502">Mississippi</option>
                        <option value="21512">Missouri</option>
                        <option value="21789">Montana</option>
                        <option value="22869">Nebraska</option>
                        <option value="23035">Nevada</option>
                        <option value="23097">New Hampshire</option>
                        <option value="23117">New Jersey</option>
                        <option value="23132">New Mexico</option>
                        <option value="23161">New York</option>
                        <option value="23611">North Carolina</option>
                        <option value="23624">North Dakota</option>
                        <option value="24230">Ohio</option>
                        <option value="24293">Oklahoma</option>
                        <option value="24561">Oregon</option>
                        <option value="25623">Pennsylvania</option>
                        <option value="27664">Rhode Island</option>
                        <option value="31410">South Carolina</option>
                        <option value="31418">South Dakota</option>
                        <option value="33025">Tennessee</option>
                        <option value="33145">Texas</option>
                        <option value="34626">Utah</option>
                        <option value="35022">Vermont</option>
                        <option value="35364">Virginia</option>
                        <option value="35841">Washington</option>
                        <option value="36208">West Virginia</option>
                        <option value="36684">Wisconsin</option>
                        <option value="36927">Wyoming</option>
                     </select>
                  </div>
                  <div id="PostalContainer" class="row" style="display: block;">
                     <p id="iZipCodeError" class="error" style="display: none;"></p>
                     <label for="iZipCode">ZIP code:</label><input type="text" id="iZipCode" name="iZipCode">
                  </div>
                  <div class="row">
                     <p id="profile_genderError" class="error" style="display: none">
                     </p>
                     <label>
                     Gender:</label>
                     <table id="radiotbl">
                        <tbody>
                           <tr>
                              <td>
                                 <label for="iGenderMale" class="radiolabel">
                                 <input type="radio" id="iGenderMale" class="radio" name="profile_gender" value="m" onfocus="SignUp.ShowHelp('hide');" onclick="SignUp.ShowHelp('hide');SignUp.ValidateField(this)">Male</label>
                              </td>
                              <td>
                                 <label for="iGenderFemale" class="radiolabel">
                                 <input type="radio" id="iGenderFemale" class="radio" name="profile_gender" value="f" onfocus="SignUp.ShowHelp('hide');" onclick="SignUp.ShowHelp('hide');SignUp.ValidateField(this)">Female</label>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="row">
                     <p id="iBirthYearError" class="error" style="display: none">
                     </p>
                     <label for="iBirthYear">
                     Birth year:</label>
                     <input id="iBirthYear" name="iBirthYear" class="inputhint" type="text" value="Example: 1990" onfocus="SignUp.HandleHintFocusOn(this,'AutoCSR_Questionnaire_Birthdate_HelpText',4);SignUp.ShowHelp('hide');" onblur="SignUp.HandleHintFocusOff(this,'AutoCSR_Questionnaire_Birthdate_HelpText',4);" onkeypress="return SignUp.OnlyNumbers(event)" onchange="SignUp.ValidateField(this)"><br>
                  </div>
               </div>
               <div class="helparea">
                <img src="<?php echo $builder->inline(); ?>" />
                <br>
                <input placeholder="Enter charaters that you see" class="inputhint" style="height: auto;" />
               </div>
               <div id="iOptinEmailContainer" class="row chkrdooption hide">
                  <table>
                     <tbody>
                        <tr>
                           <td>
                              <input type="checkbox" id="iOptinEmail" checked="true">
                           </td>
                           <td>
                              <label for="iOptinEmail">
                              Send me email with promotional offers and survey invitations from Windows Live, Bing, and MSN. (You can unsubscribe at any time.)</label>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="topbotrow">
                  <div class="bluebar">
                     &nbsp;
                  </div>
                  <div id="tou">
                     Clicking <strong>I accept</strong> means that you agree to the <a target="_new" href="https://web.archive.org/web/20110811024957/http://g.msn.com/0TO_/enus">Microsoft service agreement</a> and <a target="_new" href="https://web.archive.org/web/20110811024957/http://go.microsoft.com/fwlink/?LinkId=74170">privacy statement</a>.
                     <span id="iOptinEmailAgreement" class="">&nbsp;You also agree to receive email from Windows Live, Bing, and MSN with service updates, special offers, and survey invitations. You can unsubscribe at any time.</span>
                  </div>
                  <div id="createbuttons">
                     <button type="submit" title="I accept" onclick="SignUp.DoPost();return false;">
                     I accept</button>
                  </div>
                  <div id="creatingacct" class="hide">
                     <p>
                        <img width="16" height="16" alt="Working..." src="https://web.archive.org/web/20110811024957im_/https://secure.shared.live.com/L!DVM52K1-gpciK4meLeqQ/images/hig_progcircle_animated.gif">
                        Working...
                     </p>
                  </div>
               </div>
               <script type="text/javascript">
                  SignUp.FieldsOnPage = [[SignUp.Fields[FT.MN],SignUp.Fields[FT.PWD],SignUp.Fields[FT.ALT],SignUp.Fields[FT.SQ],SignUp.Fields[FT.SA],
                                        
                                          SignUp.Fields[FT.FNAME],SignUp.Fields[FT.LNAME],
                                        
                                          SignUp.Fields[FT.CTY],SignUp.Fields[FT.RGN],SignUp.Fields[FT.ZIP],SignUp.Fields[FT.GNDR],SignUp.Fields[FT.BY],
                                          SignUp.Fields[FT.HIP],SignUp.Fields[FT.EOI]]];
               </script>
            </form>
            <div id="m_wf" class="m_wfp">
               <table id="uxp_ftr_control" cellpadding="0" cellspacing="0">
                  <tbody>
                     <tr>
                        <td id="uxp_ftr_left">
                           <ul>
                              <li><span id="uxp_ftr_link_trademark">© 2011 Microsoft</span></li>
                              <li><a id="uxp_ftr_link_legal" target="_top" href="https://web.archive.org/web/20110811024957/http://g.msn.com/0TO_/enus">Terms</a></li>
                              <li><a id="uxp_ftr_link_privacy" target="_top" href="https://web.archive.org/web/20110811024957/http://go.microsoft.com/fwlink/?LinkId=74170">Privacy</a></li>
                              <li><a id="uxp_ftr_link_aboutads" target="_top" href="https://web.archive.org/web/20110811024957/http://g.msn.com/AIPRIV/en-us">About our ads</a></li>
                              <li><a id="uxp_ftr_link_advertise" target="_top" href="https://web.archive.org/web/20110811024957/http://g.live.com/9uxp9ad/adv-en-us??su=http://shared.live.com/Live.AccountManagement">Advertise</a></li>
                              <li><a id="uxp_ftr_link_developers" target="_top" href="https://web.archive.org/web/20110811024957/http://go.microsoft.com/fwlink/?LinkId=214291">Developers</a></li>
                           </ul>
                        </td>
                        <td id="uxp_ftr_right">
                           <table id="uxp_ftr_right_nest" cellpadding="0" cellspacing="0">
                              <tbody>
                                 <tr>
                                    <td>
                                       <ul>
                                          <li><a id="uxp_ftr_link_help" target="_blank" href="https://web.archive.org/web/20110811024957/http://explore.live.com/windows-live-account-help-center">Help Center</a></li>
                                          <li><a id="uxp_ftr_link_feedback" target="_top" href="https://web.archive.org/web/20110811024957/http://g.live.com/9uxp9en-us/ftr4">Feedback</a></li>
                                          <li><a id="uxp_ftr_link_language" target="_top" href="https://web.archive.org/web/20110811024957/https://home.live.com/options/language?ru=https%3a%2f%2fsignup.live.com%2fsignup.aspx%3flic%3d1&amp;mkt=en-US">English</a></li>
                                       </ul>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </body>
</html>
