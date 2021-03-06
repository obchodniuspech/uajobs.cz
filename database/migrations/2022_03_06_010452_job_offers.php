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
                'name' => 'Michal Pe??at',
                'email' => 'pesatmichal@seznam.cz',
                'password' => '$2y$10$Wh6F4FZXtT7LIy5NEBAjL.sfMK0ekh0zLBCBj/TJyujoMVEo.O68u',
            )
        );
        
        $jobsDemo = [
            array(
                'companyName' => 'Michal Pe??at',
                'companyId' => '74885570',
                'companyContactEmail' => 'pesatmichal@seznam.cz',
                'companyContactPhone' => '608747877',
                'publishContact' => '1',
                'publishTime' => '14',
                'positionName' => 'Ukl??ze??ka pro obchod',
                'positionDesc' => 'Obchod cca 20m2',
                'positionAddress' => 'Jind??icha Buben????ka 1598/5',
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
                'companyName' => 'Michal Pe??at',
                'companyId' => '74885570',
                'companyContactEmail' => 'pesatmichal@seznam.cz',
                'companyContactPhone' => '608747877',
                'publishContact' => '1',
                'publishTime' => '14',
                'positionName' => 'Hl??d??n?? d??t??',
                'positionDesc' => '12 a 10 let',
                'positionAddress' => 'Do Kope??ka 37',
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
                'categoryName' => '??????n??k',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Pokladn??',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Skladn??k',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Serv??rka',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Pomocn?? pr??ce',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Restaurace',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Str????n??',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Logistika',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'D??ln??k',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'U??itel',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Automechanik',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'V??roba a pr??mysl',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Potravin????stv??',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Slu??by',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Zem??d??lstv??, lesnictv??',
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
                'categoryName' => 'Stavebnictv??',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Z??kaznick?? servis',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Vr??tn??',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => '??emesln?? ??innosti',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'St??hov??n??',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
            array(
                'categoryName' => 'Manu??ln?? pr??ce',
                'categoryDescription' => '',
                'categoryStatus' => '1',
            ),
           array(
               'categoryName' => 'Jin?? / Ostatn?? / Neza??azen??',
               'categoryDescription' => '',
               'categoryStatus' => '1',
           ),
           array(
                  'categoryName' => '??klid',
                  'categoryDescription' => '',
                  'categoryStatus' => '1',
              ),
        array(
               'categoryName' => '??dr??ba nemovitost??',
               'categoryDescription' => '',
               'categoryStatus' => '1',
           ),
         array(
             'categoryName' => '??vadlena',
             'categoryDescription' => '',
             'categoryStatus' => '1',
         ),
         array(
              'categoryName' => 'Hl??d??n?? d??t??',
              'categoryDescription' => '',
              'categoryStatus' => '1',
          ),
          array(
               'categoryName' => 'Kucha??',
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
