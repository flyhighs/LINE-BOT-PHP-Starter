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
				$res = "คนที่เฮนเฌอไปหาเนย";
			    break;
			    case (preg_match('/BNK/', $text) ? true : false):
				$res = "รู้จักแค่ป้าแก้ว,เฌอ,เนย และก็ตาหวานข่าาา";
			    break;
			    case (preg_match('/ชื่ออะไร/', $text) ? true : false):
				$res = "เล้งแซ้บ48 เซเลปแห่งข้าวอกไก่";
			    break;
			    case (preg_match('/แนะนำตัว/', $text) ? true : false):
				$res = "เล้งแซ้บ48 เซเลปแห่งข้าวอกไก่";
			    break;
			    case (preg_match('/แก้ว/', $text) ? true : false):
				$res = "คนที่ขาสั้นๆ ปากๆดีเชิดๆป่าวค๊ะ";
			    break;
			    case (preg_match('/เฌอ/', $text) ? true : false):
				$res = "คนที่บอสพูดว่า รักนะคะ แล้วนางก็พูดกลับมาแค่ขอบคุณมาสินะคะ จางในจาง";
			    break;
			    case (preg_match('/เนย/', $text) ? true : false):
				$res = "ใช่คนที่น่ารักๆ พูดว่าบว่าาา ป่าวนะ";
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
			    case (preg_match('/55/', $text) ? true : false):
				$res = "555555555555555";
			    break;
			    case (preg_match('/โหล/', $text) ? true : false):
				$res = "เอากี่โหลดีเอ่ย";
			    break;
			    default:
				$res = "ไม่ทราบข่า ถามไม่ตรงคำตอบ";
			    break;
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
