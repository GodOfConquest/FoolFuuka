<?php

namespace Foolfuuka\Themes\Fuuka;

if (!defined('DOCROOT'))
	exit('No direct script access allowed');

class Theme_Fu_Fuuka extends \Model_Base
{
	public static function greentext($html)
	{
		return '\\1<span class="greentext">\\2</span>\\3';
	}


	public static function process_internal_links_html($data, $html, $previous_result = NULL)
	{
		// a plugin with higher priority modified this
		if(!is_null($previous_result))
		{
			return array('return' => $previous_result);
		}

		return array('return' => array(
			'tags' => array('<span class="unkfunc">', '</span>'),
			'hash' => '',
			'attr' => 'class="backlink" onclick="replyHighlight(' . $data->num . ');"',
			'attr_op' => 'class="backlink"',
			'attr_backlink' => 'class="backlink"',
		));
	}


	public static function process_external_links_html($data, $html, $previous_result = NULL)
	{
		// a plugin with higher priority modified this
		if(!is_null($previous_result))
		{
			return array('return' => $previous_result);
		}

		return array('return' => array(
			'tags' => array('open' =>'<span class="unkfunc">', 'close' => '</span>'),
			'short_link' => '//boards.4chan.org/'.$data->shortname.'/',
			'query_link' => '//boards.4chan.org/'.$data->shortname.'/res/'.$data->query,
			'backlink_attr' => 'class="backlink"'
		));
	}
}