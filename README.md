# plugin convertDataWpdb -> convertor wordpress wpdb data

# sample insert use wpdb object

    global $wpdb;

    $design = [
        ['name' => $name, '%s'],
        ['family' => $family, '%s']
    ];
    
    $data = new ConvertDataWpdb($design);

    $wpdb->insert('samle table', $data->getData(), $data->getFormat());

    