Yii2 - İnternet Programcılığı Projesi

Yii2 - Project 

Modülü kullanmak için "vagrant" makine içerisinden "advanced" klasörümüzün içinde yazmamız gereken satırlar;

1-) composer require kayayusufalparslan/yii2-project "dev-main" 
![composer-require](https://user-images.githubusercontent.com/56241551/104813655-93aecd80-581b-11eb-9d8d-76d2376c0779.png)


//Yükleme işlemi tamamlandıktan sonra

2-) php yii migrate -migrationPath=@vendor/kayayusufalparslan/migrations

//Gelen "migrations"'ları uygulamak istiyor musunuz? sorusuna, "yes" yazarak gerekli olan tabloları kuruyoruz.
![migration-path](https://user-images.githubusercontent.com/56241551/104813508-9eb52e00-581a-11eb-8b93-505c0ee7f644.png)

//Modülü nerede kullanmak istiyorsak (frontend-backend-tüm proje), o kısmın  "config" dosyasının içinden "main.php" klasörümüze gidiyoruz.

3-) 

        'modules' => [

                'project' => [
        
                         'class' => 'kayayusufalparslan\project\Module',
            
                 ],
       
            ],
    
//Bu kod parçacığını ekliyoruz. 

Artık modülümüz kullanıma hazır durumdadır.

Modüle erişebilmek için;  //Burada backend kısmına ekledim modülü, işlemler oradan gösterilecektir.

URL = http://advanced/backend/web/index.php?r=project  
![companies-main-page](https://user-images.githubusercontent.com/56241551/104813825-a7a6ff00-581c-11eb-8e89-923d85e1b5c9.png)


Buradan, modülümüze erişebiliriz artık.

Yukarıda bulunan fotoğrafta da görüldüğü gibi menü elemanları içinde linklerimizi vermek istersek eğer;

// views/layouts/main.php içerinden $menuItems[], içerisine

['label' => 'Add Company', 'url' => ['/project/default/index']],
   
['label' => 'Add Company Outgoings', 'url' => ['/project/outgoing/index']],

kodları eklememiz gerekmektedir.

----------------------------------------------------------------------------------------------------------------------------------------------------------------

Modülün ne işe yaradığından bahsedip, daha sonra da kullanıma geçelim.

1-)Modül, şirketlerin giderlerini tutmak için oluşturulmuştur.

2-)Kullanıcımız, istediği kadar şirket ekler. Daha sonra, şirket gideri oluşturmak istediği zaman gerekli sayfaya gidip hangi şirket için gider eklemek istediğini seçer.

3-)Şirket gideri eklemek istediği şirketi listeden seçer. //Sadece daha önceden eklediği şirketlere gider ekleyebilir. Yeni bir şirket için gider oluşturabilmesi için öncelikle
şirketi oluşturması gerekir.

4-)Şirketin hangi aydaki giderini eklemek istiyorsa o ayı listeden seçmelidir.

5-)Geriye sadece, giderleri eklemek kalıyor. 


Şimdi bir örnek kullanım oluşturup, modülümüzü inceleyelim...

----------------------------------------------------------------------------------------------------------------------------------------------------------------

-> Yukarıda verilen -URL- ile modülümüzün ana sayfasına giriş yaptık. 
![companies-main-page](https://user-images.githubusercontent.com/56241551/104813825-a7a6ff00-581c-11eb-8e89-923d85e1b5c9.png)


->Öncelikle bir şirket oluşturuyoruz. // "Create Companies" butonuna tıklıyoruz.
![create-companies](https://user-images.githubusercontent.com/56241551/104814333-6c59ff80-581f-11eb-8791-73905b1acdf7.png)

->Ekledğimiz şirket hakkında gerekli bilgileri girdik. // "Payment" kutusu, şirketimizin bu işlem için bize ödeme yaptığını veya yapmadığını kontrol etmek için
oluşturulmuştur.

![created-company](https://user-images.githubusercontent.com/56241551/104814425-d8d4fe80-581f-11eb-996f-57478061d9cc.png)

->Şirketi oluşturduk, şimdi bu şirkete gider ekleyelim. Bunun için modül ana sayfamızdan "Create Company Outgoing" butonuna veya menü itemlerimizde bulunan 
"Add Company Outgoings" linkine tıklayalım.
![company-outgoing](https://user-images.githubusercontent.com/56241551/104814517-74ff0580-5820-11eb-8e87-ac500e830c2d.png)

->Şirket gideri eklemek için gerekli olan sayfaya geldik.
![create-company-outgoing-main-page](https://user-images.githubusercontent.com/56241551/104814565-af68a280-5820-11eb-823e-4650237bb1dc.png)

->"Create Company Outgoing" butonuna tıklıyoruz. Gerekli alanları dolduruyoruz.
![create-company-outgoing-fields](https://user-images.githubusercontent.com/56241551/104814655-3a499d00-5821-11eb-8d4b-394a195fcf34.png)

->Ve şirketimizin, Mayıs ayı için geçerli olan giderini oluşturmuş bulunmaktayız.
![company-outgoing-may](https://user-images.githubusercontent.com/56241551/104815114-b644e480-5823-11eb-8c44-5e3c9ad6aeb4.png)

![outgoing-list](https://user-images.githubusercontent.com/56241551/104815129-d96f9400-5823-11eb-8de4-eb010cae0c13.png)

----------------------------------------------------------------------------------------------------------------------------------------------------------------

Modülde kullanılan tablo yapıları:

Şirketler Tablosu :
![companies-table](https://user-images.githubusercontent.com/56241551/104815206-2fdcd280-5824-11eb-9d15-b0f4aa03acea.png)

Şirket Giderleri Tablosu:
![outgoing-table](https://user-images.githubusercontent.com/56241551/104815224-44b96600-5824-11eb-9a5b-13a9f4a0b1f5.png)


Tablolarımızda, şirketimizin "id" 'si ve şirket gideri eklerken "incomeID" eklenen şirketin "companyId"sini alarak bağlantılı oluşturulmuştur.

Bu sayede, gider eklenirken geçerli şirkete ekleme işlemi yapılmaktadır.

----------------------------------------------------------------------------------------------------------------------------------------------------------------

190202102

Yusuf Alparslan Kaya

----------------------------------------------------------------------------------------------------------------------------------------------------------------
