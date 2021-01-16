<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210112_225207_companies
 */
class m210112_225207_companies extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        //Companies Table
        $this->createTable('{{%companies}}', [
            'companyID' => Schema::TYPE_PK,
            'companyName' => Schema::TYPE_STRING .' NOT NULL DEFAULT ""',
            'companyLocation' => Schema::TYPE_TEXT . ' NOT NULL DEFAULT ""',
            'companyEmail' => Schema::TYPE_STRING . ' NOT NULL',
            'companyPhone' => Schema::TYPE_INTEGER . ' NOT NULL',
            'employees' => Schema::TYPE_INTEGER . ' NOT NULL',
            'payment'=> Schema::TYPE_BOOLEAN . ' NOT NULL',
            'note'=> Schema::TYPE_TEXT ,
        ], $tableOptions);
        //Company Income Table
        $this->createTable('{{%companyOutgoing}}', [
            'id' => Schema::TYPE_PK,
            'incomeID' => Schema::TYPE_INTEGER . ' NOT NULL ',
            'month' => Schema::TYPE_INTEGER . ' NOT NULL ',
            'rent' => Schema::TYPE_FLOAT .' NOT NULL DEFAULT 0',
            'bills' => Schema::TYPE_FLOAT . ' NOT NULL DEFAULT 0',
            'salaries' => Schema::TYPE_FLOAT . ' NOT NULL DEFAULT 0',
            'cleaning' => Schema::TYPE_FLOAT . ' NOT NULL',
            'repairs' => Schema::TYPE_FLOAT . ' NOT NULL',
            'taxes'=> Schema::TYPE_FLOAT . ' NOT NULL',
            'other'=> Schema::TYPE_FLOAT ,
        ], $tableOptions);

        $this->addForeignKey("incomeID", "companyOutgoing", "incomeID", "companies", "companyID", "CASCADE", "RESTRICT" );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210112_225207_companies cannot be reverted.\n";
        $this->dropTable('{{%companies}}');
        $this->dropTable('{{%companyOutgoing}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210112_225207_companies cannot be reverted.\n";

        return false;
    }
    */
}
