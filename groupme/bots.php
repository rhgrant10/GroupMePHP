<?php

class bots extends client {
	
	/**
	 * create: Create a new bot
	 * 
	 * @param array $args
	 *      bot[name] required string
	 *      bot[group_id] required string
	 *      bot[avatar_url] string
	 *      bot[callback_url string
	 * 
	 * @return string $return
	 * 
	 */
	public function add($args){
		$params = array(
			'url' => '/bots',
			'method' => 'POST',
			'query' => array(),
			'payload' => array('bot' => $args)
		);
		
		return $this->request($params);
	}

	/**
	 * post: Post a message from a bot
	 * 
	 * bot_id required string 
	 * text required string
	 * picture_url string — Image must be processed through image service.
	 * 
	 * @return string $return
	 * 
	 */
	public function post($args){
		$params = array(
			'url' => '/bots/post',
			'method' => 'POST',
					'query' => array(),
					'payload' => $args
		);
		
		return $this->request($params);
	}
	
	/**
	 * index: List of bots that you have created
	 * 
	 * @param takes no parameters
	 * 
	 */
	public function results($args) {
		$params = array (
			'url' => '/bots',
			'method' => 'GET',
			'query' = array()
			);
		
		return $this->request($params);
	}
	
	/**
	 * destroy: Remove a bot that you have created
	 * 
	 * bot_id required string 
	 * 
	 * @return string $return
	 * 
	 */
	public function post($bot_id, $args){
		$params = array(
			'url' => '/bots/destroy',
			'method' => 'POST',
					'query' => array($bot_id),
					'payload' => array()
		);
		
		return $this->request($params);
	}
}
?>
