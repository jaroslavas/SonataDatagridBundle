<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\DatagridBundle\Filter;

use Sonata\DatagridBundle\ProxyQuery\ProxyQueryInterface;

/**
 * Interface FilterInterface.
 */
interface FilterInterface
{
    const CONDITION_OR = 'OR';

    const CONDITION_AND = 'AND';

    /**
     * Apply the filter to the QueryBuilder instance.
     *
     * @param ProxyQueryInterface $queryBuilder
     * @param string              $alias
     * @param string              $field
     * @param string              $value
     */
    public function filter(ProxyQueryInterface $queryBuilder, $alias, $field, $value);

    /**
     * @param mixed $query
     * @param mixed $value
     */
    public function apply($query, $value);

    /**
     * Returns the filter name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the filter form name.
     *
     * @return string
     */
    public function getFormName();

    /**
     * Returns the label name.
     *
     * @return string
     */
    public function getLabel();

    /**
     * @param string $label
     */
    public function setLabel($label);

    /**
     * @return array
     */
    public function getDefaultOptions();

    /**
     * @param string $name
     * @param null   $default
     *
     * @return mixed
     */
    public function getOption($name, $default = null);

    /**
     * @param string $name
     * @param mixed  $value
     */
    public function setOption($name, $value);

    /**
     * @param string $name
     * @param array  $options
     */
    public function initialize($name, array $options = array());

    /**
     * @return string
     */
    public function getFieldName();

    /**
     * @return array
     */
    public function getFieldOptions();

    /**
     * @return string
     */
    public function getFieldType();

    /**
     * Returns the main widget used to render the filter.
     *
     * @return array
     */
    public function getRenderSettings();

    /**
     * Returns true if filter is active.
     *
     * @return bool
     */
    public function isActive();

    /**
     * Set the condition to use with the left side of the query : OR or AND.
     *
     * @param string $condition
     */
    public function setCondition($condition);

    /**
     * @return string
     */
    public function getCondition();

    /**
     * @return string
     */
    public function getTranslationDomain();
}
