<?php 

	class Post {

		private $title;

		function __construct($post_title) {
			$this->title = $post_title;
		}

		function setTitle($new_title) {
			$this->title = $new_title;
		}

		function getTitle() {
			return $this->title;
		}

		function save() {
			array_push($_SESSION['list_of_posts'], $this);
		}

		function getAll() {
			return $_SESSION['list_of_posts'];
		}
	}

?>