<?php

/*
 * This file is part of the Miky package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Miky\Component\Resource\Metadata;

/**
 * Interface for the registry of all resources.
 *
 * @author Paweł Jędrzejewski <pawel@adevis.org>
 */
interface RegistryInterface
{
    /**
     * @return MetadataInterface[]
     */
    public function getAll();

    /**
     * @param string $alias
     *
     * @return MetadataInterface
     */
    public function get($alias);

    /**
     * @param string $className
     *
     * @return MetadataInterface
     */
    public function getByClass($className);

    /**
     * @param MetadataInterface $metadata
     */
    public function add(MetadataInterface $metadata);

    /**
     * @param string $alias
     * @param array $configuration
     */
    public function addFromAliasAndConfiguration($alias, array $configuration);
}
