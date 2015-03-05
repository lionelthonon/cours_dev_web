<?php
class Posts extends Models{
/* --- RECUPERE LES POSTS --- */
    public function getPosts(){
        $this->connexion;
        // Stocker la requête SQL
        $sql = 'SELECT posts.id, posts.title, author_sign, content, date, name
                FROM posts, categories
                WHERE posts.id_cat LIKE categories.id
                ORDER BY date';

        // PDO::query -- Resultat de la requête
        $pdost = $this->connexion->prepare($sql);
        $pdost->execute();
        return $pdost->fetchAll();
    }
	
/* --- RECUPERE UN POST --- */
    public function getPost($id){
        $this->connexion;
        // Stocker la requête SQL
        $sql = 'SELECT posts.id, posts.title, author_sign, content, date, name
				FROM posts, categories
				WHERE posts.id_cat=categories.id 
				AND posts.id=:id 
				ORDER BY date';

        // PDO::query -- Resultat de la requête
        $pdost = $this->connexion->prepare($sql);
        $pdost->execute([':id'=>$id]);
        return $pdost->fetch();
    }

/* --- AJOUTE UN POST --- */
    public function createPost($author_sign, $title, $content, $category) {
        // Prépare la requête avec les jokers
        $sql = 'INSERT INTO posts (title, content, author_sign, id_cat)
                VALUES (:title, :content, :author_sign, :category)';

        // Execute la requete
        try {
            $res = $this->connexion->prepare($sql);
            $res->execute([
                ':author_sign' => $author_sign,
				':title' => $title,
                ':content' => $content,
                ':category' => $category
            ]);
        }catch(PDOException $e){ // S'il y a une erreur, la place dans $e
            die($e->getMessage());
        }
    }

/* --- SUPPRIME UN POST --- */
    public function deletePost($id_to_delete) {
        // Prépare la requête avec les jokers
        $sql = 'DELETE FROM posts
                WHERE posts.id = :id';

        // Execute la requête
        try {
            $res = $this->connexion->prepare($sql);
            $res->execute([
                ':id' => $id_to_delete
            ]);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

/* --- MODIFIE UN POST --- */
	public function updatePost ($id, $author_sign, $title, $content, $category) {
		// Prépare la requête
		$sql = 'UPDATE posts
				SET posts.title=:title, posts.content=:content, posts.author_sign=:author_sign, posts.id_cat=:category
				WHERE posts.id=:id';
		// Execute la requête
		try{
			$pdost = $this->connexion->prepare($sql);
			$pdost->execute([
				':id' => $id,
				':author_sign' => $author_sign,
				':title' => $title,
				':content' => $content,
				':category' => $category
			]);
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}