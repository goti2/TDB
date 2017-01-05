<?php

use yii\db\Migration;

class m170104_123029_Create_Country_Table extends Migration
{
    public function up()
    {
        $this->createTable('{{%country}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(64)->notNull()->unique()
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%country}}');
    }
}
