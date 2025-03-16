<?php

namespace App\Factory;

use App\Entity\HugeItem;
use Doctrine\ORM\EntityRepository;
use Zenstruck\Foundry\Persistence\PersistentProxyObjectFactory;
use Zenstruck\Foundry\Persistence\Proxy;
use Zenstruck\Foundry\Persistence\ProxyRepositoryDecorator;

/**
 * @extends PersistentProxyObjectFactory<HugeItem>
 *
 * @method        HugeItem|Proxy                            create(array|callable $attributes = [])
 * @method static HugeItem|Proxy                            createOne(array $attributes = [])
 * @method static HugeItem|Proxy                            find(object|array|mixed $criteria)
 * @method static HugeItem|Proxy                            findOrCreate(array $attributes)
 * @method static HugeItem|Proxy                            first(string $sortedField = 'id')
 * @method static HugeItem|Proxy                            last(string $sortedField = 'id')
 * @method static HugeItem|Proxy                            random(array $attributes = [])
 * @method static HugeItem|Proxy                            randomOrCreate(array $attributes = [])
 * @method static EntityRepository|ProxyRepositoryDecorator repository()
 * @method static HugeItem[]|Proxy[]                        all()
 * @method static HugeItem[]|Proxy[]                        createMany(int $number, array|callable $attributes = [])
 * @method static HugeItem[]|Proxy[]                        createSequence(iterable|callable $sequence)
 * @method static HugeItem[]|Proxy[]                        findBy(array $attributes)
 * @method static HugeItem[]|Proxy[]                        randomRange(int $min, int $max, array $attributes = [])
 * @method static HugeItem[]|Proxy[]                        randomSet(int $number, array $attributes = [])
 */
final class HugeItemFactory extends PersistentProxyObjectFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
    }

    public static function class(): string
    {
        return HugeItem::class;
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function defaults(): array|callable
    {
        return [
            'first' => self::faker()->text(255),
            'second' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): static
    {
        return $this
            // ->afterInstantiate(function(HugeItem $hugeItem): void {})
        ;
    }
}
