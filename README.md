Yii2 - İnternet Programcılığı Projesi

Yii2 - Project 

Modülü kullanmak için "vagrant" makine içerisinden "advanced" klasörümüzün içinde yazmamız gereken satırlar;

1-) composer require kayayusufalparslan/yii2-project "dev-main" 

//Yükleme işlemi tamamlandıktan sonra

2-) php yii migrate -migrationPath=@vendor/kayayusufalparslan/migrations

//Gelen "migrations"'ları uygulamak istiyor musunuz? sorusuna, "yes" yazarak gerekli olan tabloları kuruyoruz.

![migration-path](https://user-images.githubusercontent.com/56241551/104813508-9eb52e00-581a-11eb-8b93-505c0ee7f644.png)

//Modülü nerede kullanmak istiyorsak (frontend-backend-tüm proje), o kısmın  "config" dosyasının içinden "main.php" klasörümüze gidiyoruz.

3-) 'modules' => [
        'project' => [
            'class' => 'kayayusufalparslan\project\Module',
        ],
    ],
    
//Bu kod parçacığını ekliyoruz. 

Artık modülümüz kullanıma hazır durumdadır.

Modüle erişebilmek için;  //Burada backend kısmına ekledim modülü, işlemler oradan gösterilecektir.

URL = http://advanced/backend/web/index.php?r=project  

Buradan, modülümüze erişebiliriz artık.

