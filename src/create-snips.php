<?php

$bi = json_decode(file_get_contents('bs5-icons.json'));

$template = '
	"Bootstrap Icon [icon]": {
		"prefix": ["icon", "[icon]"], "body": "<i class=\"bi [icon]\"></i>",
		"description": "Add HTML for bootstrap icon [icon]",
		"scope": "javascript,typescript,php,html,latte,neon,twig,json,markdown,md",
	},
';

foreach($bi as $icon){
	echo str_replace('[icon]', $icon, $template);
}
