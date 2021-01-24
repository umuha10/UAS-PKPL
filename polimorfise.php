<?php

interface PrismaInterface
{
    public function tendensiSentral($luasalas,$tinggi);
}
class Volume implements PrismaInterface
{
    public function tendensiSentral($luasalas,$tinggi)
    {
        echo "Volume prisma segitiga : ". $luasalas*$tinggi;
    }
}
class LuasPermukaan implements PrismaInterface
{
    public function tendensiSentral($luasalas,$tinggi)
    {
        $a1 = 5; $a2 = 3; $a3 = 4;
        $dua = 2;
        echo "Luas permukaan prisma segitiga : ". $tinggi*($a1+$a2+$a3)+($dua*$luasalas);
    }
}
class PilihanPrisma{
    public static function tendensiSentralUntuk($tendensiSentral)
    {
        switch ($tendensiSentral){
            case 'volume':
                return new Volume;
            break;
            case 'luaspermukaan':
                return new LuasPermukaan;
            break;
        }
    }
}
$luasalas = 6;
$tinggi = 7;
PilihanPrisma::tendensiSentral('volume')->tendensiSentral($luasalas,$tinggi);
echo '<br>';
PilihanPrisma::tendensiSentral('luaspermukaan')->tendensiSentral($luasalas,$tinggi);
echo '<br>';
?>