<?php


/**
 * Base class that represents a query for the 'pac_acl_privilege' table.
 *
 *
 *
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery orderByIdAclPrivilege($order = Criteria::ASC) Order by the id_acl_privilege column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery orderByFkAclResource($order = Criteria::ASC) Order by the fk_acl_resource column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery groupByIdAclPrivilege() Group by the id_acl_privilege column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery groupByFkAclResource() Group by the fk_acl_resource column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery groupByName() Group by the name column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery groupByCreatedAt() Group by the created_at column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery leftJoinAclResource($relationAlias = null) Adds a LEFT JOIN clause to the query using the AclResource relation
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery rightJoinAclResource($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AclResource relation
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery innerJoinAclResource($relationAlias = null) Adds a INNER JOIN clause to the query using the AclResource relation
 *
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery leftJoinPacAclRolePrivilege($relationAlias = null) Adds a LEFT JOIN clause to the query using the PacAclRolePrivilege relation
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery rightJoinPacAclRolePrivilege($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PacAclRolePrivilege relation
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery innerJoinPacAclRolePrivilege($relationAlias = null) Adds a INNER JOIN clause to the query using the PacAclRolePrivilege relation
 *
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilege findOne(PropelPDO $con = null) Return the first ProjectA_Zed_Acl_Persistence_PacAclPrivilege matching the query
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilege findOneOrCreate(PropelPDO $con = null) Return the first ProjectA_Zed_Acl_Persistence_PacAclPrivilege matching the query, or a new ProjectA_Zed_Acl_Persistence_PacAclPrivilege object populated from the query conditions when no match is found
 *
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilege findOneByFkAclResource(int $fk_acl_resource) Return the first ProjectA_Zed_Acl_Persistence_PacAclPrivilege filtered by the fk_acl_resource column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilege findOneByName(string $name) Return the first ProjectA_Zed_Acl_Persistence_PacAclPrivilege filtered by the name column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilege findOneByCreatedAt(string $created_at) Return the first ProjectA_Zed_Acl_Persistence_PacAclPrivilege filtered by the created_at column
 * @method ProjectA_Zed_Acl_Persistence_PacAclPrivilege findOneByUpdatedAt(string $updated_at) Return the first ProjectA_Zed_Acl_Persistence_PacAclPrivilege filtered by the updated_at column
 *
 * @method array findByIdAclPrivilege(int $id_acl_privilege) Return ProjectA_Zed_Acl_Persistence_PacAclPrivilege objects filtered by the id_acl_privilege column
 * @method array findByFkAclResource(int $fk_acl_resource) Return ProjectA_Zed_Acl_Persistence_PacAclPrivilege objects filtered by the fk_acl_resource column
 * @method array findByName(string $name) Return ProjectA_Zed_Acl_Persistence_PacAclPrivilege objects filtered by the name column
 * @method array findByCreatedAt(string $created_at) Return ProjectA_Zed_Acl_Persistence_PacAclPrivilege objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return ProjectA_Zed_Acl_Persistence_PacAclPrivilege objects filtered by the updated_at column
 *
 * @package    propel.generator.vendor/project-a/acl-package/ProjectA/Zed/Acl/Persistence.om
 */
abstract class Generated_Zed_Acl_Persistence_Om_BasePacAclPrivilegeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of Generated_Zed_Acl_Persistence_Om_BasePacAclPrivilegeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = 'ProjectA_Zed_Acl_Persistence_PacAclPrivilege', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery) {
            return $criteria;
        }
        $query = new ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery();
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
     * @return   ProjectA_Zed_Acl_Persistence_PacAclPrivilege|ProjectA_Zed_Acl_Persistence_PacAclPrivilege[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ProjectA_Zed_Acl_Persistence_PacAclPrivilege A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAclPrivilege($key, $con = null)
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
     * @return                 ProjectA_Zed_Acl_Persistence_PacAclPrivilege A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_acl_privilege`, `fk_acl_resource`, `name`, `created_at`, `updated_at` FROM `pac_acl_privilege` WHERE `id_acl_privilege` = :p0';
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
            $obj = new ProjectA_Zed_Acl_Persistence_PacAclPrivilege();
            $obj->hydrate($row);
            ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::addInstanceToPool($obj, (string) $key);
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
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilege|ProjectA_Zed_Acl_Persistence_PacAclPrivilege[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ProjectA_Zed_Acl_Persistence_PacAclPrivilege[]|mixed the list of results, formatted by the current formatter
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
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::ID_ACL_PRIVILEGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::ID_ACL_PRIVILEGE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_acl_privilege column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAclPrivilege(1234); // WHERE id_acl_privilege = 1234
     * $query->filterByIdAclPrivilege(array(12, 34)); // WHERE id_acl_privilege IN (12, 34)
     * $query->filterByIdAclPrivilege(array('min' => 12)); // WHERE id_acl_privilege >= 12
     * $query->filterByIdAclPrivilege(array('max' => 12)); // WHERE id_acl_privilege <= 12
     * </code>
     *
     * @param     mixed $idAclPrivilege The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function filterByIdAclPrivilege($idAclPrivilege = null, $comparison = null)
    {
        if (is_array($idAclPrivilege)) {
            $useMinMax = false;
            if (isset($idAclPrivilege['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::ID_ACL_PRIVILEGE, $idAclPrivilege['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAclPrivilege['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::ID_ACL_PRIVILEGE, $idAclPrivilege['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::ID_ACL_PRIVILEGE, $idAclPrivilege, $comparison);
    }

    /**
     * Filter the query on the fk_acl_resource column
     *
     * Example usage:
     * <code>
     * $query->filterByFkAclResource(1234); // WHERE fk_acl_resource = 1234
     * $query->filterByFkAclResource(array(12, 34)); // WHERE fk_acl_resource IN (12, 34)
     * $query->filterByFkAclResource(array('min' => 12)); // WHERE fk_acl_resource >= 12
     * $query->filterByFkAclResource(array('max' => 12)); // WHERE fk_acl_resource <= 12
     * </code>
     *
     * @see       filterByAclResource()
     *
     * @param     mixed $fkAclResource The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function filterByFkAclResource($fkAclResource = null, $comparison = null)
    {
        if (is_array($fkAclResource)) {
            $useMinMax = false;
            if (isset($fkAclResource['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::FK_ACL_RESOURCE, $fkAclResource['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkAclResource['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::FK_ACL_RESOURCE, $fkAclResource['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::FK_ACL_RESOURCE, $fkAclResource, $comparison);
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
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related ProjectA_Zed_Acl_Persistence_PacAclResource object
     *
     * @param   ProjectA_Zed_Acl_Persistence_PacAclResource|PropelObjectCollection $pacAclResource The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAclResource($pacAclResource, $comparison = null)
    {
        if ($pacAclResource instanceof ProjectA_Zed_Acl_Persistence_PacAclResource) {
            return $this
                ->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::FK_ACL_RESOURCE, $pacAclResource->getIdAclResource(), $comparison);
        } elseif ($pacAclResource instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::FK_ACL_RESOURCE, $pacAclResource->toKeyValue('PrimaryKey', 'IdAclResource'), $comparison);
        } else {
            throw new PropelException('filterByAclResource() only accepts arguments of type ProjectA_Zed_Acl_Persistence_PacAclResource or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the AclResource relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function joinAclResource($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('AclResource');

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
            $this->addJoinObject($join, 'AclResource');
        }

        return $this;
    }

    /**
     * Use the AclResource relation PacAclResource object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectA_Zed_Acl_Persistence_PacAclResourceQuery A secondary query class using the current class as primary query
     */
    public function useAclResourceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAclResource($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'AclResource', 'ProjectA_Zed_Acl_Persistence_PacAclResourceQuery');
    }

    /**
     * Filter the query by a related ProjectA_Zed_Acl_Persistence_PacAclRolePrivilege object
     *
     * @param   ProjectA_Zed_Acl_Persistence_PacAclRolePrivilege|PropelObjectCollection $pacAclRolePrivilege  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPacAclRolePrivilege($pacAclRolePrivilege, $comparison = null)
    {
        if ($pacAclRolePrivilege instanceof ProjectA_Zed_Acl_Persistence_PacAclRolePrivilege) {
            return $this
                ->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::ID_ACL_PRIVILEGE, $pacAclRolePrivilege->getFkAclPrivilege(), $comparison);
        } elseif ($pacAclRolePrivilege instanceof PropelObjectCollection) {
            return $this
                ->usePacAclRolePrivilegeQuery()
                ->filterByPrimaryKeys($pacAclRolePrivilege->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPacAclRolePrivilege() only accepts arguments of type ProjectA_Zed_Acl_Persistence_PacAclRolePrivilege or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PacAclRolePrivilege relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function joinPacAclRolePrivilege($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PacAclRolePrivilege');

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
            $this->addJoinObject($join, 'PacAclRolePrivilege');
        }

        return $this;
    }

    /**
     * Use the PacAclRolePrivilege relation PacAclRolePrivilege object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProjectA_Zed_Acl_Persistence_PacAclRolePrivilegeQuery A secondary query class using the current class as primary query
     */
    public function usePacAclRolePrivilegeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPacAclRolePrivilege($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PacAclRolePrivilege', 'ProjectA_Zed_Acl_Persistence_PacAclRolePrivilegeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ProjectA_Zed_Acl_Persistence_PacAclPrivilege $pacAclPrivilege Object to remove from the list of results
     *
     * @return ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function prune($pacAclPrivilege = null)
    {
        if ($pacAclPrivilege) {
            $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::ID_ACL_PRIVILEGE, $pacAclPrivilege->getIdAclPrivilege(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param      int $nbDays Maximum age of the latest update in days
     *
     * @return     ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        return $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by update date desc
     *
     * @return     ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        return $this->addDescendingOrderByColumn(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::UPDATED_AT);
    }

    /**
     * Order by update date asc
     *
     * @return     ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        return $this->addAscendingOrderByColumn(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::UPDATED_AT);
    }

    /**
     * Filter by the latest created
     *
     * @param      int $nbDays Maximum age of in days
     *
     * @return     ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        return $this->addUsingAlias(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);
    }

    /**
     * Order by create date desc
     *
     * @return     ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        return $this->addDescendingOrderByColumn(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::CREATED_AT);
    }

    /**
     * Order by create date asc
     *
     * @return     ProjectA_Zed_Acl_Persistence_PacAclPrivilegeQuery The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        return $this->addAscendingOrderByColumn(ProjectA_Zed_Acl_Persistence_PacAclPrivilegePeer::CREATED_AT);
    }
}
