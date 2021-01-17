<?php

interface TabungInterface
{
	public function tendensiSentral($jarijari, $tinggi);
}
class LuasSelimut implements TabungInterface
{
	public function tendensiSentral($jarijari, $tinggi)
	{
		$dua = 2;
		$phi = 3.14;
		echo "Luas selimut tabung :". $dua*$this->phi*$jarijari*$tinggi;
	}
}
Class Luas implements TabungInterface
{
	public function tendensiSentral($jarijari, $tinggi)
	{
		$dua = 2;
		$phi = 3.14;
		echo "Luas tabung :". $dua*$this->phi*$jarijari*($jarijari+$tinggi);
	}
}
class Keliling implements TabungInterface
{
	public function tendensiSentral($jarijari, $tinggi)
	{
		$dua = 2;
		$phi = 3.14;
		echo "Keliling alas tabung :". $dua*$this->phi*$jarijari;
	}
}
class PilihanTabung{
	public static function tendensiSentralUntuk($tendensiSentral
	){
		switch ($tendensiSentral){
			case 'luasselimut':
				return new LuasSelimut;
				break;
			case 'luas':
				return new Luas;
				break;
			case 'keliling':
				return new Keliling;
				break;


		}
	}
}
$jarijari = 14;
$tinggi = 30;
PilihanTabung::tendensiSentral('luasselimut')->tendensiSentral($jarijari, $tinggi);
echo '<br>';
PilihanTabung::tendensiSentral('luas')->tendensiSentral($jarijari, $tinggi);
echo '<br>';
PilihanTabung::tendensiSentral('keliling')->tendensiSentral($jarijari, $tinggi);
echo '<br>'
?>
