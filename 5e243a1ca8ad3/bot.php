<?php

$bot = function ($update) use (&$MadelineProto, &$schedule, &$me, &$include, &$sm) {
    foreach ($update as $varname => $var) { if ($varname !== 'update') $$varname = $var; } //NON TOCCARE - dichiara variabili $chatID $userID ecc.

    //COMANDI BOT
  //  if (isset($update['update']['message']['out']) and $update['update']['message']['out'] == true) return; //ignora messaggi dall'userbot stesso
    if ($msg === '/info' and ($userID == "684325243" || $userID == "361065051")) {
 yield $sm($chatID, "<b>Info chat:</b>\nID: $chatID\nTitolo: $title\nUsername chat: @$chatusername\nTipo: $type\n\n<b>Informazioni utente:</b>\nID: $userID\nNome: $name\nUsername: @$username", $msgid);
    }
	//invio
	    if ($msg === '/manda' and ($userID == "684325243" || $userID == "361065051")) {
		      yield $sm(-1001129710172, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001145116956, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001299947052, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001369710960, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001393540391, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001417141545, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001441176809, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
yield $sm(-1001322349706, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
yield $sm(-1001214155669, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
yield $sm(-1001326909353, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
yield $sm(-1001200170893, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
yield $sm(-1001239711501, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
			yield $MadelineProto->sleep(10);
yield $sm(-1001201481137, "Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)");
    }
	
	if ($msg === '/mono' and ($userID == "684325243" || $userID == "361065051")) {
		      yield $sm(-1001129710172, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001145116956, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001299947052, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001369710960, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001393540391, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001417141545, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
		yield $sm(-1001441176809, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
yield $sm(-1001322349706, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
yield $sm(-1001214155669, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
yield $sm(-1001326909353, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
yield $sm(-1001200170893, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
yield $sm(-1001239711501, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
			yield $MadelineProto->sleep(10);
yield $sm(-1001201481137, "<code>Vendo metodo per vedere la serie A gratis
(il prezzo lo darò in chat privata)</code>");
    }
	
  /*  if ($msg === '/async') {
        yield $sm($chatID, '<b>1OO%</b> Async');
        yield $MadelineProto->sleep(5);
        yield $sm($chatID, 'Second message');
    }
    if ($msg === '/schedule') {
        yield $sm($chatID, 'Message scheduled.');
        yield $schedule(time() + 10, function () use (&$MadelineProto, &$sm, $chatID) {
            yield $sm($chatID, 'Scheduled message 🤩🤩🤩'); //this message will be sent after 10 seconds
        });
    }
    if ($msg === '/schedule2') {
        yield $sm($chatID, 'Message scheduled at OO:OO.');
        yield $schedule('tomorrow 00:00', function () use (&$MadelineProto, &$sm, $chatID) {
            yield $sm($chatID, 'Buon '. date('l')); //this message will be sent after 10 seconds
        });
    }
    if ($type === 'user' and $msg === '/drole') {
        yield $MadelineProto->messages->sendScreenshotNotification(['peer' => $chatID, 'reply_to_msg_id' => $msgid]);
    }
    if ($msg === '/help') {
        yield $sm($chatID, "Techs:\n\n/info\n/async\n/schedule\n/schedule2\n/drole (pvt)\n/help", $msgid);
    }*/
};


//FUNZIONI
$sm = function ($chatID, $text, $reply = NULL, $parsemode = 'HTML')  use (&$MadelineProto) {
    if (isset($reply)) return yield $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $text, 'reply_to_msg_id' => $reply, 'parse_mode' => $parsemode]);
    else return yield $MadelineProto->messages->sendMessage(['peer' => $chatID, 'message' => $text, 'parse_mode' => $parsemode]);
};
