<?php

namespace ContainerOAoRK0x;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder28412 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc17cd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties155fd = [
        
    ];

    public function getConnection()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getConnection', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getMetadataFactory', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getExpressionBuilder', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'beginTransaction', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getCache', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'transactional', array('func' => $func), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'commit', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->commit();
    }

    public function rollback()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'rollback', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getClassMetadata', array('className' => $className), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'createQuery', array('dql' => $dql), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'createNamedQuery', array('name' => $name), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'createQueryBuilder', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'flush', array('entity' => $entity), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'clear', array('entityName' => $entityName), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->clear($entityName);
    }

    public function close()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'close', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->close();
    }

    public function persist($entity)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'persist', array('entity' => $entity), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'remove', array('entity' => $entity), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'refresh', array('entity' => $entity), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'detach', array('entity' => $entity), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'merge', array('entity' => $entity), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'contains', array('entity' => $entity), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getEventManager', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getConfiguration', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'isOpen', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getUnitOfWork', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getProxyFactory', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'initializeObject', array('obj' => $obj), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'getFilters', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'isFiltersStateClean', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'hasFilters', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return $this->valueHolder28412->hasFilters();
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

        $instance->initializerc17cd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder28412) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder28412 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder28412->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, '__get', ['name' => $name], $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        if (isset(self::$publicProperties155fd[$name])) {
            return $this->valueHolder28412->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28412;

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

        $targetObject = $this->valueHolder28412;
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
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28412;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder28412;
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
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, '__isset', array('name' => $name), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28412;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder28412;
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
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, '__unset', array('name' => $name), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder28412;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder28412;
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
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, '__clone', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        $this->valueHolder28412 = clone $this->valueHolder28412;
    }

    public function __sleep()
    {
        $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, '__sleep', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;

        return array('valueHolder28412');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc17cd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc17cd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc17cd && ($this->initializerc17cd->__invoke($valueHolder28412, $this, 'initializeProxy', array(), $this->initializerc17cd) || 1) && $this->valueHolder28412 = $valueHolder28412;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder28412;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder28412;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
