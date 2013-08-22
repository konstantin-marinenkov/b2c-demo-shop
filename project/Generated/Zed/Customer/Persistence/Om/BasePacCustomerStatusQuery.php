<?php


/**
 * Base class that represents a query for the 'pac_customer_status' table.
 *
 *
 *
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery orderByIdCustomerStatus($order = Criteria::ASC) Order by the id_customer_status column
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery orderByName($order = Criteria::ASC) Order by the name column
 *
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery groupByIdCustomerStatus() Group by the id_customer_status column
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery groupByName() Group by the name column
 *
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery leftJoinCustomer($relationAlias = null) Adds a LEFT JOIN clause to the query using the Customer relation
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery rightJoinCustomer($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Customer relation
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery innerJoinCustomer($relationAlias = null) Adds a INNER JOIN clause to the query using the Customer relation
 *
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatus findOne(PropelPDO $con = null) Return the first ProjectA_Zed_Customer_Persistence_PacCustomerStatus matching the query
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatus findOneOrCreate(PropelPDO $con = null) Return the first ProjectA_Zed_Customer_Persistence_PacCustomerStatus matching the query, or a new ProjectA_Zed_Customer_Persistence_PacCustomerStatus object populated from the query conditions when no match is found
 *
 * @method ProjectA_Zed_Customer_Persistence_PacCustomerStatus findOneByName(string $name) Return the first ProjectA_Zed_Customer_Persistence_PacCustomerStatus filtered by the name column
 *
 * @method array findByIdCustomerStatus(int $id_customer_status) Return ProjectA_Zed_Customer_Persistence_PacCustomerStatus objects filtered by the id_customer_status column
 * @method array findByName(string $name) Return ProjectA_Zed_Customer_Persistence_PacCustomerStatus objects filtered by the name column
 *
 * @package    propel.generator.vendor/project-a/crm-package/ProjectA/Zed/Customer/Persistence.om
 */
abstract class Generated_Zed_Customer_Persistence_Om_BasePacCustomerStatusQuery extends ModelCriteria
{
    /**
     * Initializes internal state of Generated_Zed_Customer_Persistence_Om_BasePacCustomerStatusQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = 'ProjectA_Zed_Customer_Persistence_PacCustomerStatus', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery) {
            return $criteria;
        }
        $query = new ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ProjectA_Zed_Customer_Persistence_PacCustomerStatus|ProjectA_Zed_Customer_Persistence_PacCustomerStatus[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ProjectA_Zed_Customer_Persistence_PacCustomerStatus A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCustomerStatus($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ProjectA_Zed_Customer_Persistence_PacCustomerStatus A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_customer_status`, `name` FROM `pac_customer_status` WHERE `id_customer_status` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ProjectA_Zed_Customer_Persistence_PacCustomerStatus();
            $obj->hydrate($row);
            ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return ProjectA_Zed_Customer_Persistence_PacCustomerStatus|ProjectA_Zed_Customer_Persistence_PacCustomerStatus[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ProjectA_Zed_Customer_Persistence_PacCustomerStatus[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::ID_CUSTOMER_STATUS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::ID_CUSTOMER_STATUS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_customer_status column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCustomerStatus(1234); // WHERE id_customer_status = 1234
     * $query->filterByIdCustomerStatus(array(12, 34)); // WHERE id_customer_status IN (12, 34)
     * $query->filterByIdCustomerStatus(array('min' => 12)); // WHERE id_customer_status >= 12
     * $query->filterByIdCustomerStatus(array('max' => 12)); // WHERE id_customer_status <= 12
     * </code>
     *
     * @param     mixed $idCustomerStatus The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery The current query, for fluid interface
     */
    public function filterByIdCustomerStatus($idCustomerStatus = null, $comparison = null)
    {
        if (is_array($idCustomerStatus)) {
            $useMinMax = false;
            if (isset($idCustomerStatus['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::ID_CUSTOMER_STATUS, $idCustomerStatus['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCustomerStatus['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::ID_CUSTOMER_STATUS, $idCustomerStatus['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::ID_CUSTOMER_STATUS, $idCustomerStatus, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query by a related ProjectA_Zed_Customer_Persistence_PacCustomer object
     *
     * @param   ProjectA_Zed_Customer_Persistence_PacCustomer|PropelObjectCollection $pacCustomer  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCustomer($pacCustomer, $comparison = null)
    {
        if ($pacCustomer instanceof ProjectA_Zed_Customer_Persistence_PacCustomer) {
            return $this
                ->addUsingAlias(ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::ID_CUSTOMER_STATUS, $pacCustomer->getFkCustomerStatus(), $comparison);
        } elseif ($pacCustomer instanceof PropelObjectCollection) {
            return $this
                ->useCustomerQuery()
                ->filterByPrimaryKeys($pacCustomer->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCustomer() only accepts arguments of type ProjectA_Zed_Customer_Persistence_PacCustomer or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Customer relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery The current query, for fluid interface
     */
    public function joinCustomer($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Customer');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Customer');
        }

        return $this;
    }

    /**
     * Use the Customer relation PacCustomer object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectA_Zed_Customer_Persistence_PacCustomerQuery A secondary query class using the current class as primary query
     */
    public function useCustomerQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCustomer($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Customer', 'ProjectA_Zed_Customer_Persistence_PacCustomerQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ProjectA_Zed_Customer_Persistence_PacCustomerStatus $pacCustomerStatus Object to remove from the list of results
     *
     * @return ProjectA_Zed_Customer_Persistence_PacCustomerStatusQuery The current query, for fluid interface
     */
    public function prune($pacCustomerStatus = null)
    {
        if ($pacCustomerStatus) {
            $this->addUsingAlias(ProjectA_Zed_Customer_Persistence_PacCustomerStatusPeer::ID_CUSTOMER_STATUS, $pacCustomerStatus->getIdCustomerStatus(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
