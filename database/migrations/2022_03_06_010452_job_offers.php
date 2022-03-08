<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobOffers', function (Blueprint $table) {
            $table->id();
            $table->string('companyName')->nullable();
            $table->string('companyId');
            $table->string('companyContactEmail')->nullable();
            $table->string('companyContactPhone')->nullable();
            $table->boolean('publishContact')->nullable();
            $table->integer('publishTime')->nullable();
            $table->string('positionName')->nullable();
            $table->string('positionNameUA')->nullable();
            $table->string('positionDesc')->nullable();
            $table->string('positionDescUA')->nullable();
            $table->string('positionAddress')->nullable();
            $table->string('positionLink')->nullable();
            $table->string('highlightType')->nullable();
            $table->string('positionCity')->nullable();
            $table->string('categoryId')->nullable();
            $table->string('salaryFrom')->nullable();
            $table->string('salaryTo')->nullable();
            $table->string('jobType')->nullable();
            $table->boolean('translation')->nullable();
            $table->string('status')->nullable();
            $table->string('status4employer')->nullable();
            $table->string('lang')->nullable();
            $table->string('ip')->nullable();
            $table->string('email')->unique()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('jobCategories', function (Blueprint $table) {
            $table->id();
            $table->string('categoryName');
            $table->string('categoryNameUA');
            $table->string('categoryDescription');
            $table->string('categoryDescriptionUA');
            $table->boolean('categoryStatus');
            $table->timestamps();
        });

        // Insert some stuff
        DB::table('users')->insert(
            array(
                'name' => 'Michal Pešat',
                'email' => 'pesatmichal@seznam.cz',
                'password' => '$2y$10$Wh6F4FZXtT7LIy5NEBAjL.sfMK0ekh0zLBCBj/TJyujoMVEo.O68u',
            )
        );
        
        $jobsDemo = [
            array(
                'companyName' => 'Michal Pešat',
                'companyId' => '74885570',
                'companyContactEmail' => 'pesatmichal@seznam.cz',
                'companyContactPhone' => '608747877',
                'publishContact' => '1',
                'publishTime' => '14',
                'positionName' => 'Uklízečka pro obchod',
                'positionDesc' => 'Obchod cca 20m2',
                'positionAddress' => 'Jindřicha Bubeníčka 1598/5',
                'positionCity' => 'Praha',
                'categoryId' => '25',
                'salaryFrom' => '100',
                'salaryTo' => '200',
                'jobType' => 'time2time',
                'status' => 'waiting_approval',
                'status4employer' => 'not_confirmed',
                'lang' => 'not_needed',
                'ip' => '31.30.166.113',
                'created_at' => '2022-03-06 18:22:00',
            ),
            
            array(
                'companyName' => 'Michal Pešat',
                'companyId' => '74885570',
                'companyContactEmail' => 'pesatmichal@seznam.cz',
                'companyContactPhone' => '608747877',
                'publishContact' => '1',
                'publishTime' => '14',
                'positionName' => 'Hlídání dětí',
                'positionDesc' => '12 a 10 let',
                'positionAddress' => 'Do Kopečka 37',
                'positionCity' => 'Praha',
                'categoryId' => '25',
                'salaryFrom' => '200',
                'salaryTo' => '250',
                'jobType' => 'partTime',
                'status' => 'waiting_approval',
                'status4employer' => 'not_confirmed',
                'lang' => 'czech_needed',
                'ip' => '31.30.166.113',
                'created_at' => '2022-03-06 18:22:00',
            ),
        ];
        DB::table('jobOffers')->insert(
            $jobsDemo
        );

        $data = [
            array(
                'categoryName' => 'Číšník',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Pokladní',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Skladník',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Servírka',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Pomocné práce',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Restaurace',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Strážný',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Logistika',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Dělník',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Učitel',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Automechanik',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Výroba a průmysl',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Potravinářství',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Služby',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Zemědělství, lesnictví',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'IT',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Marketing',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Stavebnictví',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Zákaznický servis',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Vrátný',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Řemeslné činnosti',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Stěhování',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Manuální práce',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
           array(
               'categoryName' => 'Jiné / Ostatní / Nezařazené',
               'categoryDescription' => '',
               'categoryStatus' => '1',
           ),
           array(
                  'categoryName' => 'Úklid',
                  'categoryDescription' => '',
                  'categoryStatus' => '1',
              ),
        array(
               'categoryName' => 'Údržba nemovitostí',
               'categoryDescription' => '',
               'categoryStatus' => '1',
           ),
         array(
             'categoryName' => 'Švadlena',
             'categoryDescription' => '',
             'categoryStatus' => '1',
         ),
         array(
              'categoryName' => 'Hlídání dětí',
              'categoryDescription' => '',
              'categoryStatus' => '1',
          ),
          array(
               'categoryName' => 'Kuchař',
               'categoryDescription' => '',
               'categoryStatus' => '1',
           ),
        ];
        DB::table('jobCategories')->insert(
            $data
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
