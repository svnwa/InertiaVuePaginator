# InertiaVuePaginator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

These are two basic Paginator components that work with the Laravel Jetstream/Breeze Inertia/Vue3 stack.

1. A simple Paginator with just arrows left and right to paginate through Collection provided by e.g. the Inertia render function.
![SimplePaginator](https://gist.githubusercontent.com/svnwa/3d3e297680f80821c553726ff13d09bd/raw/d8caa565e36aa597a31cac66139e87a322eca972/SimplePaginator.png)
3. A "standard" paginator with feedback on the current and total amounts of the results, page numbers and arrows to navigate.
![Paginator](https://gist.githubusercontent.com/svnwa/3d3e297680f80821c553726ff13d09bd/raw/d8caa565e36aa597a31cac66139e87a322eca972/Paginator.png)

The components templates are analogous to the 'official' Blade templates provided by the basic paginator included by Laravel

## Installation

Via Composer

``` bash
$ composer require svnwa/inertiavuepaginator
```

Afterwards publish the Vue Components to use within your application
```
$ php artisan vendor:publish --tag=inertiavuepaginator
```

## Usage

With Inertia just use the `paginate()` as you would in a PHP/Blade Laravel context. E.g.:

```
public function index()
{
    return Inertia::render('MyUserList',[
        'paginator' => User::paginate(10)
    ]);
}
```

In your Vue component (`MyUserList.vue` in this example) use the paginator prop provided by the Inertia render function and dynamically bind it to your Paginator component as you would with any other prop.
```
<template>
    <Paginator :paginator="paginator" />
</template>

<script>
import Paginator from "@/Components/Paginator";
export default {
    props: {
            paginator: Object
        },
}
</script>
```

OR 

```
<template>
    <SimplePaginator :paginator="paginator" />
</template>

<script>
import SimplePaginator from "@/Components/SimplePaginator";
export default {
    props: {
            paginator: Object
        },
}
</script>
```

**Done. The Rest is handled by the Vue component itself**


## Credits

- [Sven Walbröl][link-author]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/svnwa/inertiavuepaginator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/svnwa/inertiavuepaginator.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/svnwa/inertiavuepaginator/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/svnwa/inertiavuepaginator
[link-downloads]: https://packagist.org/packages/svnwa/inertiavuepaginator
[link-travis]: https://travis-ci.org/svnwa/inertiavuepaginator
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/svnwa
[link-contributors]: ../../contributors
