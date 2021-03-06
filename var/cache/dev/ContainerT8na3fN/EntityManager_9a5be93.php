<?php

namespace ContainerT8na3fN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7e317 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4afdc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc3f33 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getConnection', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getMetadataFactory', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getExpressionBuilder', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'beginTransaction', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getCache', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'transactional', array('func' => $func), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'commit', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->commit();
    }

    public function rollback()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'rollback', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getClassMetadata', array('className' => $className), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'createQuery', array('dql' => $dql), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'createNamedQuery', array('name' => $name), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'createQueryBuilder', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'flush', array('entity' => $entity), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'clear', array('entityName' => $entityName), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->clear($entityName);
    }

    public function close()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'close', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->close();
    }

    public function persist($entity)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'persist', array('entity' => $entity), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'remove', array('entity' => $entity), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'refresh', array('entity' => $entity), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'detach', array('entity' => $entity), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'merge', array('entity' => $entity), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'contains', array('entity' => $entity), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getEventManager', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getConfiguration', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'isOpen', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getUnitOfWork', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getProxyFactory', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'initializeObject', array('obj' => $obj), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'getFilters', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'isFiltersStateClean', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'hasFilters', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return $this->valueHolder7e317->hasFilters();
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

        $instance->initializer4afdc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7e317) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7e317 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7e317->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, '__get', ['name' => $name], $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        if (isset(self::$publicPropertiesc3f33[$name])) {
            return $this->valueHolder7e317->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e317;

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

        $targetObject = $this->valueHolder7e317;
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
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e317;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7e317;
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
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, '__isset', array('name' => $name), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e317;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7e317;
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
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, '__unset', array('name' => $name), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7e317;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7e317;
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
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, '__clone', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        $this->valueHolder7e317 = clone $this->valueHolder7e317;
    }

    public function __sleep()
    {
        $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, '__sleep', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;

        return array('valueHolder7e317');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4afdc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4afdc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4afdc && ($this->initializer4afdc->__invoke($valueHolder7e317, $this, 'initializeProxy', array(), $this->initializer4afdc) || 1) && $this->valueHolder7e317 = $valueHolder7e317;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7e317;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7e317;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
