<?php
require_once "BaseDao.php";

class MidtermDao extends BaseDao {

    public function __construct(){
        parent::__construct();
    }

    /** TODO
    * Implement DAO method used to add content to database
    */
    public function input_data($data){

    }

    /** TODO
    * Implement DAO method to return summary as requested within route /midterm/summary/@country
    */
    public function summary($country){
        $stmt = $this->conn->prepare("SELECT
        COUNT(DISTINCT region) AS total_regions,
        COUNT(*) AS total_cities
        FROM locations;");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);


    }

    /** TODO
    * Implement DAO method to return list as requested within route /midterm/encoded
    */
    public function encoded(){
        
    for ($i = 0; $i < 10 && $i < count($countries); $i++) {
    $country = $countries[$i];
    $encoded = encodeString($country);

    
    $results[] = [
        'country' => $country,
        'encoded' => $encoded,
    ];
}

        
    }

    /** TODO
    * Implement DAO method to return location(s) as requested within route /midterm/ip
    */
    public function ip($ip_address){

    }
}
?>
