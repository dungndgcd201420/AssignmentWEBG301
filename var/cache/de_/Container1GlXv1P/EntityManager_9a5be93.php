<?php

namespace Container1GlXv1P;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf93e6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb257c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescc055 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getConnection', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getMetadataFactory', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getExpressionBuilder', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'beginTransaction', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getCache', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'transactional', array('func' => $func), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'commit', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->commit();
    }

    public function rollback()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'rollback', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getClassMetadata', array('className' => $className), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'createQuery', array('dql' => $dql), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'createNamedQuery', array('name' => $name), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'createQueryBuilder', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'flush', array('entity' => $entity), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'clear', array('entityName' => $entityName), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->clear($entityName);
    }

    public function close()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'close', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->close();
    }

    public function persist($entity)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'persist', array('entity' => $entity), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'remove', array('entity' => $entity), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'refresh', array('entity' => $entity), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'detach', array('entity' => $entity), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'merge', array('entity' => $entity), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'contains', array('entity' => $entity), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getEventManager', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getConfiguration', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'isOpen', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getUnitOfWork', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getProxyFactory', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'initializeObject', array('obj' => $obj), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'getFilters', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'isFiltersStateClean', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'hasFilters', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return $this->valueHolderf93e6->hasFilters();
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

        $instance->initializerb257c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf93e6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf93e6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf93e6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, '__get', ['name' => $name], $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        if (isset(self::$publicPropertiescc055[$name])) {
            return $this->valueHolderf93e6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf93e6;

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

        $targetObject = $this->valueHolderf93e6;
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
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf93e6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf93e6;
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
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, '__isset', array('name' => $name), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf93e6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf93e6;
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
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, '__unset', array('name' => $name), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf93e6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf93e6;
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
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, '__clone', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        $this->valueHolderf93e6 = clone $this->valueHolderf93e6;
    }

    public function __sleep()
    {
        $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, '__sleep', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;

        return array('valueHolderf93e6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb257c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb257c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb257c && ($this->initializerb257c->__invoke($valueHolderf93e6, $this, 'initializeProxy', array(), $this->initializerb257c) || 1) && $this->valueHolderf93e6 = $valueHolderf93e6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf93e6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf93e6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
