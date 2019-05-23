<?
// student adli sinif 
class student 
{

	//ad ve soyad student sinfine mexsus deyiskenlerdir, field adlanirlar. Normal deyiskenlerden tek ferqi sinfin ozune muraciet etmeden deyiskenlerinden de istifade ede bilmemeyimizdir. Onlerine public yazmagimizin sebebi ise class xaricinde de bu deyiskenleri cagirib istifade ede bilmeyimiz ucundur. 
	public $ad = "";
	public $soyad = "";

	//sinif daxilinde istifade yaratdigimiz funksiyalar da metod adlanir. Bunlari da sinfin ozune muraciet etmeden istifade ede bilmirik. Field-lara da metodlara da proyektin hansi hisselerinden muraciet ede bileceyinizi mueyyen eden keyword-ler ise access modifier-lardir. 
	public function ortalama($sdf1, $sdf2, $sdf3)
	{
		return ($sdf1+$sdf2+$sdf3)/3;
	}
}

//student sinfnden telebe_1 adli obyekt yaradiriq.
$telebe_1 = new student();
//telebe_1 obyekti ucun ad ve soyad deyiskenlerinin deyerini teyin edirik
$telebe_1->ad = "Efsane";
$telebe_1->soyad = "Veliyev";

//deyerleri bu sekilde cap ede bilerik.
echo $telebe_1->ad;
echo "<br>";
echo $telebe_1->soyad;
echo "<br>";
echo $telebe_1->ortalama(100,20,100);


?>