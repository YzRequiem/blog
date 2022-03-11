<?php

namespace ContainerA0h7qeP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7774f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraf2dc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc036b = [
        
    ];

    public function getConnection()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getConnection', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getMetadataFactory', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getExpressionBuilder', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'beginTransaction', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getCache', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'transactional', array('func' => $func), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'commit', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->commit();
    }

    public function rollback()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'rollback', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getClassMetadata', array('className' => $className), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'createQuery', array('dql' => $dql), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'createNamedQuery', array('name' => $name), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'createQueryBuilder', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'flush', array('entity' => $entity), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'clear', array('entityName' => $entityName), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->clear($entityName);
    }

    public function close()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'close', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->close();
    }

    public function persist($entity)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'persist', array('entity' => $entity), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'remove', array('entity' => $entity), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'refresh', array('entity' => $entity), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'detach', array('entity' => $entity), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'merge', array('entity' => $entity), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'contains', array('entity' => $entity), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getEventManager', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getConfiguration', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'isOpen', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getUnitOfWork', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getProxyFactory', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'initializeObject', array('obj' => $obj), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'getFilters', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'isFiltersStateClean', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'hasFilters', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return $this->valueHolder7774f->hasFilters();
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

        $instance->initializeraf2dc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7774f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7774f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7774f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, '__get', ['name' => $name], $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        if (isset(self::$publicPropertiesc036b[$name])) {
            return $this->valueHolder7774f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7774f;

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

        $targetObject = $this->valueHolder7774f;
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
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7774f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7774f;
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
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, '__isset', array('name' => $name), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7774f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7774f;
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
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, '__unset', array('name' => $name), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7774f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7774f;
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
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, '__clone', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        $this->valueHolder7774f = clone $this->valueHolder7774f;
    }

    public function __sleep()
    {
        $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, '__sleep', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;

        return array('valueHolder7774f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraf2dc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraf2dc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraf2dc && ($this->initializeraf2dc->__invoke($valueHolder7774f, $this, 'initializeProxy', array(), $this->initializeraf2dc) || 1) && $this->valueHolder7774f = $valueHolder7774f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7774f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7774f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
