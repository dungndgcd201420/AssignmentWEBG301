<?php

namespace Container7ch8RW3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderad3e2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerebc18 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8d75c = [
        
    ];

    public function getConnection()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getConnection', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getMetadataFactory', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getExpressionBuilder', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'beginTransaction', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getCache', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'transactional', array('func' => $func), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'commit', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->commit();
    }

    public function rollback()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'rollback', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getClassMetadata', array('className' => $className), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'createQuery', array('dql' => $dql), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'createNamedQuery', array('name' => $name), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'createQueryBuilder', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'flush', array('entity' => $entity), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'clear', array('entityName' => $entityName), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->clear($entityName);
    }

    public function close()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'close', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->close();
    }

    public function persist($entity)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'persist', array('entity' => $entity), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'remove', array('entity' => $entity), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'refresh', array('entity' => $entity), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'detach', array('entity' => $entity), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'merge', array('entity' => $entity), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'contains', array('entity' => $entity), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getEventManager', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getConfiguration', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'isOpen', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getUnitOfWork', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getProxyFactory', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'initializeObject', array('obj' => $obj), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'getFilters', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'isFiltersStateClean', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'hasFilters', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return $this->valueHolderad3e2->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerebc18 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderad3e2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderad3e2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderad3e2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, '__get', ['name' => $name], $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        if (isset(self::$publicProperties8d75c[$name])) {
            return $this->valueHolderad3e2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad3e2;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderad3e2;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad3e2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderad3e2;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, '__isset', array('name' => $name), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad3e2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderad3e2;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, '__unset', array('name' => $name), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderad3e2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderad3e2;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, '__clone', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        $this->valueHolderad3e2 = clone $this->valueHolderad3e2;
    }

    public function __sleep()
    {
        $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, '__sleep', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;

        return array('valueHolderad3e2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerebc18 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerebc18;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerebc18 && ($this->initializerebc18->__invoke($valueHolderad3e2, $this, 'initializeProxy', array(), $this->initializerebc18) || 1) && $this->valueHolderad3e2 = $valueHolderad3e2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderad3e2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderad3e2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
