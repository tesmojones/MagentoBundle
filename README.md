MagentoBundle
=============

Add this line in app/AppKernel.php:
..
$bundles = array(
..
..
new Astrus\MagentoBundle\AstrusMagentoBundle()
)

Add this line in app/config/config.yml

astrus_magento:
    mage_file:  pathto/Mage.php