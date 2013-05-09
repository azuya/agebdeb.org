<div class="row">
    <div class="span3"><?php echo View::factory("menu/comites") ?></div>
    <div class="span9">

        <?php defined('SYSPATH') or die('No direct script access.'); ?>

        <h2><?php echo $comite->nom ?></h2>

        <h3><?php echo $comite->description ?></h3>

        <?php echo Text::auto_p($comite->description_long) ?>        

        <h4>Conseil Exécutif</h4>        

        <?php foreach ($comite->users->find_all() as $user): ?>

            <?php $poste = ORM::factory("user_comite", array("user_id" => $user, "comite_id" => $comite))->poste ?>

            <?php echo Bootstrap::media(Gravatar::image($user->user_email), "<h4 class='media-heading'>$poste->nom</h4><p>$user->user_nicename</p><p>$poste->description</p>") ?>

        <?php endforeach ?>

        <h4>Liens</h4>

        <ul class="unstyled">
            <li><?php echo HTML::anchor("https://docs.google.com/document/d/1uf5eQxLGmgoBH245HRykhOsPpqeIjIOho0m3DrP7ibM/", "Charte du Coda") ?></li>
        </ul>

    </div>
</div>