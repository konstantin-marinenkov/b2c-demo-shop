<?php


/**
 * Base class that represents a row from the 'pac_salesrule_code' table.
 *
 *
 *
 * @package    propel.generator.vendor/project-a/checkout-package/ProjectA/Zed/Salesrule/Persistence.om
 */
abstract class Generated_Zed_Salesrule_Persistence_Om_BasePacSalesruleCode extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_salesrule_code field.
     * @var        int
     */
    protected $id_salesrule_code;

    /**
     * The value for the fk_salesrule_codepool field.
     * @var        int
     */
    protected $fk_salesrule_codepool;

    /**
     * The value for the fk_customer field.
     * @var        int
     */
    protected $fk_customer;

    /**
     * The value for the code field.
     * @var        string
     */
    protected $code;

    /**
     * The value for the is_active field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $is_active;

    /**
     * The value for the created_at field.
     * @var        string
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     * @var        string
     */
    protected $updated_at;

    /**
     * @var        PacSalesruleCodepool
     */
    protected $aCodepool;

    /**
     * @var        PacCustomer
     */
    protected $aCustomer;

    /**
     * @var        PropelObjectCollection|ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage[] Collection to store aggregation of ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage objects.
     */
    protected $collCodeUsages;
    protected $collCodeUsagesPartial;

    /**
     * @var        PropelObjectCollection|Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode[] Collection to store aggregation of Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode objects.
     */
    protected $collSaoMailSequenceCartUserCodes;
    protected $collSaoMailSequenceCartUserCodesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $codeUsagesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $saoMailSequenceCartUserCodesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->is_active = 1;
    }

    /**
     * Initializes internal state of Generated_Zed_Salesrule_Persistence_Om_BasePacSalesruleCode object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_salesrule_code] column value.
     *
     * @return int
     */
    public function getIdSalesruleCode()
    {
        return $this->id_salesrule_code;
    }

    /**
     * Get the [fk_salesrule_codepool] column value.
     *
     * @return int
     */
    public function getFkSalesruleCodepool()
    {
        return $this->fk_salesrule_codepool;
    }

    /**
     * Get the [fk_customer] column value.
     *
     * @return int
     */
    public function getFkCustomer()
    {
        return $this->fk_customer;
    }

    /**
     * Get the [code] column value.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the [is_active] column value.
     *
     * @return int
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCreatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->created_at === null) {
            return null;
        }

        if ($this->created_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->created_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUpdatedAt($format = 'Y-m-d H:i:s')
    {
        if ($this->updated_at === null) {
            return null;
        }

        if ($this->updated_at === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->updated_at);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Set the value of [id_salesrule_code] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function setIdSalesruleCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_salesrule_code !== $v) {
            $this->id_salesrule_code = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::ID_SALESRULE_CODE;
        }


        return $this;
    } // setIdSalesruleCode()

    /**
     * Set the value of [fk_salesrule_codepool] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function setFkSalesruleCodepool($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_salesrule_codepool !== $v) {
            $this->fk_salesrule_codepool = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::FK_SALESRULE_CODEPOOL;
        }

        if ($this->aCodepool !== null && $this->aCodepool->getIdSalesruleCodepool() !== $v) {
            $this->aCodepool = null;
        }


        return $this;
    } // setFkSalesruleCodepool()

    /**
     * Set the value of [fk_customer] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function setFkCustomer($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_customer !== $v) {
            $this->fk_customer = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::FK_CUSTOMER;
        }

        if ($this->aCustomer !== null && $this->aCustomer->getIdCustomer() !== $v) {
            $this->aCustomer = null;
        }


        return $this;
    } // setFkCustomer()

    /**
     * Set the value of [code] column.
     *
     * @param string $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function setCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code !== $v) {
            $this->code = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::CODE;
        }


        return $this;
    } // setCode()

    /**
     * Set the value of [is_active] column.
     *
     * @param int $v new value
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function setIsActive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->is_active !== $v) {
            $this->is_active = $v;
            $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::IS_ACTIVE;
        }


        return $this;
    } // setIsActive()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::UPDATED_AT;
            }
        } // if either are not null


        return $this;
    } // setUpdatedAt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->is_active !== 1) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_salesrule_code = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_salesrule_codepool = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->fk_customer = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->code = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->is_active = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->created_at = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->updated_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 7; // 7 = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aCodepool !== null && $this->fk_salesrule_codepool !== $this->aCodepool->getIdSalesruleCodepool()) {
            $this->aCodepool = null;
        }
        if ($this->aCustomer !== null && $this->fk_customer !== $this->aCustomer->getIdCustomer()) {
            $this->aCustomer = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCodepool = null;
            $this->aCustomer = null;
            $this->collCodeUsages = null;

            $this->collSaoMailSequenceCartUserCodes = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // lumberjack behavior
                
                if ($affectedRows > 0) {
                    $blacklistedEntities = array (
                );
                
                    if (!in_array(get_class($this), $blacklistedEntities)) {
                        $id = $this->getPrimaryKey();
                        $id = is_null($id) ? 0 : $id;
                
                        // Fix an issue when having multiple primary keys
                        if (is_array($id)) {
                            $id = implode(',', $id);
                        }
                
                        $lumberjack = ProjectA_Shared_Lumberjack_Code_Lumberjack::getInstance();
                        $lumberjack->addField("entityData", $this->toArray());
                        $lumberjack->addField("entity", get_class($this));
                        $lumberjack->addField("entityId", $id);
                        $lumberjack->addField("affectedRows", $affectedRows);
                
                        $authIdentity = ProjectA_Zed_Auth_Component_Model_Auth::getInstance()->getIdentity();
                        if (isset($authIdentity) && $authIdentity instanceof ProjectA_Zed_Acl_Persistence_PacAclUser) {
                            $lumberjack->addField("aclUserName", $authIdentity->getUsername());
                        }
                
                        $subType = $isInsert ? "insert" : "update";
                        $lumberjack->send(ProjectA_Shared_Lumberjack_Code_Log_Types::SAVE, get_class($this) . " id:" . $id . " " . $subType, $subType);
                    }
                }

                ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCodepool !== null) {
                if ($this->aCodepool->isModified() || $this->aCodepool->isNew()) {
                    $affectedRows += $this->aCodepool->save($con);
                }
                $this->setCodepool($this->aCodepool);
            }

            if ($this->aCustomer !== null) {
                if ($this->aCustomer->isModified() || $this->aCustomer->isNew()) {
                    $affectedRows += $this->aCustomer->save($con);
                }
                $this->setCustomer($this->aCustomer);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            if ($this->codeUsagesScheduledForDeletion !== null) {
                if (!$this->codeUsagesScheduledForDeletion->isEmpty()) {
                    ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsageQuery::create()
                        ->filterByPrimaryKeys($this->codeUsagesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->codeUsagesScheduledForDeletion = null;
                }
            }

            if ($this->collCodeUsages !== null) {
                foreach ($this->collCodeUsages as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->saoMailSequenceCartUserCodesScheduledForDeletion !== null) {
                if (!$this->saoMailSequenceCartUserCodesScheduledForDeletion->isEmpty()) {
                    Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCodeQuery::create()
                        ->filterByPrimaryKeys($this->saoMailSequenceCartUserCodesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->saoMailSequenceCartUserCodesScheduledForDeletion = null;
                }
            }

            if ($this->collSaoMailSequenceCartUserCodes !== null) {
                foreach ($this->collSaoMailSequenceCartUserCodes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::ID_SALESRULE_CODE;
        if (null !== $this->id_salesrule_code) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::ID_SALESRULE_CODE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::ID_SALESRULE_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`id_salesrule_code`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::FK_SALESRULE_CODEPOOL)) {
            $modifiedColumns[':p' . $index++]  = '`fk_salesrule_codepool`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::FK_CUSTOMER)) {
            $modifiedColumns[':p' . $index++]  = '`fk_customer`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::CODE)) {
            $modifiedColumns[':p' . $index++]  = '`code`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::IS_ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`is_active`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `pac_salesrule_code` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_salesrule_code`':
                        $stmt->bindValue($identifier, $this->id_salesrule_code, PDO::PARAM_INT);
                        break;
                    case '`fk_salesrule_codepool`':
                        $stmt->bindValue($identifier, $this->fk_salesrule_codepool, PDO::PARAM_INT);
                        break;
                    case '`fk_customer`':
                        $stmt->bindValue($identifier, $this->fk_customer, PDO::PARAM_INT);
                        break;
                    case '`code`':
                        $stmt->bindValue($identifier, $this->code, PDO::PARAM_STR);
                        break;
                    case '`is_active`':
                        $stmt->bindValue($identifier, $this->is_active, PDO::PARAM_INT);
                        break;
                    case '`created_at`':
                        $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
                        break;
                    case '`updated_at`':
                        $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdSalesruleCode($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCodepool !== null) {
                if (!$this->aCodepool->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCodepool->getValidationFailures());
                }
            }

            if ($this->aCustomer !== null) {
                if (!$this->aCustomer->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCustomer->getValidationFailures());
                }
            }


            if (($retval = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCodeUsages !== null) {
                    foreach ($this->collCodeUsages as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSaoMailSequenceCartUserCodes !== null) {
                    foreach ($this->collSaoMailSequenceCartUserCodes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }


            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdSalesruleCode();
                break;
            case 1:
                return $this->getFkSalesruleCodepool();
                break;
            case 2:
                return $this->getFkCustomer();
                break;
            case 3:
                return $this->getCode();
                break;
            case 4:
                return $this->getIsActive();
                break;
            case 5:
                return $this->getCreatedAt();
                break;
            case 6:
                return $this->getUpdatedAt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_FIELDNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode'][$this->getPrimaryKey()] = true;
        $keys = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdSalesruleCode(),
            $keys[1] => $this->getFkSalesruleCodepool(),
            $keys[2] => $this->getFkCustomer(),
            $keys[3] => $this->getCode(),
            $keys[4] => $this->getIsActive(),
            $keys[5] => $this->getCreatedAt(),
            $keys[6] => $this->getUpdatedAt(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCodepool) {
                $result['Codepool'] = $this->aCodepool->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCustomer) {
                $result['Customer'] = $this->aCustomer->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCodeUsages) {
                $result['CodeUsages'] = $this->collCodeUsages->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSaoMailSequenceCartUserCodes) {
                $result['SaoMailSequenceCartUserCodes'] = $this->collSaoMailSequenceCartUserCodes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdSalesruleCode($value);
                break;
            case 1:
                $this->setFkSalesruleCodepool($value);
                break;
            case 2:
                $this->setFkCustomer($value);
                break;
            case 3:
                $this->setCode($value);
                break;
            case 4:
                $this->setIsActive($value);
                break;
            case 5:
                $this->setCreatedAt($value);
                break;
            case 6:
                $this->setUpdatedAt($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_FIELDNAME)
    {
        $keys = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdSalesruleCode($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkSalesruleCodepool($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setFkCustomer($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCode($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIsActive($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCreatedAt($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setUpdatedAt($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::DATABASE_NAME);

        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::ID_SALESRULE_CODE)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::ID_SALESRULE_CODE, $this->id_salesrule_code);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::FK_SALESRULE_CODEPOOL)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::FK_SALESRULE_CODEPOOL, $this->fk_salesrule_codepool);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::FK_CUSTOMER)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::FK_CUSTOMER, $this->fk_customer);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::CODE)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::CODE, $this->code);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::IS_ACTIVE)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::IS_ACTIVE, $this->is_active);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::CREATED_AT)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::UPDATED_AT)) $criteria->add(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::UPDATED_AT, $this->updated_at);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::DATABASE_NAME);
        $criteria->add(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::ID_SALESRULE_CODE, $this->id_salesrule_code);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdSalesruleCode();
    }

    /**
     * Generic method to set the primary key (id_salesrule_code column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdSalesruleCode($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdSalesruleCode();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkSalesruleCodepool($this->getFkSalesruleCodepool());
        $copyObj->setFkCustomer($this->getFkCustomer());
        $copyObj->setCode($this->getCode());
        $copyObj->setIsActive($this->getIsActive());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCodeUsages() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCodeUsage($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSaoMailSequenceCartUserCodes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSaoMailSequenceCartUserCode($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdSalesruleCode(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodepool object.
     *
     * @param             ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodepool $v
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCodepool(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodepool $v = null)
    {
        if ($v === null) {
            $this->setFkSalesruleCodepool(NULL);
        } else {
            $this->setFkSalesruleCodepool($v->getIdSalesruleCodepool());
        }

        $this->aCodepool = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodepool object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesruleCode($this);
        }


        return $this;
    }


    /**
     * Get the associated ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodepool object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodepool The associated ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodepool object.
     * @throws PropelException
     */
    public function getCodepool(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCodepool === null && ($this->fk_salesrule_codepool !== null) && $doQuery) {
            $this->aCodepool = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodepoolQuery::create()->findPk($this->fk_salesrule_codepool, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCodepool->addSalesruleCodes($this);
             */
        }

        return $this->aCodepool;
    }

    /**
     * Declares an association between this object and a ProjectA_Zed_Customer_Persistence_PacCustomer object.
     *
     * @param             ProjectA_Zed_Customer_Persistence_PacCustomer $v
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCustomer(ProjectA_Zed_Customer_Persistence_PacCustomer $v = null)
    {
        if ($v === null) {
            $this->setFkCustomer(NULL);
        } else {
            $this->setFkCustomer($v->getIdCustomer());
        }

        $this->aCustomer = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ProjectA_Zed_Customer_Persistence_PacCustomer object, it will not be re-added.
        if ($v !== null) {
            $v->addSalesruleCode($this);
        }


        return $this;
    }


    /**
     * Get the associated ProjectA_Zed_Customer_Persistence_PacCustomer object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ProjectA_Zed_Customer_Persistence_PacCustomer The associated ProjectA_Zed_Customer_Persistence_PacCustomer object.
     * @throws PropelException
     */
    public function getCustomer(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCustomer === null && ($this->fk_customer !== null) && $doQuery) {
            $this->aCustomer = ProjectA_Zed_Customer_Persistence_PacCustomerQuery::create()->findPk($this->fk_customer, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCustomer->addSalesruleCodes($this);
             */
        }

        return $this->aCustomer;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CodeUsage' == $relationName) {
            $this->initCodeUsages();
        }
        if ('SaoMailSequenceCartUserCode' == $relationName) {
            $this->initSaoMailSequenceCartUserCodes();
        }
    }

    /**
     * Clears out the collCodeUsages collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     * @see        addCodeUsages()
     */
    public function clearCodeUsages()
    {
        $this->collCodeUsages = null; // important to set this to null since that means it is uninitialized
        $this->collCodeUsagesPartial = null;

        return $this;
    }

    /**
     * reset is the collCodeUsages collection loaded partially
     *
     * @return void
     */
    public function resetPartialCodeUsages($v = true)
    {
        $this->collCodeUsagesPartial = $v;
    }

    /**
     * Initializes the collCodeUsages collection.
     *
     * By default this just sets the collCodeUsages collection to an empty array (like clearcollCodeUsages());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCodeUsages($overrideExisting = true)
    {
        if (null !== $this->collCodeUsages && !$overrideExisting) {
            return;
        }
        $this->collCodeUsages = new PropelObjectCollection();
        $this->collCodeUsages->setModel('ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage');
    }

    /**
     * Gets an array of ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage[] List of ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage objects
     * @throws PropelException
     */
    public function getCodeUsages($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCodeUsagesPartial && !$this->isNew();
        if (null === $this->collCodeUsages || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCodeUsages) {
                // return empty collection
                $this->initCodeUsages();
            } else {
                $collCodeUsages = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsageQuery::create(null, $criteria)
                    ->filterByCode($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCodeUsagesPartial && count($collCodeUsages)) {
                      $this->initCodeUsages(false);

                      foreach($collCodeUsages as $obj) {
                        if (false == $this->collCodeUsages->contains($obj)) {
                          $this->collCodeUsages->append($obj);
                        }
                      }

                      $this->collCodeUsagesPartial = true;
                    }

                    $collCodeUsages->getInternalIterator()->rewind();
                    return $collCodeUsages;
                }

                if($partial && $this->collCodeUsages) {
                    foreach($this->collCodeUsages as $obj) {
                        if($obj->isNew()) {
                            $collCodeUsages[] = $obj;
                        }
                    }
                }

                $this->collCodeUsages = $collCodeUsages;
                $this->collCodeUsagesPartial = false;
            }
        }

        return $this->collCodeUsages;
    }

    /**
     * Sets a collection of CodeUsage objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $codeUsages A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function setCodeUsages(PropelCollection $codeUsages, PropelPDO $con = null)
    {
        $codeUsagesToDelete = $this->getCodeUsages(new Criteria(), $con)->diff($codeUsages);

        $this->codeUsagesScheduledForDeletion = unserialize(serialize($codeUsagesToDelete));

        foreach ($codeUsagesToDelete as $codeUsageRemoved) {
            $codeUsageRemoved->setCode(null);
        }

        $this->collCodeUsages = null;
        foreach ($codeUsages as $codeUsage) {
            $this->addCodeUsage($codeUsage);
        }

        $this->collCodeUsages = $codeUsages;
        $this->collCodeUsagesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage objects.
     * @throws PropelException
     */
    public function countCodeUsages(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCodeUsagesPartial && !$this->isNew();
        if (null === $this->collCodeUsages || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCodeUsages) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getCodeUsages());
            }
            $query = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsageQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCode($this)
                ->count($con);
        }

        return count($this->collCodeUsages);
    }

    /**
     * Method called to associate a ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage object to this object
     * through the ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage foreign key attribute.
     *
     * @param    ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage $l ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function addCodeUsage(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage $l)
    {
        if ($this->collCodeUsages === null) {
            $this->initCodeUsages();
            $this->collCodeUsagesPartial = true;
        }
        if (!in_array($l, $this->collCodeUsages->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCodeUsage($l);
        }

        return $this;
    }

    /**
     * @param	CodeUsage $codeUsage The codeUsage object to add.
     */
    protected function doAddCodeUsage($codeUsage)
    {
        $this->collCodeUsages[]= $codeUsage;
        $codeUsage->setCode($this);
    }

    /**
     * @param	CodeUsage $codeUsage The codeUsage object to remove.
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function removeCodeUsage($codeUsage)
    {
        if ($this->getCodeUsages()->contains($codeUsage)) {
            $this->collCodeUsages->remove($this->collCodeUsages->search($codeUsage));
            if (null === $this->codeUsagesScheduledForDeletion) {
                $this->codeUsagesScheduledForDeletion = clone $this->collCodeUsages;
                $this->codeUsagesScheduledForDeletion->clear();
            }
            $this->codeUsagesScheduledForDeletion[]= clone $codeUsage;
            $codeUsage->setCode(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PacSalesruleCode is new, it will return
     * an empty collection; or if this PacSalesruleCode has previously
     * been saved, it will retrieve related CodeUsages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PacSalesruleCode.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage[] List of ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage objects
     */
    public function getCodeUsagesJoinCustomer($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsageQuery::create(null, $criteria);
        $query->joinWith('Customer', $join_behavior);

        return $this->getCodeUsages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PacSalesruleCode is new, it will return
     * an empty collection; or if this PacSalesruleCode has previously
     * been saved, it will retrieve related CodeUsages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PacSalesruleCode.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage[] List of ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsage objects
     */
    public function getCodeUsagesJoinOrder($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodeUsageQuery::create(null, $criteria);
        $query->joinWith('Order', $join_behavior);

        return $this->getCodeUsages($query, $con);
    }

    /**
     * Clears out the collSaoMailSequenceCartUserCodes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     * @see        addSaoMailSequenceCartUserCodes()
     */
    public function clearSaoMailSequenceCartUserCodes()
    {
        $this->collSaoMailSequenceCartUserCodes = null; // important to set this to null since that means it is uninitialized
        $this->collSaoMailSequenceCartUserCodesPartial = null;

        return $this;
    }

    /**
     * reset is the collSaoMailSequenceCartUserCodes collection loaded partially
     *
     * @return void
     */
    public function resetPartialSaoMailSequenceCartUserCodes($v = true)
    {
        $this->collSaoMailSequenceCartUserCodesPartial = $v;
    }

    /**
     * Initializes the collSaoMailSequenceCartUserCodes collection.
     *
     * By default this just sets the collSaoMailSequenceCartUserCodes collection to an empty array (like clearcollSaoMailSequenceCartUserCodes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSaoMailSequenceCartUserCodes($overrideExisting = true)
    {
        if (null !== $this->collSaoMailSequenceCartUserCodes && !$overrideExisting) {
            return;
        }
        $this->collSaoMailSequenceCartUserCodes = new PropelObjectCollection();
        $this->collSaoMailSequenceCartUserCodes->setModel('Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode');
    }

    /**
     * Gets an array of Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode[] List of Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode objects
     * @throws PropelException
     */
    public function getSaoMailSequenceCartUserCodes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSaoMailSequenceCartUserCodesPartial && !$this->isNew();
        if (null === $this->collSaoMailSequenceCartUserCodes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSaoMailSequenceCartUserCodes) {
                // return empty collection
                $this->initSaoMailSequenceCartUserCodes();
            } else {
                $collSaoMailSequenceCartUserCodes = Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCodeQuery::create(null, $criteria)
                    ->filterBySalesruleCode($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSaoMailSequenceCartUserCodesPartial && count($collSaoMailSequenceCartUserCodes)) {
                      $this->initSaoMailSequenceCartUserCodes(false);

                      foreach($collSaoMailSequenceCartUserCodes as $obj) {
                        if (false == $this->collSaoMailSequenceCartUserCodes->contains($obj)) {
                          $this->collSaoMailSequenceCartUserCodes->append($obj);
                        }
                      }

                      $this->collSaoMailSequenceCartUserCodesPartial = true;
                    }

                    $collSaoMailSequenceCartUserCodes->getInternalIterator()->rewind();
                    return $collSaoMailSequenceCartUserCodes;
                }

                if($partial && $this->collSaoMailSequenceCartUserCodes) {
                    foreach($this->collSaoMailSequenceCartUserCodes as $obj) {
                        if($obj->isNew()) {
                            $collSaoMailSequenceCartUserCodes[] = $obj;
                        }
                    }
                }

                $this->collSaoMailSequenceCartUserCodes = $collSaoMailSequenceCartUserCodes;
                $this->collSaoMailSequenceCartUserCodesPartial = false;
            }
        }

        return $this->collSaoMailSequenceCartUserCodes;
    }

    /**
     * Sets a collection of SaoMailSequenceCartUserCode objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $saoMailSequenceCartUserCodes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function setSaoMailSequenceCartUserCodes(PropelCollection $saoMailSequenceCartUserCodes, PropelPDO $con = null)
    {
        $saoMailSequenceCartUserCodesToDelete = $this->getSaoMailSequenceCartUserCodes(new Criteria(), $con)->diff($saoMailSequenceCartUserCodes);

        $this->saoMailSequenceCartUserCodesScheduledForDeletion = unserialize(serialize($saoMailSequenceCartUserCodesToDelete));

        foreach ($saoMailSequenceCartUserCodesToDelete as $saoMailSequenceCartUserCodeRemoved) {
            $saoMailSequenceCartUserCodeRemoved->setSalesruleCode(null);
        }

        $this->collSaoMailSequenceCartUserCodes = null;
        foreach ($saoMailSequenceCartUserCodes as $saoMailSequenceCartUserCode) {
            $this->addSaoMailSequenceCartUserCode($saoMailSequenceCartUserCode);
        }

        $this->collSaoMailSequenceCartUserCodes = $saoMailSequenceCartUserCodes;
        $this->collSaoMailSequenceCartUserCodesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode objects.
     * @throws PropelException
     */
    public function countSaoMailSequenceCartUserCodes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSaoMailSequenceCartUserCodesPartial && !$this->isNew();
        if (null === $this->collSaoMailSequenceCartUserCodes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSaoMailSequenceCartUserCodes) {
                return 0;
            }

            if($partial && !$criteria) {
                return count($this->getSaoMailSequenceCartUserCodes());
            }
            $query = Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCodeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySalesruleCode($this)
                ->count($con);
        }

        return count($this->collSaoMailSequenceCartUserCodes);
    }

    /**
     * Method called to associate a Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode object to this object
     * through the Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode foreign key attribute.
     *
     * @param    Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode $l Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function addSaoMailSequenceCartUserCode(Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode $l)
    {
        if ($this->collSaoMailSequenceCartUserCodes === null) {
            $this->initSaoMailSequenceCartUserCodes();
            $this->collSaoMailSequenceCartUserCodesPartial = true;
        }
        if (!in_array($l, $this->collSaoMailSequenceCartUserCodes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSaoMailSequenceCartUserCode($l);
        }

        return $this;
    }

    /**
     * @param	SaoMailSequenceCartUserCode $saoMailSequenceCartUserCode The saoMailSequenceCartUserCode object to add.
     */
    protected function doAddSaoMailSequenceCartUserCode($saoMailSequenceCartUserCode)
    {
        $this->collSaoMailSequenceCartUserCodes[]= $saoMailSequenceCartUserCode;
        $saoMailSequenceCartUserCode->setSalesruleCode($this);
    }

    /**
     * @param	SaoMailSequenceCartUserCode $saoMailSequenceCartUserCode The saoMailSequenceCartUserCode object to remove.
     * @return ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function removeSaoMailSequenceCartUserCode($saoMailSequenceCartUserCode)
    {
        if ($this->getSaoMailSequenceCartUserCodes()->contains($saoMailSequenceCartUserCode)) {
            $this->collSaoMailSequenceCartUserCodes->remove($this->collSaoMailSequenceCartUserCodes->search($saoMailSequenceCartUserCode));
            if (null === $this->saoMailSequenceCartUserCodesScheduledForDeletion) {
                $this->saoMailSequenceCartUserCodesScheduledForDeletion = clone $this->collSaoMailSequenceCartUserCodes;
                $this->saoMailSequenceCartUserCodesScheduledForDeletion->clear();
            }
            $this->saoMailSequenceCartUserCodesScheduledForDeletion[]= clone $saoMailSequenceCartUserCode;
            $saoMailSequenceCartUserCode->setSalesruleCode(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PacSalesruleCode is new, it will return
     * an empty collection; or if this PacSalesruleCode has previously
     * been saved, it will retrieve related SaoMailSequenceCartUserCodes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PacSalesruleCode.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode[] List of Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode objects
     */
    public function getSaoMailSequenceCartUserCodesJoinCartUser($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCodeQuery::create(null, $criteria);
        $query->joinWith('CartUser', $join_behavior);

        return $this->getSaoMailSequenceCartUserCodes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PacSalesruleCode is new, it will return
     * an empty collection; or if this PacSalesruleCode has previously
     * been saved, it will retrieve related SaoMailSequenceCartUserCodes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PacSalesruleCode.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode[] List of Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode objects
     */
    public function getSaoMailSequenceCartUserCodesJoinMailSequence($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCodeQuery::create(null, $criteria);
        $query->joinWith('MailSequence', $join_behavior);

        return $this->getSaoMailSequenceCartUserCodes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this PacSalesruleCode is new, it will return
     * an empty collection; or if this PacSalesruleCode has previously
     * been saved, it will retrieve related SaoMailSequenceCartUserCodes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in PacSalesruleCode.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode[] List of Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCode objects
     */
    public function getSaoMailSequenceCartUserCodesJoinSalesruleCodepool($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = Sao_Zed_Mail_Persistence_SaoMailSequenceCartUserCodeQuery::create(null, $criteria);
        $query->joinWith('SalesruleCodepool', $join_behavior);

        return $this->getSaoMailSequenceCartUserCodes($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_salesrule_code = null;
        $this->fk_salesrule_codepool = null;
        $this->fk_customer = null;
        $this->code = null;
        $this->is_active = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->collCodeUsages) {
                foreach ($this->collCodeUsages as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSaoMailSequenceCartUserCodes) {
                foreach ($this->collSaoMailSequenceCartUserCodes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCodepool instanceof Persistent) {
              $this->aCodepool->clearAllReferences($deep);
            }
            if ($this->aCustomer instanceof Persistent) {
              $this->aCustomer->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCodeUsages instanceof PropelCollection) {
            $this->collCodeUsages->clearIterator();
        }
        $this->collCodeUsages = null;
        if ($this->collSaoMailSequenceCartUserCodes instanceof PropelCollection) {
            $this->collSaoMailSequenceCartUserCodes->clearIterator();
        }
        $this->collSaoMailSequenceCartUserCodes = null;
        $this->aCodepool = null;
        $this->aCustomer = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return     ProjectA_Zed_Salesrule_Persistence_PacSalesruleCode The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = ProjectA_Zed_Salesrule_Persistence_PacSalesruleCodePeer::UPDATED_AT;

        return $this;
    }

}
