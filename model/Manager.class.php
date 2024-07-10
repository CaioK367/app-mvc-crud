<?php

    class Manager extends Conexao{
        public function insert_user($data){

            $pdo = parent::get_instance();

            $sql = "INSERT INTO cliente VALUES(null, :name, :email, :cpf, :birth, :phone, :address)";

            $statement = $pdo->prepare($sql);
            foreach ($data as $key => $value){
                $statement->bindValue(":$key", $value);
            }

            $statement->execute();
        }

        public function list_user(){
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM cliente ORDER BY id DESC";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

    }