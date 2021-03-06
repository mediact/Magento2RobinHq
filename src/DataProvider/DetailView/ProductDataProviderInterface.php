<?php
/**
 * @author Bram Gerritsen <bgerritsen@emico.nl>
 * @copyright (c) Emico B.V. 2017
 */

namespace Emico\RobinHq\DataProvider\DetailView;


use Magento\Catalog\Api\Data\ProductInterface;

interface ProductDataProviderInterface
{
    /**
     * @param ProductInterface $product
     * @return array
     */
    public function getAdditionalProductData(ProductInterface $product): array;
}