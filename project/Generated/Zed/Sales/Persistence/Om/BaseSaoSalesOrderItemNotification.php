<?php


/**
 * Base class that represents a row from the 'sao_sales_order_item_notification' table.
 *
 *
 *
 * @package    propel.generator.project/Sao/Zed/Sales/Persistence.om
 */
abstract class Generated_Zed_Sales_Persistence_Om_BaseSaoSalesOrderItemNotification extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_sao_sales_order_item_notification field.
     * @var        int
     */
    protected $id_sao_sales_order_item_notification;

    /**
     * The value for the fk_sales_order_item field.
     * @var        int
     */
    protected $fk_sales_order_item;

    /**
     * The value for the hash field.
     * @var        string
     */
    protected $hash;

    /**
     * The value for the event field.
     * @var        string
     */
    protected $event;

    /**
     * The value for the event_triggered field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $event_triggered;

    /**
     * The value for the status field.
     * Note: this column has a database default value of: 2
     * @var        int
     */
    protected $status;

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
     * @var        PacSalesOrderItem
     */
    protected $aSalesOrderItem;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->event_triggered = 0;
        $this->status = 2;
    }

    /**
     * Initializes internal state of Generated_Zed_Sales_Persistence_Om_BaseSaoSalesOrderItemNotification object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_sao_sales_order_item_notification] column value.
     *
     * @return int
     */
    public function getIdSaoSalesOrderItemNotification()
    {
        return $this->id_sao_sales_order_item_notification;
    }

    /**
     * Get the [fk_sales_order_item] column value.
     *
     * @return int
     */
    public function getFkSalesOrderItem()
    {
        return $this->fk_sales_order_item;
    }

    /**
     * Get the [hash] column value.
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Get the [event] column value.
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Get the [event_triggered] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getEventTriggered()
    {
        if (null === $this->event_triggered) {
            return null;
        }
        $valueSet = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::getValueSet(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT_TRIGGERED);
        if (!isset($valueSet[$this->event_triggered])) {
            throw new PropelException('Unknown stored enum key: ' . $this->event_triggered);
        }

        return $valueSet[$this->event_triggered];
    }

    /**
     * Get the [status] column value.
     *
     * @return int
     * @throws PropelException - if the stored enum key is unknown.
     */
    public function getStatus()
    {
        if (null === $this->status) {
            return null;
        }
        $valueSet = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::getValueSet(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::STATUS);
        if (!isset($valueSet[$this->status])) {
            throw new PropelException('Unknown stored enum key: ' . $this->status);
        }

        return $valueSet[$this->status];
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
     * Set the value of [id_sao_sales_order_item_notification] column.
     *
     * @param int $v new value
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     */
    public function setIdSaoSalesOrderItemNotification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_sao_sales_order_item_notification !== $v) {
            $this->id_sao_sales_order_item_notification = $v;
            $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::ID_SAO_SALES_ORDER_ITEM_NOTIFICATION;
        }


        return $this;
    } // setIdSaoSalesOrderItemNotification()

    /**
     * Set the value of [fk_sales_order_item] column.
     *
     * @param int $v new value
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     */
    public function setFkSalesOrderItem($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->fk_sales_order_item !== $v) {
            $this->fk_sales_order_item = $v;
            $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::FK_SALES_ORDER_ITEM;
        }

        if ($this->aSalesOrderItem !== null && $this->aSalesOrderItem->getIdSalesOrderItem() !== $v) {
            $this->aSalesOrderItem = null;
        }


        return $this;
    } // setFkSalesOrderItem()

    /**
     * Set the value of [hash] column.
     *
     * @param string $v new value
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     */
    public function setHash($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->hash !== $v) {
            $this->hash = $v;
            $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::HASH;
        }


        return $this;
    } // setHash()

    /**
     * Set the value of [event] column.
     *
     * @param string $v new value
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     */
    public function setEvent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->event !== $v) {
            $this->event = $v;
            $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT;
        }


        return $this;
    } // setEvent()

    /**
     * Set the value of [event_triggered] column.
     *
     * @param int $v new value
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setEventTriggered($v)
    {
        if ($v !== null) {
            $valueSet = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::getValueSet(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT_TRIGGERED);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->event_triggered !== $v) {
            $this->event_triggered = $v;
            $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT_TRIGGERED;
        }


        return $this;
    } // setEventTriggered()

    /**
     * Set the value of [status] column.
     *
     * @param int $v new value
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     * @throws PropelException - if the value is not accepted by this enum.
     */
    public function setStatus($v)
    {
        if ($v !== null) {
            $valueSet = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::getValueSet(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::STATUS);
            if (!in_array($v, $valueSet)) {
                throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $v));
            }
            $v = array_search($v, $valueSet);
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->created_at = $newDateAsString;
                $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::CREATED_AT;
            }
        } // if either are not null


        return $this;
    } // setCreatedAt()

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->updated_at = $newDateAsString;
                $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::UPDATED_AT;
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
            if ($this->event_triggered !== 0) {
                return false;
            }

            if ($this->status !== 2) {
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

            $this->id_sao_sales_order_item_notification = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->fk_sales_order_item = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->hash = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->event = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->event_triggered = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->status = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->created_at = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->updated_at = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 8; // 8 = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification object", $e);
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

        if ($this->aSalesOrderItem !== null && $this->fk_sales_order_item !== $this->aSalesOrderItem->getIdSalesOrderItem()) {
            $this->aSalesOrderItem = null;
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
            $con = Propel::getConnection(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSalesOrderItem = null;
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
            $con = Propel::getConnection(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationQuery::create()
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
            $con = Propel::getConnection(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                if (!$this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::CREATED_AT)) {
                    $this->setCreatedAt(time());
                }
                if (!$this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::UPDATED_AT)) {
                    $this->setUpdatedAt(time());
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::UPDATED_AT)) {
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

                Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::addInstanceToPool($this);
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

            if ($this->aSalesOrderItem !== null) {
                if ($this->aSalesOrderItem->isModified() || $this->aSalesOrderItem->isNew()) {
                    $affectedRows += $this->aSalesOrderItem->save($con);
                }
                $this->setSalesOrderItem($this->aSalesOrderItem);
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

        $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::ID_SAO_SALES_ORDER_ITEM_NOTIFICATION;
        if (null !== $this->id_sao_sales_order_item_notification) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::ID_SAO_SALES_ORDER_ITEM_NOTIFICATION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::ID_SAO_SALES_ORDER_ITEM_NOTIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_sao_sales_order_item_notification`';
        }
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::FK_SALES_ORDER_ITEM)) {
            $modifiedColumns[':p' . $index++]  = '`fk_sales_order_item`';
        }
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::HASH)) {
            $modifiedColumns[':p' . $index++]  = '`hash`';
        }
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT)) {
            $modifiedColumns[':p' . $index++]  = '`event`';
        }
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT_TRIGGERED)) {
            $modifiedColumns[':p' . $index++]  = '`event_triggered`';
        }
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`status`';
        }
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`created_at`';
        }
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = '`updated_at`';
        }

        $sql = sprintf(
            'INSERT INTO `sao_sales_order_item_notification` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_sao_sales_order_item_notification`':
                        $stmt->bindValue($identifier, $this->id_sao_sales_order_item_notification, PDO::PARAM_INT);
                        break;
                    case '`fk_sales_order_item`':
                        $stmt->bindValue($identifier, $this->fk_sales_order_item, PDO::PARAM_INT);
                        break;
                    case '`hash`':
                        $stmt->bindValue($identifier, $this->hash, PDO::PARAM_STR);
                        break;
                    case '`event`':
                        $stmt->bindValue($identifier, $this->event, PDO::PARAM_STR);
                        break;
                    case '`event_triggered`':
                        $stmt->bindValue($identifier, $this->event_triggered, PDO::PARAM_INT);
                        break;
                    case '`status`':
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_INT);
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
        $this->setIdSaoSalesOrderItemNotification($pk);

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

            if ($this->aSalesOrderItem !== null) {
                if (!$this->aSalesOrderItem->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSalesOrderItem->getValidationFailures());
                }
            }


            if (($retval = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdSaoSalesOrderItemNotification();
                break;
            case 1:
                return $this->getFkSalesOrderItem();
                break;
            case 2:
                return $this->getHash();
                break;
            case 3:
                return $this->getEvent();
                break;
            case 4:
                return $this->getEventTriggered();
                break;
            case 5:
                return $this->getStatus();
                break;
            case 6:
                return $this->getCreatedAt();
                break;
            case 7:
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
        if (isset($alreadyDumpedObjects['Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification'][$this->getPrimaryKey()] = true;
        $keys = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdSaoSalesOrderItemNotification(),
            $keys[1] => $this->getFkSalesOrderItem(),
            $keys[2] => $this->getHash(),
            $keys[3] => $this->getEvent(),
            $keys[4] => $this->getEventTriggered(),
            $keys[5] => $this->getStatus(),
            $keys[6] => $this->getCreatedAt(),
            $keys[7] => $this->getUpdatedAt(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aSalesOrderItem) {
                $result['SalesOrderItem'] = $this->aSalesOrderItem->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdSaoSalesOrderItemNotification($value);
                break;
            case 1:
                $this->setFkSalesOrderItem($value);
                break;
            case 2:
                $this->setHash($value);
                break;
            case 3:
                $this->setEvent($value);
                break;
            case 4:
                $valueSet = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::getValueSet(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT_TRIGGERED);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setEventTriggered($value);
                break;
            case 5:
                $valueSet = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::getValueSet(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::STATUS);
                if (isset($valueSet[$value])) {
                    $value = $valueSet[$value];
                }
                $this->setStatus($value);
                break;
            case 6:
                $this->setCreatedAt($value);
                break;
            case 7:
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
        $keys = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdSaoSalesOrderItemNotification($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setFkSalesOrderItem($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setHash($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEvent($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEventTriggered($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStatus($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCreatedAt($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setUpdatedAt($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::DATABASE_NAME);

        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::ID_SAO_SALES_ORDER_ITEM_NOTIFICATION)) $criteria->add(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::ID_SAO_SALES_ORDER_ITEM_NOTIFICATION, $this->id_sao_sales_order_item_notification);
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::FK_SALES_ORDER_ITEM)) $criteria->add(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::FK_SALES_ORDER_ITEM, $this->fk_sales_order_item);
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::HASH)) $criteria->add(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::HASH, $this->hash);
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT)) $criteria->add(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT, $this->event);
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT_TRIGGERED)) $criteria->add(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::EVENT_TRIGGERED, $this->event_triggered);
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::STATUS)) $criteria->add(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::STATUS, $this->status);
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::CREATED_AT)) $criteria->add(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::CREATED_AT, $this->created_at);
        if ($this->isColumnModified(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::UPDATED_AT)) $criteria->add(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::UPDATED_AT, $this->updated_at);

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
        $criteria = new Criteria(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::DATABASE_NAME);
        $criteria->add(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::ID_SAO_SALES_ORDER_ITEM_NOTIFICATION, $this->id_sao_sales_order_item_notification);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdSaoSalesOrderItemNotification();
    }

    /**
     * Generic method to set the primary key (id_sao_sales_order_item_notification column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdSaoSalesOrderItemNotification($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdSaoSalesOrderItemNotification();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setFkSalesOrderItem($this->getFkSalesOrderItem());
        $copyObj->setHash($this->getHash());
        $copyObj->setEvent($this->getEvent());
        $copyObj->setEventTriggered($this->getEventTriggered());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdSaoSalesOrderItemNotification(NULL); // this is a auto-increment column, so set to default value
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
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification Clone of current object.
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
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a ProjectA_Zed_Sales_Persistence_PacSalesOrderItem object.
     *
     * @param             ProjectA_Zed_Sales_Persistence_PacSalesOrderItem $v
     * @return Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSalesOrderItem(ProjectA_Zed_Sales_Persistence_PacSalesOrderItem $v = null)
    {
        if ($v === null) {
            $this->setFkSalesOrderItem(NULL);
        } else {
            $this->setFkSalesOrderItem($v->getIdSalesOrderItem());
        }

        $this->aSalesOrderItem = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ProjectA_Zed_Sales_Persistence_PacSalesOrderItem object, it will not be re-added.
        if ($v !== null) {
            $v->addSaoSalesOrderItemNotification($this);
        }


        return $this;
    }


    /**
     * Get the associated ProjectA_Zed_Sales_Persistence_PacSalesOrderItem object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return ProjectA_Zed_Sales_Persistence_PacSalesOrderItem The associated ProjectA_Zed_Sales_Persistence_PacSalesOrderItem object.
     * @throws PropelException
     */
    public function getSalesOrderItem(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSalesOrderItem === null && ($this->fk_sales_order_item !== null) && $doQuery) {
            $this->aSalesOrderItem = ProjectA_Zed_Sales_Persistence_PacSalesOrderItemQuery::create()->findPk($this->fk_sales_order_item, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSalesOrderItem->addSaoSalesOrderItemNotifications($this);
             */
        }

        return $this->aSalesOrderItem;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_sao_sales_order_item_notification = null;
        $this->fk_sales_order_item = null;
        $this->hash = null;
        $this->event = null;
        $this->event_triggered = null;
        $this->status = null;
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
            if ($this->aSalesOrderItem instanceof Persistent) {
              $this->aSalesOrderItem->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aSalesOrderItem = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::DEFAULT_STRING_FORMAT);
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
     * @return     Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotification The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[] = Sao_Zed_Sales_Persistence_SaoSalesOrderItemNotificationPeer::UPDATED_AT;

        return $this;
    }

}
