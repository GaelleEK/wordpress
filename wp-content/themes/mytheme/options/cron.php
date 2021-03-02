<?php

//add_action('montheme_import_content', function () {
//    touch(__DIR__ . '/demo-' . time());
//});

// * Ajoute un interval pour les taches a executer
//add_filter('cron_schedules', function ($schedules) {
//    $schedules['ten_seconds'] = [
//        'interval' => 10,
//        'display' => 'Toutes les 10 secondes'
//    ];
//    return $schedules;
//});



// * Permet d'effacer la tache si elle existe
//if ($timestamp = wp_next_scheduled('montheme_import_content')) {
//    wp_unschedule_event($timestamp, 'montheme_import_content');
//}

// * Permet d'afficher la liste les hooks utilisés
//echo '<pre>';
//var_dump(_get_cron_array());
//echo '</pre>';
//die();


// * Permet d'enregistré la tâche si elle n'existe pas déjà
//if (!wp_next_scheduled('montheme_import_content')) {
//    wp_schedule_event(time(), 'ten_seconds', 'montheme_import_content');
//};
