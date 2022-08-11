<?php




class Databases
{
    protected $baseurl = "http://studentfollow.local/";
    
    public function connect() //fonction de connextion à la base
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=studentfollow;port=3306;charset=utf8', 'root', 'root');
            return $bdd;
         
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

    public function redirect($filename, $duree) {
        if (!headers_sent())
            header("Refresh: $duree;url=$this->baseurl/$filename");
            
        else {
            echo '<script type="text/javascript">';
            echo 'window.location.href="'.$filename.'";';
            echo '</script>';
            echo '<noscript>';
            echo '<meta http-equiv="refresh" content="'.$duree.';url='.$this->baseurl."/".$filename.'" />';
            echo '</noscript>';
        }
    }
}
