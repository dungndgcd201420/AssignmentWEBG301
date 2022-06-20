<?php

namespace ContainerCFCHe1m;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5b190 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer411c7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf6de6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getConnection', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getMetadataFactory', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getExpressionBuilder', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'beginTransaction', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getCache', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getCache();
    }

    public function transactional($func)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'transactional', array('func' => $func), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'wrapInTransaction', array('func' => $func), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'commit', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->commit();
    }

    public function rollback()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'rollback', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getClassMetadata', array('className' => $className), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'createQuery', array('dql' => $dql), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'createNamedQuery', array('name' => $name), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'createQueryBuilder', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'flush', array('entity' => $entity), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'clear', array('entityName' => $entityName), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->clear($entityName);
    }

    public function close()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'close', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->close();
    }

    public function persist($entity)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'persist', array('entity' => $entity), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'remove', array('entity' => $entity), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'refresh', array('entity' => $entity), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'detach', array('entity' => $entity), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'merge', array('entity' => $entity), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getRepository', array('entityName' => $entityName), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'contains', array('entity' => $entity), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getEventManager', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getConfiguration', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'isOpen', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getUnitOfWork', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getProxyFactory', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'initializeObject', array('obj' => $obj), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'getFilters', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'isFiltersStateClean', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'hasFilters', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return $this->valueHolder5b190->hasFilters();
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

        $instance->initializer411c7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5b190) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5b190 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5b190->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, '__get', ['name' => $name], $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        if (isset(self::$publicPropertiesf6de6[$name])) {
            return $this->valueHolder5b190->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b190;

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

        $targetObject = $this->valueHolder5b190;
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
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b190;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5b190;
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
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, '__isset', array('name' => $name), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b190;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5b190;
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
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, '__unset', array('name' => $name), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b190;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5b190;
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
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, '__clone', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        $this->valueHolder5b190 = clone $this->valueHolder5b190;
    }

    public function __sleep()
    {
        $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, '__sleep', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;

        return array('valueHolder5b190');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer411c7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer411c7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer411c7 && ($this->initializer411c7->__invoke($valueHolder5b190, $this, 'initializeProxy', array(), $this->initializer411c7) || 1) && $this->valueHolder5b190 = $valueHolder5b190;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5b190;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5b190;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
