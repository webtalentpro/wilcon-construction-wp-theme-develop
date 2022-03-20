
<?php


function accounting_import_files()
{
    return array(
        array(
            'import_file_name'             => 'Wilcon demo import',
        
            'local_import_file'            => trailingslashit(get_template_directory()).'/Demo-content/wilcon-demo-data.xml',
            'local_import_widget_file'     => trailingslashit(get_template_directory()).'/Demo-content/wilcon-widgets.wie',
            
           
        
        ),
    );
}
add_filter('ocdi/import_files', 'accounting_import_files');
