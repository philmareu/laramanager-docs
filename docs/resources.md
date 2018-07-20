# Resources

Resources are tables that need simple CRUD operations.

## Creating a new resource

Laramanager will not automatically create migrations or alter your database schema. It was built to be very lightweight and flexible to the developer. So first a model and migration will need to be created for the resource before it can be added in Laramanager.

```console
php artisan make:model Event --migration
```

Now this table can be added as a resource. Navigate to resources under the "System" navigation section.

![Laramanager resources page](/images/original/laramanager-resources.jpg)

Next click "Create".

![Laramanager resources page](/images/original/laramanager-resources-create.jpg)

* __Name__- This is the name of your resource. It does not need to match the table name.
* __Table Name__ - The exact name of the table in your database.
* __Namespace__ - The namespace of your application.
* __Model__ - The location of your model class. Make sure to include any parent folders (i.e. "Models/").
* __Order Column__ - What column should be ordered after [fields](/docs/fields) are created for this resource.
* __Order Direction__ - Order direction for the order column.

![Laramanager resources page](/images/original/laramanager-resources-create-filled.jpg)

After adding the resource, the "Fields" page will show.

![Laramanager resources page](/images/original/laramanager-resources-create-success.jpg)

This is where the editable table fields are added for this resource. More about this in the [fields section](/docs/fields). Once you have added the resource it will show up in the "Resources" list.

![Laramanager resources page](/images/original/laramanager-resources-populated.jpg)

When created, this resource will automatically be added to the admin navigation. See [navigation section](/docs/navigation) for more information.