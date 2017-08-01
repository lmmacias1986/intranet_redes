<?php

return [
    'plugin' => [
        'name' => 'Blog',
        'description' => 'A robust blogging platform.'
    ],
    'blog' => [
        'menu_label' => 'Blog',
        'menu_description' => 'Administrar Blog Posts',
        'posts' => 'Posts',
        'create_post' => 'Blog post',
        'categories' => 'Categorías',
        'create_category' => 'Blog categorías',
        'tab' => 'Blog',
        'access_posts' => 'Manage the blog posts',
        'access_categories' => 'Manage the blog categories',
        'access_other_posts' => 'Manage other users blog posts',
        'access_import_export' => 'Allowed to import and export posts',
        'access_publish' => 'Alojado para publicar',
        'delete_confirm' => 'Está seguro?',
        'chart_published' => 'Publicado',
        'chart_drafts' => 'Drafts',
        'chart_total' => 'Total'
    ],
    'posts' => [
        'list_title' => 'Manage the blog posts',
        'filter_category' => 'Categoría',
        'filter_published' => 'Publicado',
        'filter_date' => 'Fecha',
        'new_post' => 'Nuevo Post',
        'export_post' => 'Exportar Post',
        'import_post' => 'Importar Post'
    ],
    'post' => [
        'title' => 'Títutlo',
        'title_placeholder' => 'Título nuevo post',
        'content' => 'Contenido',
        'content_html' => 'HTML Contenido',
        'slug' => 'Slug',
        'slug_placeholder' => 'nuevo-post-slug',
        'categories' => 'Categorías',
        'author_email' => 'Autor Email',
        'created' => 'Creado',
        'created_date' => 'Fecha creación',
        'updated' => 'Actualizado',
        'updated_date' => 'Fecha actualización',
        'published' => 'Publicado',
        'published_date' => 'Fecha publicado',
        'published_validation' => 'por favor especifique la fecha de publicado',
        'tab_edit' => 'Editar',
        'tab_categories' => 'Categorías',
        'categories_comment' => 'Seleccione las categorías',
        'categories_placeholder' => 'No hay categorías creadas.',
        'tab_manage' => 'Administrar',
        'published_on' => 'Publicado en',
        'excerpt' => 'Excerpt',
        'summary' => 'Summary',
        'featured_images' => 'Featured Images',
        'delete_confirm' => 'Eliminar este post?',
        'close_confirm' => 'Este post no se ha guardado.',
        'return_to_posts' => 'Regresar a la lista de posts'
    ],
    'categories' => [
        'list_title' => 'administrar categorías',
        'new_category' => 'Nueva categoría',
        'uncategorized' => 'Sin categoría'
    ],
    'category' => [
        'name' => 'Nombre',
        'name_placeholder' => 'Nombre categoría',
        'description' => 'Descripción',
        'slug' => 'Slug',
        'slug_placeholder' => 'categoría-slug',
        'posts' => 'Posts',
        'delete_confirm' => 'Eliminar categoría?',
        'return_to_categories' => 'Regresar a la lista de categorías',
        'reorder' => 'Reordenar categorías'
    ],
    'menuitem' => [
        'blog_category' => 'Categoría blog',
        'all_blog_categories' => 'Todas las categorías de los blogs',
        'blog_post' => 'Blog post',
        'all_blog_posts' => 'Todos blog posts',

    ],
    'settings' => [
        'category_title' => 'Categorias Lista',
        'category_description' => 'Displays a list of blog categories on the page.',
        'category_slug' => 'Category slug',
        'category_slug_description' => "Look up the blog category using the supplied slug value. This property is used by the default component partial for marking the currently active category.",
        'category_display_empty' => 'Display empty categories',
        'category_display_empty_description' => 'Show categories that do not have any posts.',
        'category_page' => 'Category page',
        'category_page_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'post_title' => 'Post',
        'post_description' => 'Displays a blog post on the page.',
        'post_slug' => 'Post slug',
        'post_slug_description' => "Look up the blog post using the supplied slug value.",
        'post_category' => 'Category page',
        'post_category_description' => 'Name of the category page file for the category links. This property is used by the default component partial.',
        'posts_title' => 'Post List',
        'posts_description' => 'Displays a list of latest blog posts on the page.',
        'posts_pagination' => 'Page number',
        'posts_pagination_description' => 'This value is used to determine what page the user is on.',
        'posts_filter' => 'Category filter',
        'posts_filter_description' => 'Enter a category slug or URL parameter to filter the posts by. Leave empty to show all posts.',
        'posts_per_page' => 'Posts per page',
        'posts_per_page_validation' => 'Invalid format of the posts per page value',
        'posts_no_posts' => 'No posts message',
        'posts_no_posts_description' => 'Message to display in the blog post list in case if there are no posts. This property is used by the default component partial.',
        'posts_order' => 'Post order',
        'posts_order_description' => 'Attribute on which the posts should be ordered',
        'posts_category' => 'Category page',
        'posts_category_description' => 'Name of the category page file for the "Posted into" category links. This property is used by the default component partial.',
        'posts_post' => 'Post page',
        'posts_post_description' => 'Name of the blog post page file for the "Learn more" links. This property is used by the default component partial.',
        'posts_except_post' => 'Except post',
        'posts_except_post_description' => 'Enter ID/URL or variable with post ID/URL you want to except',
        'rssfeed_blog' => 'Blog page',
        'rssfeed_blog_description' => 'Name of the main blog page file for generating links. This property is used by the default component partial.',
        'rssfeed_title' => 'RSS Feed',
        'rssfeed_description' => 'Generates an RSS feed containing posts from the blog.'
    ]
];
