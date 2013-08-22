<?php



/**
 * This class defines the structure of the 'pac_acl_role_privilege' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.vendor/project-a/acl-package/ProjectA/Zed/Acl/Persistence.map
 */
class Generated_Zed_Acl_Persistence_Map_PacAclRolePrivilegeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'project/Generated/Zed/Acl/Persistence.Map.PacAclRolePrivilegeTableMap';

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
        $this->setName('pac_acl_role_privilege');
        $this->setPhpName('PacAclRolePrivilege');
        $this->setClassname('ProjectA_Zed_Acl_Persistence_PacAclRolePrivilege');
        $this->setPackage('vendor/project-a/acl-package/ProjectA/Zed/Acl/Persistence');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_acl_role_privilege', 'IdAclRolePrivilege', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_acl_role', 'FkAclRole', 'INTEGER', 'pac_acl_role', 'id_acl_role', true, null, null);
        $this->addForeignKey('fk_acl_resource', 'FkAclResource', 'INTEGER', 'pac_acl_resource', 'id_acl_resource', true, null, null);
        $this->addForeignKey('fk_acl_privilege', 'FkAclPrivilege', 'INTEGER', 'pac_acl_privilege', 'id_acl_privilege', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('AclRole', 'ProjectA_Zed_Acl_Persistence_PacAclRole', RelationMap::MANY_TO_ONE, array('fk_acl_role' => 'id_acl_role', ), null, null);
        $this->addRelation('AclResource', 'ProjectA_Zed_Acl_Persistence_PacAclResource', RelationMap::MANY_TO_ONE, array('fk_acl_resource' => 'id_acl_resource', ), null, null);
        $this->addRelation('AclPrivilege', 'ProjectA_Zed_Acl_Persistence_PacAclPrivilege', RelationMap::MANY_TO_ONE, array('fk_acl_privilege' => 'id_acl_privilege', ), null, null);
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

} // Generated_Zed_Acl_Persistence_Map_PacAclRolePrivilegeTableMap
