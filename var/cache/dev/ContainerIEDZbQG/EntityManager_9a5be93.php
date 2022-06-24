<?php

namespace ContainerIEDZbQG;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8fb66 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb1d30 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbe1b5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getConnection', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getMetadataFactory', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getExpressionBuilder', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'beginTransaction', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getCache', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'transactional', array('func' => $func), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'commit', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->commit();
    }

    public function rollback()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'rollback', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getClassMetadata', array('className' => $className), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'createQuery', array('dql' => $dql), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'createNamedQuery', array('name' => $name), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'createQueryBuilder', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'flush', array('entity' => $entity), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'clear', array('entityName' => $entityName), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->clear($entityName);
    }

    public function close()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'close', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->close();
    }

    public function persist($entity)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'persist', array('entity' => $entity), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'remove', array('entity' => $entity), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'refresh', array('entity' => $entity), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'detach', array('entity' => $entity), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'merge', array('entity' => $entity), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'contains', array('entity' => $entity), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getEventManager', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getConfiguration', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'isOpen', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getUnitOfWork', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getProxyFactory', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'initializeObject', array('obj' => $obj), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'getFilters', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'isFiltersStateClean', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'hasFilters', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return $this->valueHolder8fb66->hasFilters();
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

        $instance->initializerb1d30 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8fb66) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8fb66 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8fb66->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, '__get', ['name' => $name], $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        if (isset(self::$publicPropertiesbe1b5[$name])) {
            return $this->valueHolder8fb66->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fb66;

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

        $targetObject = $this->valueHolder8fb66;
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
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fb66;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8fb66;
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
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, '__isset', array('name' => $name), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fb66;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8fb66;
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
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, '__unset', array('name' => $name), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8fb66;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8fb66;
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
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, '__clone', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        $this->valueHolder8fb66 = clone $this->valueHolder8fb66;
    }

    public function __sleep()
    {
        $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, '__sleep', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;

        return array('valueHolder8fb66');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb1d30 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb1d30;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb1d30 && ($this->initializerb1d30->__invoke($valueHolder8fb66, $this, 'initializeProxy', array(), $this->initializerb1d30) || 1) && $this->valueHolder8fb66 = $valueHolder8fb66;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8fb66;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8fb66;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
