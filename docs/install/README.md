---
install_index: true
---

# Getting Started


## Installation

``` php
composer require akopean/voyager-media
```
After updating composer, add the service provider to the providers array in config/app.php
``` php
VoyagerMedia\VoyagerMediaServiceProvider::class,
```
## Use
#### Add this code, where you need show media button 
##### 1.param ['image' => field name]
##### 2.param ['false/true' => single/multiple]
##### 3.param [$product->image => model attribute]
``` php
@voyagerMediaButton('image', 'false', $product->image)
```
#### Add this code to the end section['content']
``` php
@voyagerMediaModal()
```