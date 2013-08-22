<?php



/**
 * This class defines the structure of the 'pac_tracking_library' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.vendor/project-a/marketing-package/ProjectA/Zed/Tracking/Persistence.map
 */
class Generated_Zed_Tracking_Persistence_Map_PacTrackingLibraryTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'project/Generated/Zed/Tracking/Persistence.Map.PacTrackingLibraryTableMap';

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
        $this->setName('pac_tracking_library');
        $this->setPhpName('PacTrackingLibrary');
        $this->setClassname('ProjectA_Zed_Tracking_Persistence_PacTrackingLibrary');
        $this->setPackage('vendor/project-a/marketing-package/ProjectA/Zed/Tracking/Persistence');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_tracking_library', 'IdTrackingLibrary', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
        $this->addForeignKey('fk_tracking_pixel_type', 'FkTrackingPixelType', 'INTEGER', 'pac_tracking_pixel_type', 'id_tracking_pixel_type', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('TrackingPixelType', 'ProjectA_Zed_Tracking_Persistence_PacTrackingPixelType', RelationMap::MANY_TO_ONE, array('fk_tracking_pixel_type' => 'id_tracking_pixel_type', ), null, null);
        $this->addRelation('TrackingLibraryCode', 'ProjectA_Zed_Tracking_Persistence_PacTrackingLibraryCode', RelationMap::ONE_TO_MANY, array('id_tracking_library' => 'fk_tracking_library', ), null, null, 'TrackingLibraryCodes');
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
            'lumberjack' =>  array (
),
            'changepaldefaults' =>  array (
),
        );
    } // getBehaviors()

} // Generated_Zed_Tracking_Persistence_Map_PacTrackingLibraryTableMap
