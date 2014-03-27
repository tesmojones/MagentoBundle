MagentoBundle
=============


Installation
============

1. Add the following lines in composer.json:
    
    ```
    "astrus/magento-bundle": "dev-master"
    ```
2. Run the following command on your symfony2 root
    ```
    $ composer update astrus/magento-bundle
    ```
3. Edit app/AppKernel.php, add the following:
	```
	// app/AppKernel.php
	..
	$bundles = array(
	..
		new Astrus\MagentoBundle\AstrusMagentoBundle()
	)
	```
4. Edit app/AppKernel.php, add the following:

	```
	//app/config/config.yml
	astrus_magento:
    	mage_file:  pathto/Mage.php
	```