## Commands

#### Crud command:

```
php artisan crud:generate Posts --fields="title:string, body:text"
```

You can also easily include route, set primary key, set views directory etc through options **--route**, **--pk**, **--view-path** as belows:

```
php artisan crud:generate Posts --fields="title:string:required, body:text:required" --route=yes --pk=id --view-path="admin" --namespace=Admin --route-group=admin
```

Options:

- --fields : Fields name for the form & model.
- --route : Include Crud route to routes.php? yes or no.
- --pk : The name of the primary key.
- --view-path : The name of the view path.
- --namespace : Namespace of the controller.
- --route-group : Prefix of the route group.

-----------
-----------


#### Other commands (optional):

For controller generator:

```
php artisan crud:controller PostsController --crud-name=posts --model-name=Post --view-path="directory" --route-group=admin
```

For model generator:

```
php artisan crud:model Post --fillable="['title', 'body']"
```

For migration generator:

```
php artisan crud:migration posts --schema="title:string, body:text"
```

For view generator:

```
php artisan crud:view posts --fields="title:string, body:text" --view-path="directory" --route-group=admin
```

By default, the generator will attempt to append the crud route to your *routes.php* file. If you don't want the route added, you can use the option ```--route=no```.

After creating all resources, run migrate command. *If necessary, include the route for your crud as well.*

```
php artisan migrate
```

If you chose not to add the crud route in automatically (see above), you will need to include the route manually.
```php
Route::resource('posts', 'PostsController');
```

### Supported Field Types

These fields are supported for migration and view's form:

* string
* char
* varchar
* password
* email
* date
* datetime
* time
* timestamp
* text
* mediumtext
* longtext
* json
* jsonb
* binary
* number
* integer
* bigint
* mediumint
* tinyint
* smallint
* boolean
* decimal
* double
* float

### Custom Generator's Stub Template

You can customize the generator's stub files/templates to achieve your need.

1. Make sure you've published package's assets.
    ```
    php artisan vendor:publish
    ```

2. Turn on custom_template support on **/config/crudgenerator.php**
    ```
    'custom_template' => true,
    ```
3. From the directory **/resources/crud-generator/** you can modify or customize the stub files.

## Custom Generator
This is where I will work on the lines for the crud generator.
### Customers
```
php artisan crud:generate Customers --fields="CUSTCODE:string, CUSTNAME:string:required, ADDRESS1:string, ADDRESS2:string, ADDRESS3:string, CITY:string, STATE:string, ZIP:string, SHIPTO:string, destination_id:integer, SHIPVIA:string, carrier_id:integer, DEFFREIGHT:string, CONTACT1:string, PHONE1:string, EXTENSION1:string, CONTACT2:string, PHONE2:string, EXTENSION2:string, FAX:string, EMAIL:string, COD:boolean, TAXIDEN:string, REMARKS:string, TimeStamp:datetime" --pk=ID --view-path="frontend"
```
### Processes
```
php artisan crud:generate Process --fields="PROCNAME:string, DESCRIPT:string:required, MINCOST:double, RoHS:boolean, REACH:boolean, TimeStamp:datetime" --pk=ID --view-path="frontend"
```
### Part
```
php artisan crud:generate Parts --fields="PARTNUM:string:required, PROCNAME:string:required, CUSTCODE:string:required, PRICE:double, PRICECODE:string, PARTNAME:string, PROCNUM:string, METHOD:string, CERTREQ:boolean, STRESSRLF:boolean, SPEC:string, MATERIAL:string, PLTHICKMIN:double, PLTHICKMAX:double, SPLREQR:text, SQRAREAPT:double, CUSTWTPC:double, FINISHWTPC:double, COATINGWT:double, HTRTCND:string, NORMLOTSIZ:double, X:double, Y:double, Z:double, MATHICKNSS:double, QUAL1:double, QUAL2:double, QUAL3:double, QUAL4:double, QUAL5:double, QUAL6:double, NOTES:text, OpNotes:text, ImageID:integer, pre_bake_temperature:integer, pre_bake_time:string, embrittlement_bake_temperature:integer, embrittlement_bake_time:string, adhesion_bake_temperature:integer, adhesion_bake_time:string, TimeStamp:datetime" --pk=ID --view-path="frontend"
```