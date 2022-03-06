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
            $table->string('positionDesc')->nullable();
            $table->string('positionAddress')->nullable();
            $table->string('categoryId')->nullable();
            $table->string('salaryFrom')->nullable();
            $table->string('salaryTo')->nullable();
            $table->string('jobType')->nullable();
            $table->string('status')->nullable();
            $table->string('status4employer')->nullable();
            $table->string('ip')->nullable();
            $table->string('email')->unique()->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('jobCategories', function (Blueprint $table) {
            $table->id();
            $table->string('categoryName');
            $table->string('categoryDescription');
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
