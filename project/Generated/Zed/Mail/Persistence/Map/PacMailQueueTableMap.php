<?php



/**
 * This class defines the structure of the 'pac_mail_queue' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.vendor/project-a/crm-package/ProjectA/Zed/Mail/Persistence.map
 */
class Generated_Zed_Mail_Persistence_Map_PacMailQueueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'project/Generated/Zed/Mail/Persistence.Map.PacMailQueueTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('pac_mail_queue');
        $this->setPhpName('PacMailQueue');
        $this->setClassname('ProjectA_Zed_Mail_Persistence_PacMailQueue');
        $this->setPackage('vendor/project-a/crm-package/ProjectA/Zed/Mail/Persistence');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_mail_queue', 'IdMailQueue', 'INTEGER', true, null, null);
        $this->addColumn('mail_type', 'MailType', 'VARCHAR', true, 255, null);
        $this->addColumn('transfer_string', 'TransferString', 'LONGVARCHAR', true, null, null);
        $this->addColumn('reference_id', 'ReferenceId', 'INTEGER', true, null, null);
        $this->addColumn('sent', 'Sent', 'TINYINT', true, null, 0);
        $this->addColumn('send_tries', 'SendTries', 'INTEGER', true, 2, 0);
        $this->addColumn('last_response', 'LastResponse', 'CLOB', false, null, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'timestampable' =>  array (
  'create_column' => 'created_at',
  'update_column' => 'updated_at',
  'disable_updated_at' => 'false',
),
            'lumberjack' =>  array (
),
            'changepaldefaults' =>  array (
),
        );
    } // getBehaviors()

} // Generated_Zed_Mail_Persistence_Map_PacMailQueueTableMap
