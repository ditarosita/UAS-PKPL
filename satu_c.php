<?php

class Latihan
{
    private $DISKON = 50000;
    //diskon 10%
    private $discount = 10;
    private $per = 100;

    

    /**
     * Function proses filter array yang memenuhi kondisi mendapatkan diskon pada function strukDiskon
     */
    public function filterStrukYangLayakDapatDiskon($arrBelanjaan)
    {
        return array_filter($arrBelanjaan, array($this, "strukDiskon"));
    }
    /**
     * Mencetak diskon dari struk yg layak diskon sehongga mendapatkan jumlah diskon
     */
    public function mencetakDiskon($arrBelanjaan)
    {
        $arrBelanjaan =  $this->filterStrukYangLayakDapatDiskon($arrBelanjaan);
        return array_map(array($this, "hitungDiskon"), $arrBelanjaan);
    }

    /**
     * Function mengecek belanjaan yang dapat diskon
     */
    public function strukDiskon($arrBelanjaan)
    {
        if ($arrBelanjaan['jumlahBelanja'] > $this->DISKON) {
            return $arrBelanjaan;
        }
    }

    /**
     * Function menghitung diskon 
     */
    public function hitungDiskon($arrBelanjaan)
    {
        $totalDiskon = $arrBelanjaan['jumlahBelanja'] - ($arrBelanjaan['jumlahBelanja'] * $this->discount / $this->per);
        $arrBelanjaan['Diskonnya menjadi'] = $totalDiskon;
        return ($arrBelanjaan);
    }
}

$arrBelanjaan = array(
    array('nomorStruk' => 1, 'jumlahBelanja' => 77400),
    array('nomorStruk' => 2, 'jumlahBelanja' => 9000),
    array('nomorStruk' => 3, 'jumlahBelanja' => 49890),
    array('nomorStruk' => 4, 'jumlahBelanja' => 109000),
    array('nomorStruk' => 5, 'jumlahBelanja' => 56000),
);

$cetak = new Latihan;
print_r($cetak->mencetakDiskon($arrBelanjaan));
