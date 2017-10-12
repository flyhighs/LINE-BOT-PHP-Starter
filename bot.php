<?php
$access_token = 'HbdRoufZO/levqpihCXTdDF2jZhNDOCspGCeBZoPTAuCw5lTRoe2fpJ6/kU3XmIbji6szPr3Q78fAddQmhkApggIBwH3kSeBGvC9rcrHPl+BUO4F9ampz2MJEXZl0fHG1M3HjD0xc66z8u6gJDhrWAdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			
			//TEST MSG
			$res ="";
			if(preg_match('/bot/',$text)){

			    switch ($text) {
				case (preg_match('/สวัสดี/', $text) ? true : false):
				    $res = "สวัสดีจ้า";
				break;
				case (preg_match('/ดีจ้า/', $text) ? true : false):
				    $res = "สวัสดีจ้า";
				break;
				case (preg_match('/ดีๆ/', $text) ? true : false):
				    $res = "สวัสดีจ้า";
				break;
				case (preg_match('/ขอบคุณ/', $text) ? true : false):
				    $res = "ขอบคุณค่าา";
				break;
				case (preg_match('/รัก/', $text) ? true : false):
				    $res = "รักนะค๊า";
				break;
				case (preg_match('/บอส/', $text) ? true : false):
				    $res = "บอส ผู้จ่ายสามพันแปด ผู้จับมือเฌอปรางสองวิ ผู้ไม่มีบัตรจับมือรอบสุดท้าย ผู้ซื้อกล้อง A7II เพื่อเฌอปราง และผู้ที่เฮนเฌอไปหาน้องจ๋า ตอนนี้ตามิคุณอ๊บไปแล้ว";
				break;
				case (preg_match('/พริ้ม/', $text) ? true : false):
				    $res = "พริ้มโอชิอร ที่เป็นแอดมินเดียร์ตาหวาน แล้วไปถ่ายรูปงานรับปริญญาครูแก้ว และชมน้องเนยว่าน่ารักที่ตู้ปลา จนแทบทุกคนที่ไปหาเนยในงานจับมือขอให้เนยพูดว่าบว้าาาา";
				break;
				case (preg_match('/เฟิส/', $text) ? true : false):
				    $res = "เฟิส 5d mkii ที่ตันโอชิอร";
				break;
				case (preg_match('/BNK/', $text) ? true : false):
				    $res = "รู้จักแค่ป้าแก้ว,เฌอ,เนย และก็ตาหวานข่าาา";
				break;
				case (preg_match('/bnk/', $text) ? true : false):
				    $res = "รู้จักแค่ป้าแก้ว,เฌอ,เนย และก็ตาหวานข่าาา";
				break;
				case (preg_match('/ชื่ออะไร/', $text) ? true : false):
				    $res = "เล้งแซ้บ48 เซเลปแห่งข้าวอกไก่";
				break;
				case (preg_match('/แนะนำตัว/', $text) ? true : false):
				    $res = "เล้งแซ้บ48 เซเลปข้าวอกไก่แห่งใต้เตียงBNK ข่าาาาาา";
				break;
				case (preg_match('/แก้ว/', $text) ? true : false):
				    $res = "คนที่ขาสั้นๆ ปากๆดีเชิดๆป่าวค๊ะ";
				break;
				case (preg_match('/เฌอ/', $text) ? true : false):
				    $res = "คนที่บอสพูดว่า รักนะคะ แล้วนางก็พูดกลับมาแค่ขอบคุณมาสินะคะ จางในจาง";
				break;
				case (preg_match('/เนย/', $text) ? true : false):
				    $res = "ใช่คนที่น่ารักๆ พูดว่าบว้าาา ตกอิบอสได้ป่าวค่ะ";
				break;
				case (preg_match('/น่ารัก/', $text) ? true : false):
				    $res = "บว้าาาาา";
				break;
				case (preg_match('/ตาหวาน/', $text) ? true : false):
				    $res = "ถ้าจำไม่ผิดคนที่ตัวเตี้ยผิวเหลืองแน่นอน";
				break;
				case (preg_match('/ใช่/', $text) ? true : false):
				    $res = "ถูกด้วย หูวววว";
				break;
				case (preg_match('/ถูก่/', $text) ? true : false):
                                    $res = "ถูกด้วย หูวววว";
                                break;
				case (preg_match('/55/', $text) ? true : false):
				    $res = "555555555555555";
				break;
				case (preg_match('/โหล/', $text) ? true : false):
				    $res = "เอากี่โหลดีเอ่ย";
				break;
				case (preg_match('/เฮน/', $text) ? true : false):
				    $res = "เฮนแม่นเลย";
				break;	    
				case (preg_match('/ควย/', $text) ? true : false):
				    $res = "เอาที่สบายใจเลย";
				break;
				case (preg_match('/หยุดพูด/', $text) ? true : false):
				    $res = "จะให้เงียบ ก็เลิกพิมคำว่า bot นำหน้าดิ";
				break;
				case (preg_match('/bot/', $text) ? true : false):
				    $res = "อยากเผือกอะไร เล่ามาสิค๊ะ เล่ามาาาา";
				break;
				default:
				    $res = "ไม่ทราบข่า ไว้จะไปเผือกมาเพิ่มนะคะ";
				break;
			    }
			}

			
			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $res
			];
	
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			
			echo "ความเอ้ย ถามอะไรโง่ๆ";
			echo $result . "\r\n";
			
		}
	}
}
echo "OK";
