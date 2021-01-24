<?php
class PrismaSegitiga{
    public function volumePrisma($luasalas,$tinggi){
        echo "Volume prisma segitiga: ". $luasalas*$tinggi;
    }
    public function luaspermukaanPrisma($tinggi,$luasalas){
        $a1 = 5; $a2 = 3; $a3 = 4;
        $dua = 2;
        echo "Luas permukaan prisma segitiga : ". $tinggi*($a1+$a2+$a3)+($dua*$luasalas);
    }
    public function tendensiSentralUntuk($tendensiSentral, $luasalas, $tinggi){
        switch ($tendensiSentral){
            case 'volume':
                $this->volumePrisma($luasalas,$tinggi);
            break;
            case 'luas permukaan':
                $this->luaspermukaanPrisma($luasalas,$tinggi);
            break;
        }
    }
}
$luasalas = 6;
$tinggi = 7;
$hitungPrisma->tendensiSentralUntuk($luasalas,$tinggi)
?>