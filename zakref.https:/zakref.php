/*
تم كتابه هذا الملف بواسطه المبرمج جاك جميع الحقوق محفوظه له
https://t.me/V_P_E
https://t.me/J_F_A_I
https://t.me/TH1BS
غير الحقوق تثبت فشلك 
نلاحظه اذا غيرت حقوقي سيتم توقف الملف عندك بشكل تلقائي .
اللهم حذرت اللهم فإشهد ♥
*/
<?php
ob_start();
$jackk0 ='1764819212:AAEd-zJNg46ePg7AWxfK8edPR0kLRDjhOAU'; /* توكنك */
define('API_KEY',$jackk0);
function bot($jackk1,$jackk2=[]){ $jackk3 = http_build_query($jackk2);  $jackk4 = "https://api.telegram.org/bot".API_KEY."/".$jackk1."?$jackk3";  $jackk5 = file_get_contents($jackk4);return json_decode($jackk5);}$jackk6 = json_decode(file_get_contents('php://input'));$jackk7 = $jackk6->message;$jackk8 = $jackk7->from->id;$jackk9 = $jackk7->message_id;$jackk10 = $jackk7->chat->id;$jackk11 = $jackk7->text;$jackk12     = $jackk6->data;
if(isset($jackk6->callback_query)){  $jackk11 = $jackk6->callback_query->message->text;  $jackk10 = $jackk6->callback_query->message->chat->id;  $jackk9 = $jackk6->callback_query->message->message_id;  $jackk12     = $jackk6->callback_query->data;$jackk8 = $jackk6->callback_query->message->from->id;}$api0 =file_get_contents("https://egy-jack.ml/api0.php");
if (isset($jackk7->text)) {
$jackk11 = $jackk7->text;
if ($jackk11 == "/start") {
bot("sendMessage", [
"chat_id" => $jackk10,
"text" => "اختر اللغه التي تريد الزخرفه لها .",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"عربي",'callback_data'=>"ar"],['text'=>"انجلش",'callback_data'=>"en"]],
]])]);
}
}
$log = file_get_contents("log_$jackk10.json");

if($jackk12 == "ar"){
file_put_contents("log_$jackk10.json","ar");
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- *اللغه العربيه*
ارسل ما تريد زخرفته .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
]);
}
if($jackk11 !="/start" && $log == "ar"){
file_put_contents("log_$jackk10.json","none");
$api1 = json_decode(file_get_contents("https://egy-jack.ml/api2.php?jack0=$jackk11"),true);
$b1 =$api1["jack2"];
$r0 = $api1["jack1"][0];
$r1 = $api1["jack1"][1];
$r2 = $api1["jack1"][2];
$r3 = $api1["jack1"][3];
$r4 = $api1["jack1"][4];
$r5 = $api1["jack1"][5];
$r6 = $api1["jack1"][6];
$r7 = $api1["jack1"][7];
$r8 = $api1["jack1"][8];
$r9 = $api1["jack1"][9];
$r10 = $api1["jack1"][10];
$r11 = $api1["jack1"][11];
$r12 = $api1["jack1"][12];
$r13 = $api1["jack1"][13];
$r14 = $api1["jack1"][14];
$r15 = $api1["jack1"][15];
$r16 = $api1["jack1"][16];
$r17 = $api1["jack1"][17];
$r18 = $api1["jack1"][18];
$r19 = $api1["jack1"][19];
$r20 = $api1["jack1"][20];
$r21 = $api1["jack1"][21];
$r22 = $api1["jack1"][22];
$r23 = $api1["jack1"][23];
$r24 = $api1["jack1"][24];
$r25 = $api1["jack1"][25];
$r26 = $api1["jack1"][26];
$r27 = $api1["jack1"][27];
$r28 = $api1["jack1"][28];
$r29 = $api1["jack1"][29];
$r30 = $api1["jack1"][30];
$r31 = $api1["jack1"][31];
$r32 = $api1["jack1"][32];
$r33 = $api1["jack1"][33];
$r34 = $api1["jack1"][34];
$r35 = $api1["jack1"][35];
$r36 = $api1["jack1"][36];
$r37 = $api1["jack1"][37];
$r38 = $api1["jack1"][38];
$r39 = $api1["jack1"][39];
$r40 = $api1["jack1"][40];
$r41 = $api1["jack1"][41];
$r42 = $api1["jack1"][42];
$r43 = $api1["jack1"][43];
$r44 = $api1["jack1"][44];
$r45 = $api1["jack1"][45];
$r46 = $api1["jack1"][46];
$r47 = $api1["jack1"][47];
$r48 = $api1["jack1"][48];
$r49 = $api1["jack1"][49];
$r50 = $api1["jack1"][50];
$r51 = $api1["jack1"][51];
bot("sendMessage", [
'chat_id'=>$jackk10, 
 'text'=>'❍ النص المطلوب زخرفته هو : *'.$b1.'*',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>$r0,'callback_data'=>"e0"],['text'=>$r1,'callback_data'=>"e1"]],
[['text'=>$r2,'callback_data'=>"e2"],['text'=>$r3,'callback_data'=>"e3"]],
[['text'=>$r4,'callback_data'=>"e4"],['text'=>$r5,'callback_data'=>"e5"]],
[['text'=>$r6,'callback_data'=>"e6"],['text'=>$r7,'callback_data'=>"e7"]],
[['text'=>$r8,'callback_data'=>"e8"],['text'=>$r9,'callback_data'=>"e9"]],
[['text'=>$r10,'callback_data'=>"e10"],['text'=>$r11,'callback_data'=>"e11"]],
[['text'=>$r12,'callback_data'=>"e12"],['text'=>$r13,'callback_data'=>"e13"]],
[['text'=>$r14,'callback_data'=>"e14"],['text'=>$r15,'callback_data'=>"e15"]],
[['text'=>$r16,'callback_data'=>"e16"],['text'=>$r17,'callback_data'=>"e17"]],
[['text'=>$r18,'callback_data'=>"e18"],['text'=>$r19,'callback_data'=>"e19"]],
[['text'=>$r20,'callback_data'=>"e20"],['text'=>$r21,'callback_data'=>"e21"]],
[['text'=>$r22,'callback_data'=>"e22"],['text'=>$r23,'callback_data'=>"e23"]],
[['text'=>$r24,'callback_data'=>"e24"],['text'=>$r25,'callback_data'=>"e25"]],
[['text'=>$r26,'callback_data'=>"e26"],['text'=>$r27,'callback_data'=>"e27"]],
[['text'=>$r28,'callback_data'=>"e28"],['text'=>$r29,'callback_data'=>"e29"]],
[['text'=>$r30,'callback_data'=>"e30"],['text'=>$r31,'callback_data'=>"e31"]],
[['text'=>$r32,'callback_data'=>"e32"],['text'=>$r33,'callback_data'=>"e33"]],
[['text'=>$r34,'callback_data'=>"e34"],['text'=>$r35,'callback_data'=>"e35"]],
[['text'=>$r36,'callback_data'=>"e36"],['text'=>$r37,'callback_data'=>"e37"]],
[['text'=>$r38,'callback_data'=>"e38"],['text'=>$r39,'callback_data'=>"e39"]],
[['text'=>$r40,'callback_data'=>"e40"],['text'=>$r41,'callback_data'=>"e41"]],
[['text'=>$r42,'callback_data'=>"e42"],['text'=>$r43,'callback_data'=>"e43"]],
[['text'=>$r44,'callback_data'=>"e44"],['text'=>$r45,'callback_data'=>"e45"]],
[['text'=>$r46,'callback_data'=>"e46"],['text'=>$r47,'callback_data'=>"e47"]],
[['text'=>$r48,'callback_data'=>"e48"],['text'=>$r49,'callback_data'=>"e49"]],
[['text'=>$r50,'callback_data'=>"e50"],['text'=>$r51,'callback_data'=>"e51"]],
]])]);file_put_contents("e0_$jackk10.json",$r0);file_put_contents("e1_$jackk10.json",$r1);file_put_contents("e2_$jackk10.json",$r2);file_put_contents("e3_$jackk10.json",$r3);file_put_contents("e4_$jackk10.json",$r4);file_put_contents("e5_$jackk10.json",$r5);file_put_contents("e6_$jackk10.json",$r6);file_put_contents("e7_$jackk10.json",$r7);file_put_contents("e8_$jackk10.json",$r8);file_put_contents("e9_$jackk10.json",$r9);file_put_contents("e10_$jackk10.json",$r10);file_put_contents("e11_$jackk10.json",$r11);file_put_contents("e12_$jackk10.json",$r12);file_put_contents("e13_$jackk10.json",$r13);file_put_contents("e14_$jackk10.json",$r14);file_put_contents("e15_$jackk10.json",$r15);file_put_contents("e16_$jackk10.json",$r16);file_put_contents("e17_$jackk10.json",$r17);file_put_contents("e18_$jackk10.json",$r18);file_put_contents("e19_$jackk10.json",$r19);file_put_contents("e20_$jackk10.json",$r20);file_put_contents("e21_$jackk10.json",$r21);file_put_contents("e22_$jackk10.json",$r22);file_put_contents("e23_$jackk10.json",$r23);file_put_contents("e24_$jackk10.json",$r24);file_put_contents("e25_$jackk10.json",$r25);file_put_contents("e26_$jackk10.json",$r26);file_put_contents("e27_$jackk10.json",$r27);file_put_contents("e28_$jackk10.json",$r28);file_put_contents("e29_$jackk10.json",$r29);file_put_contents("e30_$jackk10.json",$r30);file_put_contents("e31_$jackk10.json",$r31);file_put_contents("e32_$jackk10.json",$r32);file_put_contents("e33_$jackk10.json",$r33);file_put_contents("e34_$jackk10.json",$r34);file_put_contents("e35_$jackk10.json",$r35);file_put_contents("e36_$jackk10.json",$r36);file_put_contents("e37_$jackk10.json",$r37);file_put_contents("e38_$jackk10.json",$r38);file_put_contents("e39_$jackk10.json",$r39);file_put_contents("e40_$jackk10.json",$r40);file_put_contents("e41_$jackk10.json",$r41);file_put_contents("e42_$jackk10.json",$r42);file_put_contents("e43_$jackk10.json",$r43);file_put_contents("e44_$jackk10.json",$r44);file_put_contents("e45_$jackk10.json",$r45);file_put_contents("e46_$jackk10.json",$r46);file_put_contents("e47_$jackk10.json",$r47);file_put_contents("e48_$jackk10.json",$r48);file_put_contents("e49_$jackk10.json",$r49);file_put_contents("e50_$jackk10.json",$r50);file_put_contents("e51_$jackk10.json",$r51);}
$e0 = file_get_contents("e0_$jackk10.json");$e1 = file_get_contents("e1_$jackk10.json");$e2 = file_get_contents("e2_$jackk10.json");$e3 = file_get_contents("e3_$jackk10.json");$e4 = file_get_contents("e4_$jackk10.json");$e5 = file_get_contents("e5_$jackk10.json");$e6 = file_get_contents("e6_$jackk10.json");$e7 = file_get_contents("e7_$jackk10.json");$e8 = file_get_contents("e8_$jackk10.json");$e9 = file_get_contents("e9_$jackk10.json");$e10 = file_get_contents("e10_$jackk10.json");$e11 = file_get_contents("e11_$jackk10.json");$e12 = file_get_contents("e12_$jackk10.json");$e13 = file_get_contents("e13_$jackk10.json");$e14 = file_get_contents("e14_$jackk10.json");$e15 = file_get_contents("e15_$jackk10.json");$e16 = file_get_contents("e16_$jackk10.json");$e17 = file_get_contents("e17_$jackk10.json");$e18 = file_get_contents("e18_$jackk10.json");$e19 = file_get_contents("e19_$jackk10.json");$e20 = file_get_contents("e20_$jackk10.json");$e21 = file_get_contents("e21_$jackk10.json");$e22 = file_get_contents("e22_$jackk10.json");$e23 = file_get_contents("e23_$jackk10.json");$e24 = file_get_contents("e24_$jackk10.json");$e25 = file_get_contents("e25_$jackk10.json");$e26 = file_get_contents("e26_$jackk10.json");$e27 = file_get_contents("e27_$jackk10.json");$e28 = file_get_contents("e28_$jackk10.json");$e29 = file_get_contents("e29_$jackk10.json");$e30 = file_get_contents("e30_$jackk10.json");$e31 = file_get_contents("e31_$jackk10.json");$e32 = file_get_contents("e32_$jackk10.json");$e33 = file_get_contents("e33_$jackk10.json");$e34 = file_get_contents("e34_$jackk10.json");$e35 = file_get_contents("e35_$jackk10.json");$e36 = file_get_contents("e36_$jackk10.json");$e37 = file_get_contents("e37_$jackk10.json");$e38 = file_get_contents("e38_$jackk10.json");$e39 = file_get_contents("e39_$jackk10.json");$e40 = file_get_contents("e40_$jackk10.json");$e41 = file_get_contents("e41_$jackk10.json");$e42 = file_get_contents("e42_$jackk10.json");$e43 = file_get_contents("e43_$jackk10.json");$e44 = file_get_contents("e44_$jackk10.json");$e45 = file_get_contents("e45_$jackk10.json");$e46 = file_get_contents("e46_$jackk10.json");$e47 = file_get_contents("e47_$jackk10.json");$e48 = file_get_contents("e48_$jackk10.json");$e49 = file_get_contents("e49_$jackk10.json");$e50 = file_get_contents("e50_$jackk10.json");$e51 = file_get_contents("e51_$jackk10.json");
if($jackk12 == "e0"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e0` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess0"]],
]])]);
}
if($jackk12 == "yess0"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e0$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess0"]],
]])]);}
if($jackk12 == "e1"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e1` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess1"]],
]])]);
}
if($jackk12 == "yess1"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e1$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess1"]],
]])]);}

if($jackk12 == "e2"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e2` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess2"]],
]])]);
}
if($jackk12 == "yess2"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e2$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess2"]],
]])]);}

if($jackk12 == "e3"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e3` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess3"]],
]])]);
}
if($jackk12 == "yess3"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e3$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess3"]],
]])]);}

if($jackk12 == "e4"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e4` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess4"]],
]])]);
}
if($jackk12 == "yess4"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e4$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess4"]],
]])]);}

if($jackk12 == "e5"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e5` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess5"]],
]])]);
}
if($jackk12 == "yess5"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e5$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess5"]],
]])]);}

if($jackk12 == "e6"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e6` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess6"]],
]])]);
}
if($jackk12 == "yess6"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e6$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess6"]],
]])]);}

if($jackk12 == "e7"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e7` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess7"]],
]])]);
}
if($jackk12 == "yess7"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e7$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess7"]],
]])]);}

if($jackk12 == "e8"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e8` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess8"]],
]])]);
}
if($jackk12 == "yess8"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e8$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess8"]],
]])]);}

if($jackk12 == "e9"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e9` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess9"]],
]])]);
}
if($jackk12 == "yess9"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e9$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess9"]],
]])]);}

if($jackk12 == "e10"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e10` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess10"]],
]])]);
}
if($jackk12 == "yess10"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e10$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess10"]],
]])]);}

if($jackk12 == "e11"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e11` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess11"]],
]])]);
}
if($jackk12 == "yess11"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e11$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess11"]],
]])]);}

if($jackk12 == "e12"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e12` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess12"]],
]])]);
}
if($jackk12 == "yess12"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e12$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess12"]],
]])]);}

if($jackk12 == "e13"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e13` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess13"]],
]])]);
}
if($jackk12 == "yess13"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e13$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess13"]],
]])]);}

if($jackk12 == "e14"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e14` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess14"]],
]])]);
}
if($jackk12 == "yess14"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e14$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess14"]],
]])]);}

if($jackk12 == "e15"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e15` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess15"]],
]])]);
}
if($jackk12 == "yess15"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e15$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess15"]],
]])]);}

if($jackk12 == "e16"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e16` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess16"]],
]])]);
}
if($jackk12 == "yess16"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e16$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess16"]],
]])]);}

if($jackk12 == "e17"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e17` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess17"]],
]])]);
}
if($jackk12 == "yess17"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e17$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess17"]],
]])]);}

if($jackk12 == "e18"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e18` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess18"]],
]])]);
}
if($jackk12 == "yess18"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e18$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess18"]],
]])]);}

if($jackk12 == "e19"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e19` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess19"]],
]])]);
}
if($jackk12 == "yess19"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e19$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess19"]],
]])]);}

if($jackk12 == "e20"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e20` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess20"]],
]])]);
}
if($jackk12 == "yess20"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e20$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess20"]],
]])]);}

if($jackk12 == "e21"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e21` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess21"]],
]])]);
}
if($jackk12 == "yess21"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e21$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess21"]],
]])]);}

if($jackk12 == "e22"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e22` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess22"]],
]])]);
}
if($jackk12 == "yess22"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e22$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess22"]],
]])]);}

if($jackk12 == "e23"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e23` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess23"]],
]])]);
}
if($jackk12 == "yess23"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e23$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess23"]],
]])]);}

if($jackk12 == "e24"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e24` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess24"]],
]])]);
}
if($jackk12 == "yess24"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e24$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess24"]],
]])]);}

if($jackk12 == "e25"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e25` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess25"]],
]])]);
}
if($jackk12 == "yess25"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e25$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess25"]],
]])]);}

if($jackk12 == "e26"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e26` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess26"]],
]])]);
}
if($jackk12 == "yess26"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e26$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess26"]],
]])]);}






if($jackk12 == "e27"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e27` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess27"]],
]])]);
}
if($jackk12 == "yess27"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e27$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess27"]],
]])]);}

if($jackk12 == "e28"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e28` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess28"]],
]])]);
}
if($jackk12 == "yess28"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e28$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess28"]],
]])]);}

if($jackk12 == "e29"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e29` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess29"]],
]])]);
}
if($jackk12 == "yess29"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e29$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess29"]],
]])]);}

if($jackk12 == "e30"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e30` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess30"]],
]])]);
}
if($jackk12 == "yess30"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e30$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess30"]],
]])]);}

if($jackk12 == "e31"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e31` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess31"]],
]])]);
}
if($jackk12 == "yess31"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e31$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess31"]],
]])]);}

if($jackk12 == "e32"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e32` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess32"]],
]])]);
}
if($jackk12 == "yess32"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e32$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess32"]],
]])]);}



if($jackk12 == "e33"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e33` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess33"]],
]])]);
}
if($jackk12 == "yess33"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e33$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess33"]],
]])]);}

if($jackk12 == "e34"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e34` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess34"]],
]])]);
}
if($jackk12 == "yess34"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e34$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess34"]],
]])]);}

if($jackk12 == "e35"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e35` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess35"]],
]])]);
}
if($jackk12 == "yess35"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e35$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess35"]],
]])]);}

if($jackk12 == "e36"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e36` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess36"]],
]])]);
}
if($jackk12 == "yess36"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e36$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess36"]],
]])]);}

if($jackk12 == "e37"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e37` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess37"]],
]])]);
}
if($jackk12 == "yess37"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e37$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess37"]],
]])]);}

if($jackk12 == "e38"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e38` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess38"]],
]])]);
}
if($jackk12 == "yess38"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e38$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess38"]],
]])]);}

if($jackk12 == "e39"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e39` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess39"]],
]])]);
}
if($jackk12 == "yess39"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e39$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess39"]],
]])]);}

if($jackk12 == "e40"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e40` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess40"]],
]])]);
}
if($jackk12 == "yess40"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e40$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess40"]],
]])]);}

if($jackk12 == "e41"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e41` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess41"]],
]])]);
}
if($jackk12 == "yess41"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e41$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess41"]],
]])]);}

if($jackk12 == "e42"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e42` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess42"]],
]])]);
}
if($jackk12 == "yess42"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e16$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess16"]],
]])]);}

if($jackk12 == "e43"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e43` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess43"]],
]])]);
}
if($jackk12 == "yess43"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e43$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess43"]],
]])]);}

if($jackk12 == "e44"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e44` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess44"]],
]])]);
}
if($jackk12 == "yess44"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e44$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess44"]],
]])]);}

if($jackk12 == "e45"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e45` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess45"]],
]])]);
}
if($jackk12 == "yess45"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e45$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess45"]],
]])]);}

if($jackk12 == "e46"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e46` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess46"]],
]])]);
}
if($jackk12 == "yess46"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e46$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess46"]],
]])]);}

if($jackk12 == "e47"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e47` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess47"]],
]])]);
}
if($jackk12 == "yess47"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e47$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess47"]],
]])]);}

if($jackk12 == "e48"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e48` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess48"]],
]])]);
}
if($jackk12 == "yess48"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e48$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess48"]],
]])]);}

if($jackk12 == "e49"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e49` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess49"]],
]])]);
}
if($jackk12 == "yess49"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e49$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess49"]],
]])]);}

if($jackk12 == "e50"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e50` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess50"]],
]])]);
}
if($jackk12 == "yess50"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e50$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess50"]],
]])]);}

if($jackk12 == "e51"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$e51` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yess51"]],
]])]);
}
if($jackk12 == "yess51"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$e51$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yess51"]],
]])]);}

if($jackk12 == "en"){
file_put_contents("log_$jackk10.json","en");
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- *اللغه الانجليزيه*
ارسل ما تريد زخرفته .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
]);
}
if($jackk11 !="/start" && $log == "en"){
file_put_contents("log_$jackk10.json","none");
$api1 = json_decode(file_get_contents("https://egy-jack.ml/api3.php?jack0=$jackk11"),true);
$b0 =$api1["jack2"];
$a0 = $api1["jack1"][0];
$a1 = $api1["jack1"][1];
$a2 = $api1["jack1"][2];
$a3 = $api1["jack1"][3];
$a4 = $api1["jack1"][4];
$a5 = $api1["jack1"][5];
$a6 = $api1["jack1"][6];
$a7 = $api1["jack1"][7];
$a8 = $api1["jack1"][8];
$a9 = $api1["jack1"][9];
$a10 = $api1["jack1"][10];
$a11 = $api1["jack1"][11];
$a12 = $api1["jack1"][12];
$a13 = $api1["jack1"][13];
$a14 = $api1["jack1"][14];
$a15 = $api1["jack1"][15];
$a16 = $api1["jack1"][16];
$a17 = $api1["jack1"][17];
$a18 = $api1["jack1"][18];
$a19 = $api1["jack1"][19];
$a20 = $api1["jack1"][20];
$a21 = $api1["jack1"][21];
$a22 = $api1["jack1"][22];
$a23 = $api1["jack1"][23];
$a24 = $api1["jack1"][24];
$a25 = $api1["jack1"][25];
$a26 = $api1["jack1"][26];
$a27 = $api1["jack1"][27];
$a28 = $api1["jack1"][28];
$a29 = $api1["jack1"][29];
$a30 = $api1["jack1"][30];
$a31 = $api1["jack1"][31];
$a32 = $api1["jack1"][32];
$a33 = $api1["jack1"][33];
$a34 = $api1["jack1"][34];
$a35 = $api1["jack1"][35];
$a36 = $api1["jack1"][36];
$a37 = $api1["jack1"][37];
$a38 = $api1["jack1"][38];
$a39 = $api1["jack1"][39];
$a40 = $api1["jack1"][40];
$a41 = $api1["jack1"][41];
$a42 = $api1["jack1"][42];
$a43 = $api1["jack1"][43];
$a44 = $api1["jack1"][44];
$a45 = $api1["jack1"][45];
$a46 = $api1["jack1"][46];
$a47 = $api1["jack1"][47];
$a48 = $api1["jack1"][48];
$a49 = $api1["jack1"][49];
$a50 = $api1["jack1"][50];
$a51 = $api1["jack1"][51];
$a52 = $api1["jack1"][52];
$a53 = $api1["jack1"][53];
bot("sendMessage", [
'chat_id'=>$jackk10, 
 'text'=>'❍ النص المطلوب زخرفته هو : *'.$b0.'*',
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>$a0,'callback_data'=>"a0"],['text'=>$a1,'callback_data'=>"a1"]],
[['text'=>$a2,'callback_data'=>"a2"],['text'=>$a3,'callback_data'=>"a3"]],
[['text'=>$a4,'callback_data'=>"a4"],['text'=>$a5,'callback_data'=>"a5"]],
[['text'=>$a6,'callback_data'=>"a6"],['text'=>$a7,'callback_data'=>"a7"]],
[['text'=>$a8,'callback_data'=>"a8"],['text'=>$a9,'callback_data'=>"a9"]],
[['text'=>$a10,'callback_data'=>"a10"],['text'=>$a11,'callback_data'=>"a11"]],
[['text'=>$a12,'callback_data'=>"a12"],['text'=>$a13,'callback_data'=>"a13"]],
[['text'=>$a14,'callback_data'=>"a14"],['text'=>$a15,'callback_data'=>"a15"]],
[['text'=>$a16,'callback_data'=>"a16"],['text'=>$a17,'callback_data'=>"a17"]],
[['text'=>$a18,'callback_data'=>"a18"],['text'=>$a19,'callback_data'=>"a19"]],
[['text'=>$a20,'callback_data'=>"a20"],['text'=>$a21,'callback_data'=>"a21"]],
[['text'=>$a22,'callback_data'=>"a22"],['text'=>$a23,'callback_data'=>"a23"]],
[['text'=>$a24,'callback_data'=>"a24"],['text'=>$a25,'callback_data'=>"a25"]],
[['text'=>$a26,'callback_data'=>"a26"],['text'=>$a27,'callback_data'=>"a27"]],
[['text'=>$a28,'callback_data'=>"a28"],['text'=>$a29,'callback_data'=>"a29"]],
[['text'=>$a30,'callback_data'=>"a30"],['text'=>$a31,'callback_data'=>"a31"]],
[['text'=>$a32,'callback_data'=>"a32"],['text'=>$a33,'callback_data'=>"a33"]],
[['text'=>$a34,'callback_data'=>"a34"],['text'=>$a35,'callback_data'=>"a35"]],
[['text'=>$a36,'callback_data'=>"a36"],['text'=>$a37,'callback_data'=>"a37"]],
[['text'=>$a38,'callback_data'=>"a38"],['text'=>$a39,'callback_data'=>"a39"]],
[['text'=>$a40,'callback_data'=>"a40"],['text'=>$a41,'callback_data'=>"a41"]],
[['text'=>$a42,'callback_data'=>"a42"],['text'=>$a43,'callback_data'=>"a43"]],
[['text'=>$a44,'callback_data'=>"a44"],['text'=>$a45,'callback_data'=>"a45"]],
[['text'=>$a46,'callback_data'=>"a46"],['text'=>$a47,'callback_data'=>"a47"]],
[['text'=>$a48,'callback_data'=>"a48"],['text'=>$a49,'callback_data'=>"a49"]],
[['text'=>$a50,'callback_data'=>"a50"],['text'=>$a51,'callback_data'=>"a51"]],
[['text'=>$a52,'callback_data'=>"a52"],['text'=>$a53,'callback_data'=>"a53"]],
]])]);
file_put_contents("a0_$jackk10.json",$a0);
file_put_contents("a1_$jackk10.json",$a1);
file_put_contents("a2_$jackk10.json",$a2);
file_put_contents("a3_$jackk10.json",$a3);
file_put_contents("a4_$jackk10.json",$a4);
file_put_contents("a5_$jackk10.json",$a5);
file_put_contents("a6_$jackk10.json",$a6);
file_put_contents("a7_$jackk10.json",$a7);
file_put_contents("a8_$jackk10.json",$a8);
file_put_contents("a9_$jackk10.json",$a9);
file_put_contents("a10_$jackk10.json",$a10);
file_put_contents("a11_$jackk10.json",$a11);
file_put_contents("a12_$jackk10.json",$a12);
file_put_contents("a13_$jackk10.json",$a13);
file_put_contents("a14_$jackk10.json",$a14);
file_put_contents("a15_$jackk10.json",$a15);
file_put_contents("a16_$jackk10.json",$a16);
file_put_contents("a17_$jackk10.json",$a17);
file_put_contents("a18_$jackk10.json",$a18);
file_put_contents("a19_$jackk10.json",$a19);
file_put_contents("a20_$jackk10.json",$a20);
file_put_contents("a21_$jackk10.json",$a21);
file_put_contents("a22_$jackk10.json",$a22);
file_put_contents("a23_$jackk10.json",$a23);
file_put_contents("a24_$jackk10.json",$a24);
file_put_contents("a25_$jackk10.json",$a25);
file_put_contents("a26_$jackk10.json",$a26);
file_put_contents("a27_$jackk10.json",$a27);
file_put_contents("a28_$jackk10.json",$a28);
file_put_contents("a29_$jackk10.json",$a29);
file_put_contents("a30_$jackk10.json",$a30);
file_put_contents("a31_$jackk10.json",$a31);
file_put_contents("a32_$jackk10.json",$a32);
file_put_contents("a33_$jackk10.json",$a33);
file_put_contents("a34_$jackk10.json",$a34);
file_put_contents("a35_$jackk10.json",$a35);
file_put_contents("a36_$jackk10.json",$a36);
file_put_contents("a37_$jackk10.json",$a37);
file_put_contents("a38_$jackk10.json",$a38);
file_put_contents("a39_$jackk10.json",$a39);
file_put_contents("a40_$jackk10.json",$a40);
file_put_contents("a41_$jackk10.json",$a41);
file_put_contents("a42_$jackk10.json",$a42);
file_put_contents("a43_$jackk10.json",$a43);
file_put_contents("a44_$jackk10.json",$a44);
file_put_contents("a45_$jackk10.json",$a45);
file_put_contents("a46_$jackk10.json",$a46);
file_put_contents("a47_$jackk10.json",$a47);
file_put_contents("a48_$jackk10.json",$a48);
file_put_contents("a49_$jackk10.json",$a49);
file_put_contents("a50_$jackk10.json",$a50);
file_put_contents("a51_$jackk10.json",$a51);
file_put_contents("a52_$jackk10.json",$a52);
file_put_contents("a53_$jackk10.json",$a53);
}

$c0 = file_get_contents("a0_$jackk10.json");
$c1 = file_get_contents("a1_$jackk10.json");
$c2 = file_get_contents("a2_$jackk10.json");
$c3 = file_get_contents("a3_$jackk10.json");
$c4 = file_get_contents("a4_$jackk10.json");
$c5 = file_get_contents("a5_$jackk10.json");
$c6 = file_get_contents("a6_$jackk10.json");
$c7 = file_get_contents("a7_$jackk10.json");
$c8 = file_get_contents("a8_$jackk10.json");
$c9 = file_get_contents("a9_$jackk10.json");
$c10 = file_get_contents("a10_$jackk10.json");
$c11 = file_get_contents("a11_$jackk10.json");
$c12 = file_get_contents("a12_$jackk10.json");
$c13 = file_get_contents("a13_$jackk10.json");
$c14 = file_get_contents("a14_$jackk10.json");
$c15 = file_get_contents("a15_$jackk10.json");
$c16 = file_get_contents("a16_$jackk10.json");
$c17 = file_get_contents("a17_$jackk10.json");
$c18 = file_get_contents("a18_$jackk10.json");
$c19 = file_get_contents("a19_$jackk10.json");
$c20 = file_get_contents("a20_$jackk10.json");
$c21 = file_get_contents("a21_$jackk10.json");
$c22 = file_get_contents("a22_$jackk10.json");
$c23 = file_get_contents("a23_$jackk10.json");
$c24 = file_get_contents("a24_$jackk10.json");
$c25 = file_get_contents("a25_$jackk10.json");
$c26 = file_get_contents("a26_$jackk10.json");
$c27 = file_get_contents("a27_$jackk10.json");
$c28 = file_get_contents("a28_$jackk10.json");
$c29 = file_get_contents("a29_$jackk10.json");
$c30 = file_get_contents("a30_$jackk10.json");
$c31 = file_get_contents("a31_$jackk10.json");
$c32 = file_get_contents("a32_$jackk10.json");
$c33 = file_get_contents("a33_$jackk10.json");
$c34 = file_get_contents("a34_$jackk10.json");
$c35 = file_get_contents("a35_$jackk10.json");
$c36 = file_get_contents("a36_$jackk10.json");
$c37 = file_get_contents("a37_$jackk10.json");
$c38 = file_get_contents("a38_$jackk10.json");
$c39 = file_get_contents("a39_$jackk10.json");
$c40 = file_get_contents("a40_$jackk10.json");
$c41 = file_get_contents("a41_$jackk10.json");
$c42 = file_get_contents("a42_$jackk10.json");
$c43 = file_get_contents("a43_$jackk10.json");
$c44 = file_get_contents("a44_$jackk10.json");
$c45 = file_get_contents("a45_$jackk10.json");
$c46 = file_get_contents("a46_$jackk10.json");
$c47 = file_get_contents("a47_$jackk10.json");
$c48 = file_get_contents("a48_$jackk10.json");
$c49 = file_get_contents("a49_$jackk10.json");
$c50 = file_get_contents("a50_$jackk10.json");
$c51 = file_get_contents("a51_$jackk10.json");
$c52 = file_get_contents("a52_$jackk10.json");
$c53 = file_get_contents("a53_$jackk10.json");
if($jackk12 == "a0"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c0` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes0"]],
]])]);
}
if($jackk12 == "yes0"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c0$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes0"]],
]])]);}
if($jackk12 == "a1"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c1` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes1"]],
]])]);
}
if($jackk12 == "yes1"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c1$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes1"]],
]])]);}

if($jackk12 == "a2"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c2` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes2"]],
]])]);
}
if($jackk12 == "yes2"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c2$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes2"]],
]])]);}

if($jackk12 == "a3"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c3` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes3"]],
]])]);
}
if($jackk12 == "yes3"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c3$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes3"]],
]])]);}

if($jackk12 == "a4"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c4` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes4"]],
]])]);
}
if($jackk12 == "yes4"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c4$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes4"]],
]])]);}

if($jackk12 == "a5"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c5` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes5"]],
]])]);
}
if($jackk12 == "yes5"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c5$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes5"]],
]])]);}

if($jackk12 == "a6"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c6` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes6"]],
]])]);
}
if($jackk12 == "yes6"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c6$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes6"]],
]])]);}

if($jackk12 == "a7"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c7` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes7"]],
]])]);
}
if($jackk12 == "yes7"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c7$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes7"]],
]])]);}

if($jackk12 == "a8"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c8` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes8"]],
]])]);
}
if($jackk12 == "yes8"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c8$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes8"]],
]])]);}

if($jackk12 == "a9"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c9` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes9"]],
]])]);
}
if($jackk12 == "yes9"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c9$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes9"]],
]])]);}

if($jackk12 == "a10"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c10` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes10"]],
]])]);
}
if($jackk12 == "yes10"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c10$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes10"]],
]])]);}

if($jackk12 == "a11"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c11` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes11"]],
]])]);
}
if($jackk12 == "yes11"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c11$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes11"]],
]])]);}

if($jackk12 == "a12"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c12` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes12"]],
]])]);
}
if($jackk12 == "yes12"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c12$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes12"]],
]])]);}

if($jackk12 == "a13"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c13` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes13"]],
]])]);
}
if($jackk12 == "yes13"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c13$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes13"]],
]])]);}

if($jackk12 == "a14"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c14` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes14"]],
]])]);
}
if($jackk12 == "yes14"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c14$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes14"]],
]])]);}

if($jackk12 == "a15"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c15` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes15"]],
]])]);
}
if($jackk12 == "yes15"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c15$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes15"]],
]])]);}

if($jackk12 == "a16"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c16` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes16"]],
]])]);
}
if($jackk12 == "yes16"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c16$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes16"]],
]])]);}

if($jackk12 == "a17"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c17` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes17"]],
]])]);
}
if($jackk12 == "yes17"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c17$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes17"]],
]])]);}

if($jackk12 == "a18"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c18` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes18"]],
]])]);
}
if($jackk12 == "yes18"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c18$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes18"]],
]])]);}

if($jackk12 == "a19"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c19` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes19"]],
]])]);
}
if($jackk12 == "yes19"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c19$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes19"]],
]])]);}

if($jackk12 == "a20"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c20` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes20"]],
]])]);
}
if($jackk12 == "yes20"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c20$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes20"]],
]])]);}

if($jackk12 == "a21"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c21` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes21"]],
]])]);
}
if($jackk12 == "yes21"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c21$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes21"]],
]])]);}

if($jackk12 == "a22"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c22` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes22"]],
]])]);
}
if($jackk12 == "yes22"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c22$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes22"]],
]])]);}

if($jackk12 == "a23"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c23` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes23"]],
]])]);
}
if($jackk12 == "yes23"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c23$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes23"]],
]])]);}

if($jackk12 == "a24"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c24` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes24"]],
]])]);
}
if($jackk12 == "yes24"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c24$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes24"]],
]])]);}

if($jackk12 == "a25"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c25` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes25"]],
]])]);
}
if($jackk12 == "yes25"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c25$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes25"]],
]])]);}

if($jackk12 == "a26"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c26` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes26"]],
]])]);
}
if($jackk12 == "yes26"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c26$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes26"]],
]])]);}






if($jackk12 == "a27"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c27` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes27"]],
]])]);
}
if($jackk12 == "yes27"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c27$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes27"]],
]])]);}

if($jackk12 == "a28"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c28` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes28"]],
]])]);
}
if($jackk12 == "yes28"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c28$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes28"]],
]])]);}

if($jackk12 == "a29"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c29` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes29"]],
]])]);
}
if($jackk12 == "yes29"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c29$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes29"]],
]])]);}

if($jackk12 == "a30"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c30` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes30"]],
]])]);
}
if($jackk12 == "yes30"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c30$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes30"]],
]])]);}

if($jackk12 == "a31"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c31` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes31"]],
]])]);
}
if($jackk12 == "yes31"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c31$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes31"]],
]])]);}

if($jackk12 == "a32"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c32` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes32"]],
]])]);
}
if($jackk12 == "yes32"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c32$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes32"]],
]])]);}



if($jackk12 == "a33"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c33` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes33"]],
]])]);
}
if($jackk12 == "yes33"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c33$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes33"]],
]])]);}

if($jackk12 == "a34"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c34` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes34"]],
]])]);
}
if($jackk12 == "yes34"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c34$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes34"]],
]])]);}

if($jackk12 == "a35"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c35` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes35"]],
]])]);
}
if($jackk12 == "yes35"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c35$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes35"]],
]])]);}

if($jackk12 == "a36"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c36` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes36"]],
]])]);
}
if($jackk12 == "yes36"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c36$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes36"]],
]])]);}

if($jackk12 == "a37"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c37` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes37"]],
]])]);
}
if($jackk12 == "yes37"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c37$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes37"]],
]])]);}

if($jackk12 == "a38"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c38` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes38"]],
]])]);
}
if($jackk12 == "yes38"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c38$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes38"]],
]])]);}

if($jackk12 == "a39"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c39` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes39"]],
]])]);
}
if($jackk12 == "yes39"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c39$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes39"]],
]])]);}

if($jackk12 == "a40"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c40` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes40"]],
]])]);
}
if($jackk12 == "yes40"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c40$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes40"]],
]])]);}

if($jackk12 == "a41"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c41` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes41"]],
]])]);
}
if($jackk12 == "yes41"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c41$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes41"]],
]])]);}

if($jackk12 == "a42"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c42` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes42"]],
]])]);
}
if($jackk12 == "yes42"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c16$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes16"]],
]])]);}

if($jackk12 == "a43"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c43` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes43"]],
]])]);
}
if($jackk12 == "yes43"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c43$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes43"]],
]])]);}

if($jackk12 == "a44"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c44` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes44"]],
]])]);
}
if($jackk12 == "yes44"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c44$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes44"]],
]])]);}

if($jackk12 == "a45"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c45` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes45"]],
]])]);
}
if($jackk12 == "yes45"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c45$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes45"]],
]])]);}

if($jackk12 == "a46"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c46` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes46"]],
]])]);
}
if($jackk12 == "yes46"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c46$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes46"]],
]])]);}

if($jackk12 == "a47"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c47` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes47"]],
]])]);
}
if($jackk12 == "yes47"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c47$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes47"]],
]])]);}

if($jackk12 == "a48"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c48` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes48"]],
]])]);
}
if($jackk12 == "yes48"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c48$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes48"]],
]])]);}

if($jackk12 == "a49"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c49` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes49"]],
]])]);
}
if($jackk12 == "yes49"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c49$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes49"]],
]])]);}

if($jackk12 == "a50"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c50` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes50"]],
]])]);
}
if($jackk12 == "yes50"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c50$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes50"]],
]])]);}

if($jackk12 == "a51"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c51` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes51"]],
]])]);
}
if($jackk12 == "yes51"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c51$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes51"]],
]])]);}

if($jackk12 == "a52"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c52` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes52"]],
]])]);
}
if($jackk12 == "yes52"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c52$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes52"]],
]])]);}





if($jackk12 == "a53"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c53` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes53"]],
]])]);
}
if($jackk12 == "yes53"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ تم وضع رمز اخر اضغط للنسخ
 `$api0$c53$api0`",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"رمز اخر",'callback_data'=>"yes53"]],
]])]);}

if($jackk12 == "a54"){
bot('editmessagetext',[
'chat_id'=>$jackk10,
'message_id'=>$jackk9,
'text'=>"❍ لقد اخترت 
- `$c54` 
❍ اذا كنت تريد وضع رموز عليها اضغط علي زر *نعم* .
",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"نعم",'callback_data'=>"yes54"]],
]])]);
}
/*
تم كتابه هذا الملف بواسطه المبرمج جاك جميع الحقوق محفوظه له
https://t.me/V_P_E
https://t.me/J_F_A_I
https://t.me/TH1BS
غير الحقوق تثبت فشلك 
نلاحظه اذا غيرت حقوقي سيتم توقف الملف عندك بشكل تلقائي .
اللهم حذرت اللهم فإشهد ♥
*/