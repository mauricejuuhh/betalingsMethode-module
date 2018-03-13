<?php


namespace Betalingsmethodecheck\Betalingsmethode\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\InstallSchemaInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * {@inheritdoc}
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();

        $table_betalingsmethodecheck_betalingsmethode_betlaingsmthode = $setup->getConnection()->newTable($setup->getTable('betalingsmethodecheck_betalingsmethode_betlaingsmthode'));

        
        $table_betalingsmethodecheck_betalingsmethode_betlaingsmthode->addColumn(
            'betlaingsmthode_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            array('identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,),
            'Entity ID'
        );
        

        
        $table_betalingsmethodecheck_betalingsmethode_betlaingsmthode->addColumn(
            'betlaingsmethode',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'betlaingsmethode'
        );
        

        $setup->getConnection()->createTable($table_betalingsmethodecheck_betalingsmethode_betlaingsmthode);

        $setup->endSetup();
    }
}
