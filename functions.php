<?php

add_action('init', 'register_my_custom_post_eventi'); /*'register_my_custom_post_type'*/

function register_my_custom_post_eventi() {

/* 1) DICHIARAZIONE DELLE ETICHETTE */

$labels = array(
'name' => 'Eventi',
'label' => 'Tutti gli Eventi',
'singular_name' => 'Evento',
'add_new' => 'Aggiungi Nuovo',
'add_new_item' => 'Aggiungi Nuovo Evento',
'edit_item' => 'Modifica',
'new_item' => 'Nuovo Evento',
'view_item' => 'Vedi Evento',
'search_items' => 'Ricerca Evento',
'not_found' =>  'Nessun Evento',
'not_found_in_trash' => 'Nessun Evento nel Cestino',
'parent_item_colon' => ''
);

/* 2) CONFIGURAZIONI */

$args = array(
'labels' => $labels,
'public' => true,

'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        
'supports' => array('title', 'editor' )
);

/* 3) CHIAMATA ALLA FUNZIONE INTERNA A WP */

register_post_type('evento', $args);

register_taxonomy('generi',array (0 => 'evento',),array( 'hierarchical' => true, 'label' => 'Generi','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => 'Generi'),'singular_label' => 'genere') );

}

/* META BOX PER EVENTI*/
add_action('add_meta_boxes', 'wpam_crea_box_dettagli');
 
function wpam_crea_box_dettagli(){
    add_meta_box('dettagli-eventi', 'Dettagli Eventi', 'wpam_crea_dettagli', 'evento', 'side', 'high');
}// fine wpam_crea_box_dettagli()
 
function wpam_crea_dettagli( $post ){
    // Prendo i valori delle variabili se gia' presenti
    $wpam_data = get_post_meta( $post->ID, '_wpam_data', true );
    $wpam_esibizione = get_post_meta( $post->ID, '_wpam_esibizione', true );
    $wpam_luogo = get_post_meta( $post->ID, '_wpam_luogo', true );
    $wpam_citta = get_post_meta( $post->ID, '_wpam_citta', true );
    $wpam_link = get_post_meta( $post->ID, '_wpam_link', true );
    echo "<p>Riempi i Dettagli</p>"; ?>

    <div><label>Data:</label> <p><input type="date" name="wpam_data" value="<?php if( isset( $wpam_data ) ) echo $wpam_data; ?>" /></p></div>
    <div><label>Tipo esibizione:</label> <p><input type="text" name="wpam_esibizione" value="<?php echo esc_attr( $wpam_esibizione ); ?>" /></p></div>
    <div><label>Luogo:</label> <p><input type="text" name="wpam_luogo" value="<?php echo esc_attr( $wpam_luogo ); ?>" /></p></div>
    <div><label>Città:</label> <p><input type="text" name="wpam_citta" value="<?php echo esc_attr( $wpam_citta); ?>" /></p></div>
    <div><label>Link:</label> <p><input type="url" name="wpam_link" value="<?php echo esc_attr( $wpam_link ); ?>" /></p></div>

<?php }// fine wpam_crea_dettagli

/*Al primo rigo abbiamo il nostro action hook che ci permetterà di lanciare la funzione */
add_action( 'save_post', 'wpam_salva_dettagli');
 
function wpam_salva_dettagli( $post_id ){
    // controllo che i dati ci siano
 
        update_post_meta( $post_id, '_wpam_data', strip_tags( $_POST['wpam_data']) );
        update_post_meta( $post_id, '_wpam_esibizione', strip_tags( $_POST['wpam_esibizione']) );
        update_post_meta( $post_id, '_wpam_luogo', strip_tags( $_POST['wpam_luogo']) );
         update_post_meta( $post_id, '_wpam_citta', strip_tags( $_POST['wpam_citta']) );
        update_post_meta( $post_id, '_wpam_link', strip_tags( $_POST['wpam_link']) );
 }
 
 /*FOTO
 
 add_action('init', 'register_my_custom_post_foto'); /*'register_my_custom_post_type'

function register_my_custom_post_foto() {

/* 1) DICHIARAZIONE DELLE ETICHETTE 

$labels = array(
'name' => 'Foto',
'label' => 'Tutte le foto',
'singular_name' => 'Foto',
'add_new' => 'Aggiungi Nuovo',
'add_new_item' => 'Aggiungi Nuova Foto',
'edit_item' => 'Modifica',
'new_item' => 'Nuova Foto',
'view_item' => 'Vedi Foto',
'search_items' => 'Ricerca Foto',
'not_found' =>  'Nessuna Foto',
'not_found_in_trash' => 'Nessuna Foto nel Cestino',
'parent_item_colon' => ''
);

/* 2) CONFIGURAZIONI 

$args = array(
'labels' => $labels,
'public' => true,

'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 4,
        'supports' => array('title', 'editor' ),
        'taxonomies' => array('generi',)
);

/* 3) CHIAMATA ALLA FUNZIONE INTERNA A WP *

register_post_type('foto', $args);

}*/

?>