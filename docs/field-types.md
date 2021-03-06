# Field Types

There are 12 field types used when adding [fields](/docs/fields). Make sure these fields map up to appropriate column types (i.e. email as `VARCHAR`, date as `DATE`, etc). Some of the fields require additional information when selected to add to resource. Information about what is needed is listed in "Addition Fields" sections under certain field types.

## Core Fields Types

### Checkbox
`TINYINT(1)` - Checkbox with a value of 1 or 0
### Date
`DATE` - Date picker
### Email
`VARCHAR` - Text field
### Image
`UNSIGNED INT` - Displays the image browser. This fields requires a relational method added to the `Model`. For example, adding a "Featured Image" to `Event`.
```
public function featuredImage()
{
    return $this->belongsTo(PhilMareu\Laramanager\Models\LaramanagerImage::class);
}
```

#### Additional Fields

* __Method Name__ - The name of the method that grabs the image. In the above example "featuredImage" would be entered.

### Images
This field is similar to Image but allows for selection and reordering of multiple images. This field requires a pivot table such as `event_image` and a method added to the `Model`. For example, adding a "Gallery" to `Event`.
```
public function gallery()
{
    return $this->belongsToMany(PhilMareu\Laramanager\Models\LaramanagerImage::class)->orderBy('ordinal', 'asc');
}
```

The `orderBy('ordinal', 'asc')` is required to order the images correctly.

<div class="uk-alert uk-alert-warning uk-flex uk-flex-middle">
    <span uk-icon="icon: warning; ratio: 1.5" class="uk-margin-small-right"></span> Make sure your pivot table contains an ordinal column
</div>

#### Additional Fields

* __Method Name__ - The name of the method that grabs the images. In the above example "gallery" would be entered.

### Markdown
`TEXT` - A full screen markdown editor with preview panel.

### Password
`VARCHAR` - Password field
### Relational
`UNSIGNED INT` - Creates a dropdown populated with data from another table. This field required a relational method added to the model. For example, adding `User` to the `Event` model.

```
public function user()
{
    return $this->belongsTo(User::class);
}
```

#### Additional Fields

* __Method name__ - The name of the method in the model. In the above example "user" would be entered.
* __Relation model__ - The model with the data. In the above example "App\Event" would be entered.
* __Relation title field__ - The column with the "title" data. This is what is displayed in the dropdown that the user selects.
* __Relation key field__ - The key or "id" column for reference.

### Select
`ENUM` - Basic select field that is populated with a defined static list of options.

#### Additional Information
* __List Options__ - A list of options with title and key separated by a colon in a pipe ("|") separated list.  (e.x. movie:Movie|band:Band|comedy:Comedy)

### Slug
`VARCHAR` - Text field that auto-creates a slug from a targeted field.

#### Additional Information
* __Field to slugify__ - The name of the field to reference as part of the slugifying process.

### Text
Basic text field
### Textarea
Basic textarea field
### WYSIWYG
`TEXT` - A ckeditor instance

## Creating Custom Field Types

As of version `1.3.4` custom field types can be created to use in your resource fields. With very little code, you can easily make basic field types.

### Field Type Class

First, create a class for your new field type and extend the `PhilMareu\Laramanager\FieldTypes\FieldType` class.

```php
class MyFieldType extends FieldType
{

}
```

Let's look at the `PhilMareu\Laramanager\FieldTypes\FieldType` class.

```php
abstract class FieldType
{
    /**
     * Remove field from $_GET before saving to database
     *
     * @var bool
     */
    public $filter = false;

    /**
     * The name of the relationship to eager load.
     *
     * @return array
     */
    public function eagerLoad()
    {
        return [];
    }

    /**
     * Mutate form data
     *
     * @param Request $request
     * @param $name
     * @return Request
     */
    public function mutate(Request $request, $name)
    {
        return $request;
    }

    /**
     * Handle any relationship
     * 
     * @param Request $request
     * @param $field
     * @param $entry
     * @return mixed
     */
    public function relations(Request $request, $field, $entry)
    {
        return $entry;
    }
}
```

Let's talk about each of these. The `filter` property is asking if the field name should be excluded from the save/update process.
For example, if you have a field collecting an array of information (like checkboxes). when trying to save this field an error will be thrown
since the array cannot be saved in the database.

The `eagerLoad` method is an array of relationships that should be eager loaded. This is mainly used when displaying the list of entries. For example, a relationship
field will need to load the relation before showing the entries list. Otherwise, the relation is loaded for each row (1+n).

The `mutate` method is used to process the data before it gets updated in the database.

The `relations` is used to handle any relations that need to be saved for this entry.

### Field Type Views

Next, the views for the field type need to be created. They should all be located in `views/<your-custom-field-type-slug>`. The `display.blade.php` and `fields.blade.php` views are required.

#### display.blade.php

This view is a formatted look at the field value. It is mainly used to display the field data in the admin panel such as the entries list.
The `$field` and `$entry` variable is available in this view.

#### fields.blade.php

This view contains the actual form input(s). The `$field` variable is available. The `$entry` variable is available for edit operations.

#### options.blade.php

A field type might need additional information. For example, the relational field type needs to know the model in order to generate the dropdown list.
These inputs should have names in the data array (e.x. <input type="text" name="data[model]">). The data array is serialized and saved.

#### scripts.blade.php
Use this if your field type needs JS or other assets loaded on the form page.

### Registering Field Types

Before a field type can be used, it will need to be added in the "Field Types" section under the "System" section.