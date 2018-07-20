# Objects

Objects allow elements to be stacked as part of a single content area. For example, a blog post might or might not have a recipe card in the middle of the post. By using objects a post can have access to a variety of pre-built components with specific functionality. 

Currently, there are 4 default objects. But custom objects can be created.

* Text
* WYSIWYG
* Photo Gallery
* Embed

## Basic Use

Objects can only be added to an entry after it has been saved. First, navigate to the entry list.

![Laramanager entry list](/images/original/laramanager-entries-list-populated-small.jpg)

After selecting an entry the entry overview page will be displayed.

![Laramanager entry overview page](/images/original/laramanager-entries-overview-no-objects.jpg)

Now let's add the ability to add objects to these entries. First, add the `PhilMareu\Laramanager\Database\Objectable` trait to the model.
                                                          
```php
class Event extends Model {

    use PhilMareu\Laramanager\Database\Objectable;
    
    ...

}
```

Let's take a look at the entry overview page now.

![Laramanager entry show page with objects option](/images/original/laramanager-objects-entry-show-empty.jpg)

Now the objects section appears in the upper right. Clicking on "Add Object" will bring up a list of available objects.

![Laramanager adding objects](/images/original/laramanager-objects-show-list.jpg)

In this case, there is only the core 4 objects available. Let's select the WYSIWYG objects.

![Laramanager create WYSIWYG object](/images/original/laramanager-objects-create-wysiwyg.jpg)

This label field is default for all objects and is used for titling the object in the admin panel. Everything else is part of the object. In this case a WYSIWYG editor is shown. Now, fill it will content and save.

![Laramanager wysiwyg editor](/images/original/laramanager-objects-wysiwyg-filled.jpg)

The WYSIWYG object now shows up in the list.

![Laramanager object list](/images/original/laramanager-objects-entry-show-populated.jpg)

Clicking on an object will show the display view and edit button.

![Laramanager object preview](/images/original/laramanager-objects-preview.jpg)

## Displaying Objects in Views

The objects for the entry can be rendered in your view by using the `@each` directive.

```blade
@each('laramanager::objects.render', $event->objects, 'object')
```

### Custom display

The display for these objects can be replaced by adding your own in the `view/vendor/laramanager/objects/` folder. For example, by creating `view/vendor/laramanager/objects/text/display.blade.php` LaraManager will use this file to display instead of the default.

## Creating custom objects
Objects are easy to build. The most basic object needs 2 views, a `display.blade.php` and `fields.blade.php`. Optionally, a `scripts.blade.php` view can be used. These files should be located in `resources/views/vendor/laramanager/objects/<your-custom-object-name>`. After you create the object, you will need to add it in "Objects" under the "System" section.

### fields.blade.php
This view is rendered when an admin creates a new object. It displays the object's form fields. These inputs should have names in the `data` array (e.x. `<input type="text" name="data[introduction]">`). The `data` array is serialized and saved.

If you want to access the image browser, you can use the use the special object fields "Image" and "Images" using an include (Note that these are different than the resource fields). For example if you need to add a field that will allow users/clients to select one image, add the following.

```blade
@include('laramanager::objects.fields.image', ['name' => 'file_id', 'label' => 'Photo'])
```

...or select multiple images.

```
@include('laramanager::objects.fields.images', ['name' => 'file_ids', 'label' => 'Photos'])
```

### display.blade.php
This view will receive the `$object` variable that contains the input data saved from the `fields.blade.php` view. The data can be accessed using the `data()` method (e.x. `$object->data('introduction')`).

If you are using the "Image" or "Images" object fields, you can access the image(s) using either `$object->file('file_id')` or `$object->files('file_ids')`.

### scripts.blade.php
Use this if your object needs JS or other assets loaded on the object form page.