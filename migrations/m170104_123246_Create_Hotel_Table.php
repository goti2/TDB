<?php

use yii\db\Migration;

class m170104_123246_Create_Hotel_Table extends Migration
{
    public function up()
    {
        $this->createTable('{{%hotel}}', [
            'id' => $this->primaryKey()->unsigned(),
            'city_id' => $this->integer()->unsigned()->notNull(),
            'name' => $this->string(32)->unique()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%hotel}}');
    }
}
