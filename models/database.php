<?php>
  class Database{
        // Utiliza padrão Singleton, cujo objetivo é garantir que apenas uma única instancia de classe seja  criada  durante a execução do programa, e que essa instancia seja utilizada sempre que necessário
       private static $instance = null;

       //Método público que retorna  a conexão com BD
       public static function getConnection(){
        // Verifica se a instancia  de conexão ainda não foi criada
        if(!self:: $instance){
            $host    = 'localhost';
            $db      ='sistema_usuarios';
            $user    ='root';
            $password = '';

            // A conexão usa o driver Mysql (mysql:) e as  formações de host e DB
            self::$instance = new
            PDO("mysql:host=$host;dbname=$db", $user, $password);

            self::$instance =>setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        }
        return self::$instance;
       }
    }
?>
    
