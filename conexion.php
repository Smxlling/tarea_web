<?php
    class CDConexion{
        private  $host;
        private  $port;
        private  $user;
        private  $pass;
        private  $dbname;
        private  $strConnection;

        public function __construct($host,$port,$user,$pass,$dbname){
                $this->host=$host;
                $this->port=$port;
                $this->user=$user;
                $this->pass=$pass;
                $this->dbname=$dbname;
        }


        function getHost(){
            return $this->host;
        }

        function openConnection(){
        $strConnection='host='.$this->host.' port='.$this->port.' dbname='.$this->dbname.' user='.$this->user.' password='.$this->pass;
            ///$strConnection="host=localhost port=5432 dbname=registros user=usuario1 password=usuario1";
            
            $conn=pg_connect($strConnection);
            return $conn;
        }

        /*function closeConnection(){
            $strConnection="host=$this->host port=$this->port dbname=$this->dbname user=$this->user password=$this->pass";
            $conn=pg_close($strConnection);
            return $conn;
        }*/

        function runQuery($strQuery){
            $query=pg_query($strQuery);
            //$result=pg_fetch_row($query);
            //return $result;

        }
        function imprimir(){
            return 'host'.$this->host;
        }
    }

    


?>