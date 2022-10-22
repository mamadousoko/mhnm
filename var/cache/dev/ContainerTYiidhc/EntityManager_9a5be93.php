<?php

namespace ContainerTYiidhc;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2e7c8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercf910 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties37b9b = [
        
    ];

    public function getConnection()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getConnection', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getMetadataFactory', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getExpressionBuilder', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'beginTransaction', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getCache', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getCache();
    }

    public function transactional($func)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'transactional', array('func' => $func), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'wrapInTransaction', array('func' => $func), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'commit', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->commit();
    }

    public function rollback()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'rollback', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getClassMetadata', array('className' => $className), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'createQuery', array('dql' => $dql), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'createNamedQuery', array('name' => $name), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'createQueryBuilder', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'flush', array('entity' => $entity), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'clear', array('entityName' => $entityName), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->clear($entityName);
    }

    public function close()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'close', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->close();
    }

    public function persist($entity)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'persist', array('entity' => $entity), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'remove', array('entity' => $entity), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'refresh', array('entity' => $entity), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'detach', array('entity' => $entity), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'merge', array('entity' => $entity), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getRepository', array('entityName' => $entityName), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'contains', array('entity' => $entity), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getEventManager', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getConfiguration', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'isOpen', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getUnitOfWork', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getProxyFactory', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'initializeObject', array('obj' => $obj), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'getFilters', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'isFiltersStateClean', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'hasFilters', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return $this->valueHolder2e7c8->hasFilters();
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

        $instance->initializercf910 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder2e7c8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2e7c8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2e7c8->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, '__get', ['name' => $name], $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        if (isset(self::$publicProperties37b9b[$name])) {
            return $this->valueHolder2e7c8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e7c8;

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

        $targetObject = $this->valueHolder2e7c8;
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
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e7c8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2e7c8;
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
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, '__isset', array('name' => $name), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e7c8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2e7c8;
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
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, '__unset', array('name' => $name), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e7c8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2e7c8;
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
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, '__clone', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        $this->valueHolder2e7c8 = clone $this->valueHolder2e7c8;
    }

    public function __sleep()
    {
        $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, '__sleep', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;

        return array('valueHolder2e7c8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercf910 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercf910;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercf910 && ($this->initializercf910->__invoke($valueHolder2e7c8, $this, 'initializeProxy', array(), $this->initializercf910) || 1) && $this->valueHolder2e7c8 = $valueHolder2e7c8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2e7c8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2e7c8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
