<?php/*
class VT{
    var $sunucu="localhost";
    var $user="root";
    var $password="";
    var $dbName="emredb";
    var $baglanti;
    
    function __construct() 
    {
        try{
        $this->baglanti=new PDO("mysql:host=".$this->sunucu.";dbname=".$this->dbName.";charset=utf8",$this->user,$this->password);
        }
        catch(PDOException $error)
        {
            echo $error->getMessage();
            exit();
        }
    }
    
    //select * from iletisim where ID=1 order by ıd asc limit 1
    public function VeriGetir($tablo,$wherealanlar="",$wherearraydeger="",$orderby="ORDER BY ID ASC",$limit="")
    {
        $this->baglanti->query("SET CHARACTER SET utf8");
        $sql="SELECT * FROM ".$tablo;
        if(!empty($wherealanlar) && !empty($wherearraydeger))
        {
            $sql.= " ".$wherealanlar;//select * from iletisim where
            if(!empty($orderby)){$sql.=" ".$orderby;}
            if(!empty($limit)){$sql.=' LIMIT '.$limit;}
            $calistir = $this->baglanti->prepare($sql);
            $calistir->execute($wherearraydeger);
            $veri = $calistir->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            if(!empty($orderby)){$sql.=" ".$orderby;}
            if(!empty($limit)){$sql.=" LİMİT ".$limit;}
            $veri = $this->baglanti->query($sql,PDO::FETCH_ASSOC);
        }
        if($veri!=false && !empty(($veri)))
        {
            $datalar=array();
            foreach ($veri as $bilgiler)
            {
                $datalar[]=$bilgiler;
            }
            return $datalar;
        }
        else 
        {
            return false;
        }
    }
}
*/

?>