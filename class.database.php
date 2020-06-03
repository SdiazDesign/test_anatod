<?php
/*
 * anatod ® - ©
 */
?>
<?php
class class_db {
    
    PUBLIC  $conn=NULL;
    
    CONST 
        user      =   'test',
        pass      =   'test5678',
        db        =   'test_anatod',
        serverip  =   'anatodtest.c75o4mima6rb.us-east-1.rds.amazonaws.com';
    
    public function __construct()
        {
            if(!$this->conn)
                {
                    try 
                        {
                            $this->conn = new mysqli(SELF::serverip,SELF::user,SELF::pass,SELF::db); 
                            $this->conn->set_charset("utf8");
                            if (!$this->conn) {die('No se pudo conectar.');}
                        } 
                    catch (Exception $exc) 
                        {
                            echo $exc->getTraceAsString();
                        }
                };
        }

    public function get_provincias($id=0)
        {
            $where_id = "";
            
            if ($id!=0)
                $where_id = " AND (id = {$id}) ";

            $sql = 
                "
                SELECT 
                    * 
                FROM 
                    provincias 
                WHERE
                    (1=1)
                    {$where_id}
                ;    ";

            $resultado = $this->conn->query($sql);

            die(print_r($resultado));
        } 

    public function get_provincias($id=0)
        {
            $where_id = "";
            
            if ($id!=0)
                $where_id = " AND (id = {$id}) ";

            $sql = 
                "
                SELECT 
                    * 
                FROM 
                    provincias 
                WHERE
                    (1=1)
                    {$where_id}
                ;    ";

            $resultado = $this->conn->query($sql);

            die(print_r($resultado));
        }       
}


$a = new class_db(); print_r($a);
$a->get_provincias();