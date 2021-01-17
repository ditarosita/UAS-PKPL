<?php
class Tabung{
	public $phi;
	public function __construct($phi=3.14){
        $this->phi = $phi;
	}
	public function luasSelimutTabung($jarijari, $tinggi){
		$dua = 2;
		echo "Luas selimut tabung :". $dua*$this->phi*$jarijari*$tinggi;
	}
	public function luasTabung($jarijari, $tinggi){
		$dua = 2;
		echo "Luas tabung :". $dua*$this->phi*$jarijari*($jarijari+$tinggi);
	}
	public function kelilingAlasTabung ($jarijari){
		$dua = 2;
		echo "Keliling alas tabung :". $dua*$this->phi*$jarijari;
	}
	public function tendensiSentralUntuk($tendensiSentral, $jarijari, $tinggi){
		switch ($tendensiSentral){
			case 'luasSelimut':
				$this->luasSelimutTabung($jarijari, $tinggi);
				break;
			case 'luas':
				$this->luasTabung($jarijari, $tinggi);
				break
			case 'keliling':
				$this->kelilingAlasTabung($jarijari);
				break

		}
	}

$jarijari = 14;
$tinggi= 30;
$hitungTabung->tendensiSentralUntuk('luas', $jarijari, $tinggi)
?>
