<?php

use yii\db\Migration;

class m170104_123042_Create_City_Table extends Migration
{
    public function up()
    {
        $this->createTable('{{%city}}', [
            'id' => $this->primaryKey()->unsigned(),
            'country_id' => $this->integer()->unsigned()->notNull(),
            'name' => $this->string(64)->notNull()->unique()
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%city}}');
    }
}
