<?php 
function University_post_types() {
    //Event post type
    register_post_type("event", array(
        "rewrite" => array(
            "slug" => "events"
        ),
        "has_archive" => true,
        "show_in_rest" => true,
        "supports" => array(
            "title", "editor", "excerpt"
        ),
        "public" => true,
        "labels" => array(
            "name" => "Events",
            "add_new_item" => "Add new Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
            "singular_name" => "Event"
        ),
        "menu_icon" => "dashicons-calendar"
    ));

    //Program post type
    register_post_type("program", array(
        "rewrite" => array(
            "slug" => "programs"
        ),
        "has_archive" => true,
        "show_in_rest" => true,
        "supports" => array(
            "title", "editor", "excerpt"
        ),
        "public" => true,
        "labels" => array(
            "name" => "Programs",
            "add_new_item" => "Add new Program",
            "edit_item" => "Edit Program",
            "all_items" => "All Programs",
            "singular_name" => "Programs"
        ),
        "menu_icon" => "dashicons-awards"
    ));

        //Professor post type
        register_post_type("professor", array(
            "show_in_rest" => true,
            "supports" => array(
                "title", "editor", "excerpt", "thumbnail"
            ),
            "public" => true,
            "labels" => array(
                "name" => "Professor",
                "add_new_item" => "Add new Program",
                "edit_item" => "Edit Professor",
                "all_items" => "All Professors",
                "singular_name" => "Professor"
            ),
            "menu_icon" => "dashicons-welcome-learn-more"
        ));
};

add_action("init", "university_post_types");


?>