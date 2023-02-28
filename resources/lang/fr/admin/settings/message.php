<?php

return [

    'update' => [
        'error'                 => 'Une erreur a eu lieu pendant la mise à jour. ',
        'success'               => 'Les paramètres ont été mis à jour avec succès.',
    ],
    'backup' => [
        'delete_confirm'        => 'Êtes-vous certain de vouloir supprimer ce fichier de sauvegarde ? Cette action ne peut pas être annulée. ',
        'file_deleted'          => 'Le fichier de sauvegarde a été supprimé correctement. ',
        'generated'             => 'Un nouveau fichier de sauvegarde a été créé correctement.',
        'file_not_found'        => 'Ce fichier de sauvegarde n\'a pas pu être trouvé sur le serveur .',
        'restore_warning'       => 'Oui, restaurez-le. Je reconnais que cela écrasera toutes les données existantes actuellement dans la base de données. Cela déconnectera également tous vos utilisateurs existants (vous y compris).',
        'restore_confirm'       => 'Êtes-vous sûr de vouloir restaurer votre base de données à partir de :filename ?'
    ],
    'purge' => [
        'error'     => 'Une erreur est survenue durant la purge. ',
        'validation_failed'     => 'Votre confirmation de purge est incorrecte. Merci d\'écrire le mot "DELETE" dans la fenêtre de confirmation.',
        'success'               => 'Les enregistrements supprimés ont bien été purgés.',
    ],
    'mail' => [
        'sending' => 'Envoi du message électronique de test...',
        'success' => 'Courrier électronique envoyé !',
        'error' => 'Le courrier électronique n\'a pas pu être envoyé.',
        'additional' => 'Aucun message d\'erreur supplémentaire disponible. Veuillez vérifier vos paramètres de messagerie et le journal d\'erreur de l\'application.'
    ],
    'ldap' => [
        'testing' => 'Test de la connexion, de la liaison et de la requête LDAP ...',
        '500' => 'Erreur500 : Erreur de serveur. Veuillez vérifier les journaux de votre serveur pour plus d\'informations.',
        'error' => 'Une erreur est survenue :(',
        'sync_success' => 'Un échantillon de 10 utilisateurs a été renvoyé depuis le serveur LDAP en fonction de vos réglages:',
        'testing_authentication' => 'Test de l\'authentification LDAP...',
        'authentication_success' => 'Utilisateur authentifié contre LDAP avec succès !'
    ],
    'slack' => [
        'sending' => 'Envoi du message de test Slack...',
        'success_pt1' => 'Succès ! Vérifiez le ',
        'success_pt2' => ' canal pour votre message de test, soyez sûr de cliquer sur Enregistrer ci-dessous afin de sauvegarder vos réglages.',
        '500' => '500 Erreur du serveur.',
        'error' => 'Something went wrong. Slack responded with: :error_message',
        'error_misc' => 'Something went wrong. :( ',
    ]
];
