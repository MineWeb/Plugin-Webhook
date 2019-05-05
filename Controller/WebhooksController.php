<?php
class WebhooksController extends WebhooksAppController{
        public function index(){

                // Chargement du Model Webhooks
                $this->loadModel('Webhooks.Info');

                //On enregistre dans $datas le contenu de toute la table Webhooks
                $datas = $this->Info->find('all');

                //On passe la variable à la vue afin de pouvoir la réutiliser dans index.ctp
                $this->set(compact('datas'));

                //Pour passer plusieurs variable à la vue :
                //$this->set(compact('datas', 'variable', 'infos'));

                //Pour donner un titre à votre page : Dans le html <title> Titre <title>
                $this->set('title_for_layout', 'Gérer les webhooks');

}