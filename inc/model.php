<?php 

include 'connect.php';

Class Query extends Dbh {
	

	public function login($email, $password){
		$stmt = $this->connection()->prepare('SELECT * FROM users WHERE email = ? AND password=?'); 
		$stmt->execute([$email, $password]); 
		$count = $stmt->rowCount();
		return $count;

	}// this method will check if user exist or not in order to login


	public function save_post($title, $coverImg, $zipfile, $category, $description){

		$sql = "INSERT INTO post(title, coverImg, zipfile, category, description) VALUES (?,?,?,?,?)";

		$stmt= $this->connection()->prepare($sql);

		if($stmt->execute([$title, $coverImg, $zipfile, $category, $description])){
			return True;
		}else{
			return False;
		}

	}

	public function select_post_in_admin_table(){
		$sql = $this->connection()->query("SELECT * FROM post ORDER BY id DESC ");
		return $sql;

	}// this will load post datas in admin table


	public function load_posts_on_page($start, $limit){
		$sql = $this->connection()->query("SELECT * FROM post  ORDER BY id DESC LIMIT $start, $limit ");
		return $sql;
	}// this will select and load posts on home page

	public function get_a_post($postid){
		$sql = $this->connection()->query("SELECT * FROM post WHERE id = $postid");
		return $sql;
	}// this will select a post on download page

	public function count_posts(){
		$sql = $this->connection()->query("SELECT * FROM post");
		$count = $sql->rowCount();
		return $count;
	}// this method counts all books - pdf  in database 



	public function users_info($email){
		$sql = "SELECT * FROM users WHERE email= '$email'";
		$stmt = $this->connection()->query($sql);
		return  $stmt;
	}	// this will load users details 


	public function delete_item($table_name, $post_ID){
		$stmt = $this->connection()->prepare("DELETE FROM $table_name WHERE id = ?"); 
		$stmt->execute([$post_ID]);
	}


	public function search_data($searchString){
		$sql = "SELECT id, title FROM post WHERE title LIKE '%$searchString%'";
		$stmt = $this->connection()->query($sql);
		return  $stmt;
	}// this will search templates and put out results


	public function search_video($searchString){
		$sql = "SELECT id, title FROM post WHERE title LIKE '%$searchString%'";
		$stmt = $this->connection()->query($sql);
		return  $stmt;
	}// this will search video and put out result


public function save_video($title, $link, $description){

		$sql = "INSERT INTO videotable(title, link, description) VALUES (?,?,?)";

		$stmt= $this->connection()->prepare($sql);

		if($stmt->execute([$title, $link, $description])){
			return True;
		}else{
			return False;
		}

	}// this will save video in database 

public function save_user($email, $password, $userName, $phone, $userType){

		$sql = "INSERT INTO users(email, password, userName, phone, userType) VALUES (?,?,?,?,?)";
		$stmt= $this->connection()->prepare($sql);
		if($stmt->execute([$email, $password, $userName, $phone, $userType])){
			return True;
		}else{ return False; }

	}// this will save user/admin in database


public function save_message($name, $contact, $message){

		$sql = "INSERT INTO messages(name, contact, message) VALUES (?,?,?)";
		$stmt= $this->connection()->prepare($sql);
		if($stmt->execute([$name, $contact, $message])){
			return True;
		}else{ return False; }

	}// this will save messages from contact form in database


public function load_videos_on_page($start, $limit){
		$sql = $this->connection()->query("SELECT * FROM videotable  ORDER BY id DESC LIMIT $start, $limit ");
		return $sql;
	}// this will select and load posts on home page


public function load_few_template(){
		$sql = $this->connection()->query("SELECT * FROM post  ORDER BY id DESC LIMIT 4 ");
		return $sql;
	}// this will load few templates on download page

public function count_videos(){
		$sql = $this->connection()->query("SELECT * FROM videotable");
		$count = $sql->rowCount();
		return $count;
	}// this method counts all videos in database 


public function load_admins_in_table(){
	$sql = $this->connection()->query("SELECT * FROM users ORDER BY id DESC ");
	return $sql;
}// this will select all admins and load in admins table

public function load_subscribers_in_table(){
	$sql = $this->connection()->query("SELECT * FROM users WHERE userType = 'user' ORDER BY id DESC ");
	return $sql;
}// this will select all admins and load in admins table

public function load_videos_in_table(){
	$sql = $this->connection()->query("SELECT * FROM videotable ORDER BY id DESC ");
	return $sql;
}// this will select all admins and load in admins table

public function view_messages(){
	$sql = $this->connection()->query("SELECT * FROM messages ORDER BY id DESC LIMIT 20");
	return $sql;
}// this will select all messages and display in message page for admin only





}

