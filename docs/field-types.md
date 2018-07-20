There are 12 field types used when adding [fields](/docs/fields). Make sure these fields map up to appropriate column types (i.e. email as `VARCHAR`, date as `DATE`, etc). Some of the fields require additional information when selected to add to resource. Information about what is needed is listed in "Addition Fields" sections under certain field types.

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