<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

return array(
	'a_commented_body' => "Jibu lako kwenye ^site_title lina maoni mapya kutoka kwa ^c_handle:\n\n^open^c_content^close\n\nJibu lako lilikuwa:\n\n^open^c_context^close\n\nUnaweza kujibu kwa kuongeza maoni yako hapa:\n\n^url\n\nAsante,\n\n^site_title",
	'a_commented_subject' => 'Jibu lako la ^site_title lina maoni mapya',

	'a_followed_body' => "Jibu lako kwenye ^site_title lina swali jipya linalohusiana nalo kutoka kwa ^q_handle:\n\n^open^q_title^close\n\nJibu lako lilikuwa:\n\n^open^a_content^close\n\nBonyeza hapa chini ili kujibu swali hilo jipya:\n\n^url\n\nAsante,\n\n^site_title",
	'a_followed_subject' => 'Jibu lako la ^site_title lina swali linalohusiana nalo',

	'a_selected_body' => "Hongera! Jibu lako kwenye ^site_title limechaguliwa kuwa bora zaidi na ^s_handle:\n\n^open^a_content^close\n\nSwali lilikuwa:\n\n^open^q_title^close\n\nBonyeza hapa chini ili kuona jibu lako:\n\n^url\n\nAsante,\n\n^site_title",
	'a_selected_subject' => 'Jibu lako la ^site_title limechaguliwa kuwa bora!',

	'c_commented_body' => "Maoni mapya kutoka kwa ^c_handle yameongezwa baada ya maoni yako kwenye ^site_title:\n\n^open^c_content^close\n\nMjadala unaoendelea ni huu:\n\n^open^c_context^close\n\nUnaweza kujibu kwa kuongeza maoni mengine hapa:\n\n^url\n\nAsante,\n\n^site_title",
	'c_commented_subject' => 'Maoni yako ya ^site_title yamepata majibu',

	'confirm_body' => "Tafadhali bonyeza hapa chini ili kuthibitisha barua pepe yako kwa ajili ya ^site_title.\n\n^url\n\nKodi ya uthibitisho: ^code\n\n Asante,\n^site_title",
	'confirm_subject' => '^site_title - Uthibitisho wa Barua Pepe',

	'feedback_body' => "Maoni:\n^message\n\nJina:\n^name\n\nBarua pepe:\n^email\n\nUkurasa uliotoka:\n^previous\n\nMtumizi:\n^url\n\nAnwani ya IP:\n^ip\n\nKivinjari (Browser):\n^browser",
	'feedback_subject' => '^ mrejesho',

	'flagged_body' => "Chapisho kutoka kwa ^p_handle limepokea ^flags:\n\n^open^p_context^close\n\nBonyeza hapa chini ili kuona chapisho hilo:\n\n^url\n\n\nBonyeza hapa chini ili kukagua machapisho yote yaliyoripotiwa:\n\n^a_url\n\n\nAsante,\n\n^site_title",
	'flagged_subject' => '^site_title ina chapisho lililoripotiwa',

	'moderate_body' => "Chapisho kutoka kwa ^p_handle linahitaji idhini yako:\n\n^open^p_context^close\n\nBonyeza hapa chini ili kukubali au kukataa chapisho hilo:\n\n^url\n\n\nBonyeza hapa chini ili kukagua machapisho yote yaliyosubirishwa:\n\n^a_url\n\n\nAsante,\n\n^site_title",
	'moderate_subject' => 'Usimamizi wa ^site_title',

	'new_password_body' => "Nenosiri lako jipya la ^site_title ni hili hapa chini.\n\nNenosiri: ^password\n\nInashauriwa kubadilisha nenosiri hili mara tu baada ya kuingia.\n\nAsante,\n^site_title\n^url",
	'new_password_subject' => '^site_title - Nenosiri Lako Jipya',

	'private_message_body' => "Umetumiwa ujumbe wa faragha na ^f_handle kupitia ^site_title:\n\n^open^message^close\n\n^moreAsante,\n\n^site_title\n\n\nIli kuzuia ujumbe wa faragha, tembelea ukurasa wako wa akaunti:\n^a_url",
	'private_message_info' => "Taarifa zaidi kuhusu ^f_handle:\n\n^url\n\n",
	'private_message_reply' => "Bonyeza hapa chini ili kumjibu ^f_handle kwa ujumbe wa faragha:\n\n^url\n\n",
	'private_message_subject' => 'Ujumbe kutoka kwa ^f_handle kwenye ^site_title',

	'q_answered_body' => "Swali lako kwenye ^site_title limejibiwa na ^a_handle:\n\n^open^a_content^close\n\nSwali lako lilikuwa:\n\n^open^q_title^close\n\nIkiwa umependezwa na jibu hili, unaweza kulichagua kuwa bora zaidi:\n\n^url\n\nAsante,\n\n^site_title",
	'q_answered_subject' => 'Swali lako la ^site_title limejibiwa',

	'q_commented_body' => "Swali lako kwenye ^site_title lina maoni mapya kutoka kwa ^c_handle:\n\n^open^c_content^close\n\nSwali lako lilikuwa:\n\n^open^c_context^close\n\nUnaweza kujibu kwa kuongeza maoni yako hapa:\n\n^url\n\nAsante,\n\n^site_title",
	'q_commented_subject' => 'Swali lako la ^site_title lina maoni mapya',

	'q_posted_body' => "Swali jipya limeulizwa na ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nBonyeza hapa chini ili kuona swali hilo:\n\n^url\n\nAsante,\n\n^site_title",
	'q_posted_subject' => '^site_title ina swali jipya',

	'remoderate_body' => "Chapisho lililohaririwa na ^p_handle linahitaji idhini yako tena:\n\n^open^p_context^close\n\nBonyeza hapa chini ili kukubali au kuficha chapisho hilo lililohaririwa:\n\n^url\n\n\nBonyeza hapa chini ili kukagua machapisho yote yaliyosubirishwa:\n\n^a_url\n\n\nAsante,\n\n^site_title",
	'remoderate_subject' => 'Usimamizi wa ^site_title',

	'reset_body' => "Tafadhali bonyeza hapa chini ili kuweka upya nenosiri lako la ^site_title.\n\n^url\n\nAu vinginevyo, weka kodi iliyo hapa chini kwenye sehemu husika.\n\nKodi: ^code\n\nIkiwa hukuomba kuweka upya nenosiri lako, tafadhali puuza ujumbe huu.\n\nAsante,\n^site_title",
	'reset_subject' => '^site_title - Weka Upya Nenosiri Lililosahaulika',

	'to_handle_prefix' => "^,\n\n",

	'u_registered_body' => "Mtumizi mpya amejisajili kama ^u_handle.\n\nBonyeza hapa chini ili kuona wasifu (profile) wa mtumizi:\n\n^url\n\nAsante,\n\n^site_title",
	'u_registered_subject' => '^site_title ina mtumizi mpya aliyesajiliwa',
	'u_to_approve_body' => "Mtumizi mpya amejisajili kama ^u_handle.\n\nBonyeza hapa chini ili kumkubali mtumizi huyu:\n\n^url\n\nBonyeza hapa chini ili kukagua watumizi wote wanaosubiri kukubaliwa:\n\n^a_url\n\nAsante,\n\n^site_title",

	'u_approved_body' => "Unaweza kuona wasifu wako mpya wa mtumizi hapa:\n\n^url\n\nAsante,\n\n^site_title",
	'u_approved_subject' => 'Mtumizi wako wa ^site_title amekubaliwa',

	'wall_post_body' => "^f_handle amechapisha ujumbe kwenye ukuta wako (wall) wa mtumizi katika ^site_title:\n\n^open^post^close\n\nUnaweza kujibu ujumbe huo hapa:\n\n^url\n\nAsante,\n\n^site_title",
	'wall_post_subject' => 'Ujumbe kwenye ukuta wako wa ^site_title',

	'welcome_body' => "Asante kwa kujiunga na ^site_title.\n\n^custom^confirmMaelezo yako za kuingia ni kama ifuatavyo:\n\nJina la mtumizi: ^handle\nBarua pepe: ^email\n\nTafadhali hifadhi maelezo haya vizuri kwa matumizi ya baadaye.\n\nAsante,\n\n^site_title\n^url",
	'welcome_confirm' => "Tafadhali bonyeza hapa chini ili kuthibitisha anwani yako ya barua pepe.\n\n^url\n\n",
	'welcome_subject' => 'Karibu kwenye ^site_title!',
);
