<?php
ob_start();
$token ='5409376675:AAF2MLOPAF-uJ_ZChipkAuU-RMeOV7cOaCc'; /* 5409376675:AAF2MLOPAF-uJ_ZChipkAuU-RMeOV7cOaCc */
define('API_KEY',$token);
function bot($method,$datas=[]){ $ALI = http_build_query($datas); $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ALI"; $xtxtk = file_get_contents($url);
return json_decode($xtxtk);}
$update = json_decode(file_get_contents('php://input')); $message = $update->message; $id = $message->from->id; $chat_id = $message->chat->id; $from_id = $message->from->id; $text = $message->text; $namee = $update->callback_query->from->first_name; $user = $message->from->username; $nameee = $message->from->first_name ?? $update->callback_query->from->first_name; $nameee2 = $message->from->last_name ?? $update->callback_query->from->last_name; $chat_id = $update->callback_query->message->chat->id; $user = $update->callback_query->from->username; $message = $update->message; $id = $message->from->id; $chat_id = $message->chat->id; $from_id = $message->from->id; $new = $message->new_chat_member; $left= $update->message->left_chat_member; $text = $message->text; $video      = $update->message->video; $photo      = $update->message->photo; $voice      = $update->message->voice; $caption = $message->text; $type= $update->message->chat->type; $namee = $update->callback_query->from->first_name; $user = $message->from->username; $onstart = file_get_contents("onstart.txt"); $from_id = $message->from->id; $admin = "1965297568"; $jaack = "@"; $jacku = "𝑼𝑺𝑬𝑹 : "; $jackn = "𝑵𝑺𝑴𝑬 : "; $sub=substr($name,0,10).""; $user = $update->message->from->username; $user = $message->from->username; $user = $update->callback_query->from->username; $MoHaMMedd = count($groups)-1; $memberscount = count($members); $members = explode("\n",file_get_contents("members.txt")); $date = date('h:i:s'); $d = date('A'); $a =preg_replace('/AM/', 'ص', $d);$a =preg_replace('/PM/', 'م', $d); date_default_timezone_set('Africa/Cairo'); $time = date('h:i:a'); $year = date('Y'); $month = date('n'); $day = date('j'); $user= $update->message->from->username;
if(isset($update->callback_query)){ $chat_id = $update->callback_query->message->chat->id; $message_id = $update->callback_query->message->message_id; $data  = $update->callback_query->data; $user = $update->callback_query->from->username; }
$ex = explode("#",$data);
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
"text" => " اهلا بك عزيزي في بوت اليوتيوب والانستا \n يمكن التحميل من خلال ارسال الرابط فقط ",
'reply_to_message_id'=>$message->message_id,]);}
if($text != "/start"){
$jack0= json_decode(file_get_contents("https://api-jack.ml/api40.php?url=$text"),true);
bot('sendvideo',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
 'video'=>$jack0["url"][0]["url"],
 'caption'=>$jack0["hosting"],
'reply_to_message_id'=>$message->message_id,]);}







